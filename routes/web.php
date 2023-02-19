<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/profile', [PageController::class, 'profile'])->name('page.profile');

/*
 * Page & It's Auth Routes
 */
Route::get('/login', [PageController::class, 'login'])->name('page.login');
Route::post('/login', [UsersController::class, 'login'])->name('auth.login');

Route::get('/signup', [PageController::class, 'signup'])->name('page.signup');
Route::post('/signup', [UsersController::class, 'signup'])->name('auth.signup');

Route::get('/settings', [PageController::class, 'settings'])->name('page.settings');