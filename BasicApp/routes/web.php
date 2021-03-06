<?php

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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact/submit','MessagesController@submit');

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login','SessionController@create');
Route::post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');

use App\Mail\lel;

$user = \Auth::loginUsingId(1);

Route::get('testemail', function () use ($user){
  \Mail::to($user)->send(new lel($user));
});
