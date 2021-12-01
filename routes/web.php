<?php

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

Auth::routes();
Route::redirect('/', '/home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index']);
Route::post('/projects', [App\Http\Controllers\ProjectController::class, 'storeone']);
Route::post('/projects/{id}/timers/stop', [App\Http\Controllers\TimerController::class, 'stopRunning']);
Route::post('/projects/{id}/timers', [App\Http\Controllers\TimerController::class, 'store']);
Route::get('/project/timers/active', [App\Http\Controllers\TimerController::class, 'running']);
