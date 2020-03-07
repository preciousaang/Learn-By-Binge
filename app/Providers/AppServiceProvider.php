<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Course;
use App\File;
use App\Observers\CourseObserver;
use App\Observers\FileObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(!session()->has('cart')){
            $cart = [];
            session(['cart'=>$cart]);
        }
        Schema::defaultStringLength(255);
        Course::observe(CourseObserver::class);
        File::observe(FileObserver::class);
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
