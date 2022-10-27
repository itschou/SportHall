<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

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

        // Variables for theme color

        $backgroundColor = Config::get('config.color.background');
        $primaryColor = Config::get('config.color.primary');
        $secondaryColor = Config::get('config.color.secondary');
        $secondaryColorbuttons = Config::get('config.color.secondarybuttons');
        
        view()->share('backgroundColor', $backgroundColor);
        view()->share('primaryColor', $primaryColor);
        view()->share('secondaryColor', $secondaryColor);
        view()->share('secondaryColorbuttons', $secondaryColorbuttons);
     
     
        // Variables for theme color
    }
}
