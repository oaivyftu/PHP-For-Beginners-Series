<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.)';
}

if (! empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

// log in the user if the credentials match.
$db = App::resolve(Database::class);
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

// we have a user, but we don't know if the password provided matches what we have in the database
if ($user) {
    if (password_verify($password, $user['password'])) {
        login($user);

        header('location: /');
        exit();
    }
}

return view('session/create.view.php', [
    'errors' => [
        'password' => 'No matching account found for that email address and password.'
    ]
]);

