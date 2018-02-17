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

Route::get('/location-redirect1',function (){

    return view('location-redirect1');
});



Route::get('/location-redirect',function (){

    return view('locationredirect');
});



Route::get('/specificcategory',function (){

    return view('specificcategory');
});


Route::get('/home3',function (){

    return view('home3');
});



Route::get('/homepage',function (){

    return view('homepage');
});



Route::get('/hotelcustomer',function (){

    return view('hotelcustomer');
});


Route::get('/hoteladmin',function (){

    return view('hoteladmin');
});



Route::get('/userprofile',function (){

    return view('userprofile');
});


Route::get('/usersetting',function (){

    return view('usersetting');
});


Route::get('/storydescription',function (){

    return view('storydescription');
});


Route::get('/bookingform',function(){

    return view('customerbookingform');
});


Route::get('/tripplan',function(){

    return view('tripplan');
});


Route::get('/registration',function(){

    return view('registration');
});


Route::get('/userregistration',function(){

    return view('userregistration');
});


Route::get('/hotelregistration',function (){

    return view('hotelregistration');
});


Route::get('/comparison1',function (){

    return view('comparisonindex2');
});






