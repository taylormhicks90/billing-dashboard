<?php

namespace Taylor\BillingDashboard;

use Illuminate\Support\ServiceProvider;

class BillingDashboardServiceProvider extends ServiceProvider
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
