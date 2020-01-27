<?php

use App\Logo;
use App\Social;
use App\BannerVideo;
use App\AboutSection;
use App\ExperienceCanada;
use App\ExperienceTheWorld;
use App\Partner;
use App\Faq;
use App\SubFaq;
use App\Contact;
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
    $ExperienceCanada = ExperienceCanada::all();
    $ExperienceTheWorld = ExperienceTheWorld::all();
    $Partner = Partner::all();
    $Faq = Faq::all();
    $SubFaq = SubFaq::all();
    $Contact = Contact::all();
    // echo $photo;
    return view('welcome',compact('photo', 'allSocial', 'allBaner', 'allAbout', 'ExperienceCanada', 'ExperienceTheWorld','Partner','Faq','SubFaq', 'Contact'));
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

Route::get('/experienceCanada', 'DashboardController@experienceCanada')->name('experienceCanada');
Route::post('/saveexperienceCanada', 'DashboardController@saveexperienceCanada')->name('saveexperienceCanada');
Route::get('/deleteexperienceCanada/{id}', 'DashboardController@deleteexperienceCanada')->name('deleteexperienceCanada');

Route::get('/experienceworld', 'DashboardController@experienceworld')->name('experienceworld');
Route::post('/saveexperienceworld', 'DashboardController@saveexperienceworld')->name('saveexperienceworld');
Route::get('/deleteexperienceworld/{id}', 'DashboardController@deleteexperienceworld')->name('deleteexperienceworld');

Route::get('/partner', 'DashboardController@partner')->name('partner');
Route::post('/savepartner', 'DashboardController@savepartner')->name('savepartner');
Route::get('/deletepartner/{id}', 'DashboardController@deletepartner')->name('deletepartner');

Route::get('/faq', 'DashboardController@faq')->name('faq');
Route::post('/saveFaq', 'DashboardController@saveFaq')->name('saveFaq');
Route::post('/saveSubFaq', 'DashboardController@saveSubFaq')->name('saveSubFaq');

Route::get('/deleteFaq/{id}', 'DashboardController@deleteFaq')->name('deleteFaq');
Route::get('/deleteSubFaq/{id}', 'DashboardController@deleteSubFaq')->name('deleteSubFaq');

Route::get('/contact', 'DashboardController@contact')->name('contact');
Route::post('/saveContact', 'DashboardController@saveContact')->name('saveContact');

Route::get('/contactForm', 'DashboardController@contactForm')->name('contactForm');
Route::post('/saveContactForm', 'DashboardController@saveContactForm')->name('saveContactForm');
