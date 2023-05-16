<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TheaterController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/movie/{id}', [DetailController::class, 'index']);
Route::get('/upcoming', function () {
    return $upcoming = Movie::getUpcoming();
});
Route::get('/cities', function () {
    $cities = Movie::getCities();
    return $cities;
});
Route::get('/theater/', [TheaterController::class, 'index']);
Route::get('/schedules/{theater}', function ($theater) {
    $schedules = Movie::getSchedules($theater);
    return $schedules;
});
Route::get('/schedules/{theater}/{id}', function ($theater, $id) {
    $schedules = Movie::getSchedules($theater, $id);
    return $schedules;
});