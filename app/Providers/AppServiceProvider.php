<?php

namespace App\Providers;


use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //









        view()->composer(['public/layouts/header', 'public/page/index'], function ($view) {
            $category = Category::all();
            $view->with('category', $category);
        });
    }
}
