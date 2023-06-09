<?php

namespace App\Providers;

//use Illuminate\Pagination\Paginator;
use Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // ...

        $this->app->bind('path.public', function() {
            return base_path('/html');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
//        Paginator::useBootstrap();
    }
}
