<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Auth;
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
})->name('welcome');

Auth::routes();
// Socialite routes
Route::group(['as' => 'login.', 'prefix' => 'login', 'namespace' => 'Auth'], function () {
    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
    Route::get('/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('callback');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile.index');
Route::patch('/profile', [HomeController::class, 'updateProfile'])->name('profile.update');
Route::post('/top-up', [TopupController::class, 'payment'])->name('payment');
Route::post('/transfer', [TransferController::class, 'send'])->name('transfer');
Route::post('/withdraw', [WithdrawController::class, 'withdraw'])->name('withdraw');
Route::view('invest','invest')->name('invest');
Route::view('refer','refer')->name('refer');


Route::redirect('/admin','/admin/dashboard');

// Pages route e.g. [about,contact,etc]
Route::get('/{slug}', PageController::class)->name('page');
