<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;

use App\Categories;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function($view)
        {
            $view->with('categories',Categories::get(['category_name']));
        });
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
