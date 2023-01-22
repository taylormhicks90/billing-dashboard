<?php

use Illuminate\Support\Facades\Route;
use Taylor\BillingDashboard\Http\Controllers\DashboardController;

Route::middleware('web')->group(function (){
    Route::get('billing', DashboardController::class);
});
