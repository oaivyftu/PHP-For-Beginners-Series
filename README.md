# LaravelFromScratch

🚀 **LaravelFromScratch** is a lightweight PHP framework built from scratch for learning purposes.  
The goal of this project is to help beginners understand how a modern PHP framework like Laravel works internally.

> ⚠️ This project is for **educational purposes only**.  
> It is **NOT intended for production use**.

---

## 🎯 Purpose

Many developers use Laravel without fully understanding what happens behind the scenes.

This project helps you learn:
- How routing works
- How controllers are resolved
- How dependency injection is implemented
- How MVC fits together internally

Instead of treating Laravel as a black box, you build the core concepts yourself.

---

## 🧠 What You Will Learn

- MVC architecture (Model – View – Controller)
- Custom routing system
- Controllers and actions
- Dependency Injection Container
- Service binding and resolution
- Request handling
- Basic view rendering
- Configuration management
- PSR-4 style autoloading

---

## 📂 Project Structure

```
.
├── Core/
│   ├── App.php
│   ├── Container.php
│   ├── Router.php
│   ├── Database.php
│   └── helpers.php
│
├── Http/
│   └── Controllers/
│
├── views/
│
├── public/
│   └── index.php
│
├── bootstrap.php
├── composer.json
└── README.md
```

---

## ⚙️ Requirements

- PHP 8.1+
- Composer
- MySQL (optional)

---

## 🚀 Installation

```bash
git clone https://github.com/oaivyftu/LaravelFromScratch.git
cd LaravelFromScratch
composer install
```

```bash
php -S localhost:8000 -t public
```

---

## 📜 License

MIT License  
Free to use for learning purposes.
