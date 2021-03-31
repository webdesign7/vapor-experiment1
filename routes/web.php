<?php

use Illuminate\Support\Facades\Log;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/env', function () {
    dd(env('MY_ENV'));
});

Route::get('/log', function () {
    Log::info('This is an info message');
    Log::critical('This is a critical message');

    return 'Logged items successfully.';
});
