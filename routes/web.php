<?php

use App\Http\Controllers\UserController;
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
    return view('stuction.homepage');
});

Route::get('/profile', function () {
    return view('stuction.user-profile');
});


/*
 * Auth Routes
 */
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/signup/verify', [UserController::class, 'signup']);
// Route::post('/signup/verify', function () {
//     dd('hello');
// });
Route::get('/signup', function () {
    return view('auth.signup');
});

Route::get('/settings', function() {
    return view('stuction.user-settings');
});