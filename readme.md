## Angular todo app

A super simple [Agular](http://angularjs.org/) + [Laravel 4](http://laravel.com/) todo app - I do plan on adding to this..

Based heavily on the excellent [Laravel and Angular](https://laracasts.com/lessons/laravel-and-angular) tutorial featured on [Laracasts](https://laracasts.com/) - massive love to [Jeffrey Way](https://twitter.com/jeffrey_way).

### Installation
- Clone the repo (`git clone git@github.com:BeingTomGreen/angular-laravel-todo-app.git`)
- Create a new database & configure `app/config/database` with the appropriate details (you could also [use environments](http://laravel.com/docs/configuration#environment-configuration))
- Run `php composer install` to install the dependencies ([get composer here](http://getcomposer.org/download/))
- Run `php artisan migrate` (to setup the database)
- Run `php artisan db:seed` (if you want some sample data)

### License

This is open-sourced software licensed under the [MIT license](http://beingtomgreen.mit-license.org/).