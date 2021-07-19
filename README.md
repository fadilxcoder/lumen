# NOTES

- PHP 7.4.9
- Laravel Framework Lumen (8.2.4)  
- vhost : http://laravel.lumen.local/
- Create project by `composer create-project --prefer-dist laravel/lumen lumen`
- Enable *Facade* in `bootstrap/app.php` - `$app->withFacades();`
- Routes : `routes/web.php`
- Controllers : `app/Http/Controllers`
- Views : `resources/views`
- Using commands : `php artisan cache:clear`
- Using Helpers (In-built / Customs)
- - Install package : `composer require laravel/helpers` (Laravel helpers)
- - Create in `app/helpers.php`
- - Add in `composer.json` -> `"autoload" -> "files" -> ""app/helper.php""`
- - Use `composer dump-autoload` for app to take into consideration changes

# Resources

- https://lumen.laravel.com/docs/8.x/database (Database)
