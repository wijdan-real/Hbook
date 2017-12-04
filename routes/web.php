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
Route::post('/registration/hotel-profile','registrationController@store');
Route::post('/login/hotel-profile','sessionsController@store');
Route::get('/logout','sessionsController@destroy');

Route::get('/location-redirect', function(){
    return view('location-redirect');

});

Route::get('/hotel-profile4',function (){

    return view('hotel-profile4');
});
Route::get('/hme',function (){

   if(auth()->check())
   {
return redirect('/hotel-profile4');
   }
    else
    {
        return view('home2');
    }
});








