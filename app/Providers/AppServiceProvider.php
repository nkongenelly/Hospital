<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

    Schema::defaultStringLength(191);
    date_default_timezone_set('Africa/Nairobi');
}
 

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
