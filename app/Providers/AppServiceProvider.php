<?php

namespace App\Providers;

use App\Models\Theme\Config;
use App\Models\Theme\Navbar;
use App\Repositories\CartRepository;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $view->with('navbarItems', Navbar::all());
            $view->with('config', Config::get()->first());
            $view->with('cartContent', (new CartRepository())->content());
            $view->with('count', (new CartRepository())->count());
        });
    }
}
