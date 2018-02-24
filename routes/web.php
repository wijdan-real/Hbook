<?php


Route::get('/',function (){

    return view('homepage');
});
Route::get('/logout',function (){
auth()->logout();
    return view('homepage');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('hottler/home','HottlerController@index');
Route::get('hotel/login','Hottler\LoginController@showLoginForm')->name('hottler.login');
Route::post('/hottler','Hottler\LoginController@login');
Route::post('hottler-password/email','Hottler\ForgotPasswordController@sendResetLinkEmail')->name('hottler.password.email');
Route::get('hottler-password/reset','Hottler\ForgotPasswordController@sendLinkRequestForm')->name('hottler.password.request');
Route::post('hottler-password/reset','Hottler\ResetPasswordController@reset');
Route::get('hottler-password/reset/{token}','Hottler\ResetPasswordController@showResetForm')->name('hottler.password.reset');


Route::get('/homepage',function (){

    return view('homepage');
});
Route::get('/userprofile','UserInfoController@show');

Route::get('/user/info','UserInfoController@index');
Route::post('/userprofile',"UserInfoController@store");


Route::get('/logout',function (){

   auth()->logout();
    return view('homepage');
});








    Route::get('/locationredirect',function (){

    return view('locationredirect');
});



Route::get('/categoryhotel',function (){

    return view('specificcategory');
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


Route::get('/storydescription',function (){

    return view('storydescription');
});


Route::get('/bookingform',function(){

    return view('customerbookingform');
});





Route::get('/tripplan',function(){

    return view('tripplan');
});






Route::get('/comparison',function (){

    return view('comparisonindex');
});


Route::get('/comparison1',function (){

    return view('comparisonindex2');
});