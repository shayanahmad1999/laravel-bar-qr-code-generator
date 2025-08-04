# Laravel 12 with barcode and QR code generator

This README will guide you through setting up and running the Laravel project locally.

## Prerequisites

Ensure the following tools are installed on your system:
🔧 Tech Stack:

-   PHP >= 8.4
-   Laravel = 12
-   Composer
-   picqer/php-barcode-generato

## Installation & Setup

Follow the steps below to get started:

```bash
# Clone the repository
git clone https://github.com/shayanahmad1999/laravel-bar-qr-code-generator.git
cd folder_name

# Install PHP dependencies
composer install

# Copy and set up the environment configuration
cp .env.example .env

# Generate application key
php artisan key:generate

# run project
php artisan serve
```

### if you want to install from begining please below follow the step

### Install laravel

composer create-project laravel/laravel example-app

### Navigate to your project directory:

cd example-app

### 🧩 Install picqer/php-barcode-generator

composer require picqer/php-barcode-generator

### for more please follow below link

https://techsolutionstuff.com/post/laravel-12-barcode-generation-step-by-step-tutorial

### 🧩 Install the Simple QR Code Package

composer require simplesoftwareio/simple-qrcode

### for more please follow below link

https://techsolutionstuff.com/post/laravel-12-how-to-generate-qr-codes-a-step-by-step-guide

````

```bash
php artisan serve
````

---

## ✨ Credits

-   Laravel Framework

---

## 📄 License

This project is open-source under the [MIT License](https://opensource.org/licenses/MIT).

```

```
