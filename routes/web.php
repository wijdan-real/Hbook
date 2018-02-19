<?php


    Route::get('/', function () {
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



Route::get('/userprofile',function(){
    return view('userprofile');
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


Route::get('/registration','MemberRegistrationController@create');
Route::post('/userprofile','MemberRegistrationController@store');
//Route::post('/logout','MemberSessionsController@destroy');
Route::get('/logout','MemberSessionsController@destroy');



Route::get('/comparison',function (){

    return view('comparisonindex');
});


Route::get('/comparison1',function (){

    return view('comparisonindex2');
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

Route::get('/hotelregistration',function(){

    return view('hotelregistration');
});


Route::get('/comparison1',function (){

    return view('comparisonindex2');
});






