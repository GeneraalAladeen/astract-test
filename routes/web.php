<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::post('store', [MessageController::class, 'store'])->name('message.store');

    Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
        Route::get('/', [DashboardController::class , 'messages'])->name('admin.dashboard.messages');
        Route::get('/messages', [DashboardController::class , 'messages'])->name('admin.dashboard.messages');
        Route::get('/users', [DashboardController::class , 'users'])->name('admin.dashboard.users');
    });
});
