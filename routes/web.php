<?php

use App\Post;

    Route::get('/', function ()
    {
        if(auth()->check())
        {
           return redirect('/userprofile');
        } else
        {
            $pics=App\Post::all();
            return view('homepage',compact('pics'));
        }

    });

Route::get('/logout',function (){
auth()->logout();
    return redirect('/homepage');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




Route::get('admin/home','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::get('admin/register','Admin\RegisterController@showRegistrationForm');
Route::post('/adminprofile','Admin\RegisterController@register');
Route::post('/admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');












Route::get('/homepage',function (){
    $pics=App\Post::all();
    return view('homepage',compact('pics'));
});
Route::get('/userprofile','UserInfoController@show');




Route::get('/hotelprofile',function()
{
    return view('hotelprofile');
});








Route::get('/user/info/{id}','UserInfoController@index');
Route::post('/userprofile',"UserInfoController@edit");
Route::post('/userprofile/upload',"UserInfoController@uploadPhoto");
Route::post('/userprofile',"UserInfoController@edit");
Route::post('/upload',"PostController@store");


Route::get('/logout',function (){

   auth()->logout();
    $pics=App\Post::all();
    return redirect('/homepage');
   // return view('homepage');
});








    Route::get('/locationredirect',function (){

    return view('locationredirect');
});



Route::get('/categoryhotel',function (){

    return view('specificcategory');
});






Route::get('/homepage',function (){
    $pics=App\Post::all();
    return view('homepage',compact('pics'));

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