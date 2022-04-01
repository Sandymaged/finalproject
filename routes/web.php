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
    return view('index');
});
Route::get('doctor', function () {
    return view('doctor');
});
Route::get('corona', function () {
    return view('crona');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('store', 'FristController@store')->name('store');
Route::get('create', 'FristController@create');


Route::post('gett', 'SecondController@gett')->name('gett');
Route::get('reserve', 'SecondController@reserve')->middleware('auth');


Route::get('show', 'SecondController@show')->name('show')->middleware('admin');
Route::get('edit/{id}', 'SecondController@edit')->name('edit');
Route::post('update/{id}', 'SecondController@update')->name('update');

Route::get('show2', 'SecondController@show2')->name('show2');
Route::get('edit2/{id2}', 'SecondController@edit2')->name('edit2');
Route::post('update2/{id2}', 'SecondController@update2')->name('update2');

Route::get('show3', 'SecondController@show3')->name('show3');
Route::get('edit3/{id3}', 'SecondController@edit3')->name('edit3');
Route::post('update3/{id3}', 'SecondController@update3')->name('update3');

Route::get('show4', 'SecondController@show4')->name('show4');
Route::get('edit4/{id4}', 'SecondController@edit4')->name('edit4');
Route::post('update4/{id4}', 'SecondController@update4')->name('update4');


Route::get('pos', function () {
    return view('show_postive');
});
Route::get('location', function () {
    return view('user-map');
});

Route::get('getted', 'SecondController@getted')->name('getted');
Route::get('set', 'SecondController@set');


Route::get('profile', function () {
    return view('profile');
})->middleware('auth') ;

Route::post('newsin', 'ThirdController@newsin')->name('newsin');
Route::get('news', 'ThirdController@news');


Route::get('places', 'ThirdController@placed');


Route::get('phys', function () {
    return view('phys');
});

Route::get('about', function () {
    return view('about');
});
