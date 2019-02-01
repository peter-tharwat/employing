<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
 
    public function register()
    {
         /* $this->app['path.public']='/';*/
         $this->app->bind('path.public', function() {
            return realpath(base_path().'/public');
        });
    }
}
