<?php

namespace Glint;

use Illuminate\Support\ServiceProvider;

class GlintServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(FrontendState::class);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views','billing-dashboard');
    }
}
