<?php

namespace Glint\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Inertia\Inertia;
use Glint\FrontendState;

class DashboardController extends Controller
{
    public function __invoke()
    {
        Inertia::setRootView('billing-dashboard::app');

        View::share([
            'cssPath' => __DIR__.'/../../../public/css/app.css',
            'jsPath' => __DIR__.'/../../../public/js/app.js',
        ]);

        Inertia::share(app(FrontendState::class)->current(auth()->user()));

        return Inertia::render('BillingDashboard');
    }
}
