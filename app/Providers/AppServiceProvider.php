<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Pagination\Paginate\Paginate;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->singleton(Paginate::class, function ($app) {
//            return new Paginate();
//        });
    }
}
