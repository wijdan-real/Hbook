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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/asd', function(){
    return view('asd');

});


Route::get('/location-redirect', function(){
    return view('location-redirect');

});


Route::get('/hotel-profile',function (){

    return view('hotel-profile');
});

Route::get('/hotel-profile1',function (){

    return view('hotel-profile1');
});

Route::get('/hotel-profile4',function (){

    return view('hotel-profile4');
});

Route::get('/hotel-profile2',function (){

    return view('hotel-profile2');
});


Route::get('/modal',function (){

    return view('test-modal');
});

Route::get('/gallery',function (){

    return view('gallery');
});

Route::get('/regprocess',function (){

    return view('regprocess');
});

Route::get('/asd',function (){

    return view('asd');
});


Route::get('/star',function (){

    return view('star');
});

Route::get('/hme',function (){

    return view('home2');
});






