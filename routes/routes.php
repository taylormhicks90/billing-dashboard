<?php

use Illuminate\Support\Facades\Route;
use Glint\Http\Controllers\DashboardController;

Route::middleware('web')->group(function (){
    Route::get('billing', DashboardController::class);
});
