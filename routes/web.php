<?php

use App\Logo;
use App\Social;
use App\BannerVideo;
use App\AboutSection;
Route::get('/', function () {
    $photo = Logo::where('status',1)->first('photo');
    if (!$photo) {
        $photo =  "default.jpg";
    }
    else{
        $photo= $photo->photo;
    }

    $allSocial = Social::all();
    $allBaner = BannerVideo::all();
    $allAbout = AboutSection::all();
    // echo $photo;
    return view('welcome',compact('photo', 'allSocial', 'allBaner', 'allAbout'));
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

Route::get('/socialLinks', 'DashboardController@socialLinks')->name('socialLinks');
Route::post('/saveSocial', 'DashboardController@saveSocial')->name('saveSocial');
Route::get('/deleteThisIcon/{id}', 'DashboardController@deleteThisIcon')->name('deleteThisIcon');

Route::get('/bannerVideo', 'DashboardController@bannerVideo')->name('bannerVideo');
Route::post('/savebannerVideo', 'DashboardController@savebannerVideo')->name('savebannerVideo');
Route::get('/deletebannerVideo/{id}', 'DashboardController@deletebannerVideo')->name('deletebannerVideo');

Route::get('/aboutSection', 'DashboardController@aboutSection')->name('aboutSection');
Route::post('/saveaboutSection', 'DashboardController@saveaboutSection')->name('saveaboutSection');
Route::get('/deleteaboutSection/{id}', 'DashboardController@deleteaboutSection')->name('deleteaboutSection');
