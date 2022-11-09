# Laravel 9 Blog with Livewire

## Installation

Before migrating comment `View:share()` on `AppServiceProvider.php` otherwise migrate will not run.

```
git clone https://github.com/developermithu/laravel-9-blog.git
cd laravel-9-blog
composer install
npm install & npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
npm run watch
```
