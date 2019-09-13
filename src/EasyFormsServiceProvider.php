<?php

namespace Faridibin\EasyForms;

use Illuminate\Support\ServiceProvider;

class EasyFormsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'easy-forms');

        $this->publishes([
            __DIR__.'/config/easy-forms.php' => config_path('easy-forms.php'),
        ], 'easy-forms-config');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'easy-forms-migrations');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/easy-forms.php', 'easy-forms'
        );
    }
}
