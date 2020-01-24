<?php

use App\Logo;
Route::get('/', function () {
    $photo = Logo::where('status',1)->first('photo');
    if (!$photo) {
        $photo =  "default.jpg";
    }
    else{
        $photo= $photo->photo;
    }
    // echo $photo;
    return view('welcome',compact('photo'));
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'DashboardController@mainPage')->name('home');

// Dashboard First or Mail page
Route::get('/my/dashboard', 'DashboardController@mainPage')->name('mainPage');
// Deshboard logo setting
Route::get('/my/logo/settings', 'DashboardController@logosettings')->name('logosettings');
Route::post('/saveNewLogo', 'DashboardController@saveNewLogo')->name('saveNewLogo');
Route::get('/activeThisLogo/{id}', 'DashboardController@activeThisLogo')->name('activeThisLogo');
Route::get('/deleteThisLogo/{id}', 'DashboardController@deleteThisLogo')->name('deleteThisLogo');
