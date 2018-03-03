<?php

namespace App\Providers;
use App\Nivel;
use App\Galeria;
use Illuminate\Support\ServiceProvider;

class AdminisComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.admin', function($view){
            $view->with('niveles', Nivel::all());
        });
        view()->composer('layouts.template', function($view){
            $view->with('niveles', Nivel::all());
        });
        view()->composer('layouts.admin', function($view){
            $view->with('galerias', Galeria::all());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
