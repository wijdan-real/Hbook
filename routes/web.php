<?php


Route::get('/',function (){

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


Route::get('/user/registration','MemberRegistrationController@create');
Route::get('/logout/member','MemberSessionsController@destroy');
Route::post('/userprofile','MemberRegistrationController@store');
Route::post('/userprofile','MemberRSessionController@store');
//Route::post('/logout','MemberSessionsController@destroy');

Route::post('/hotelprofile','HottlerRegistrationController@store');
Route::post('/hbook','HottlerSessionController@store');
Route::get('/logout/hottler','HottlerSessionController@destroy');
Route::get('/hotel/registration','HottlerRegistrationController@create');



Route::get('/comparison',function (){

    return view('comparisonindex');
});


Route::get('/comparison1',function (){

    return view('comparisonindex2');
});






