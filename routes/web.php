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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', 'AuthController@login')->name('form_login');

// Route::prefix('auth')->group(function () {
//     Route::get('login', 'AuthController@formLogin')->name('form.login');
//     Route::get('register', 'AuthController@formRegister')->name('form.register');
//     Route::post('register', 'AuthController@register')->name('register');
//     Route::post('login', 'AuthController@login')->name('login');
//     Route::get('refresh', 'AuthController@refresh');
//     Route::group(['middleware' => 'auth:api'], function () {
//         Route::get('user', 'AuthController@user');
//         Route::post('logout', 'AuthController@logout');
//     });
// });

// Route::group(['middleware' => 'auth:api'], function () {
//     // Users
//     Route::get('users', 'UserController@index')->middleware('isOrganizer');
//     Route::get('users/{id}', 'UserController@show')->middleware('isOrganizerOrSelf');
// });


// Route to handle page reload in Vue except for api routes
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '^(?!api\/)[\/\w\.-]*');

// Route::get('/test', function () {
//     echo 'test';
// });

// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');
