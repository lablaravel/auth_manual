<?php

use App\Http\Controllers\Auth\LoginTenantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
});

Route::prefix('/hotspot')->group( function () {
    Route::get('/',[LoginTenantController::class,'view'])->name('login.view');
    Route::post('/',[LoginTenantController::class,'store'])->name('login.store');
});

