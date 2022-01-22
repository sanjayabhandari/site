<?php

use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Composer $composer) {
    $composer->dumpAutoloads();
    \Artisan::call('route:cache');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    \Artisan::call('migrate');
    
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
