<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', "GuestController@naslovnica")->name('naslovnica');

Route::get('/destinacije', "GuestController@destinacije")->name('destinacije');

Route::get('/about', "GuestController@about")->name('about');

Route::get('/kontakt', "GuestController@kontakt")->name('kontakt');

Route::get('/blog', "GuestController@blog")->name('blog');

Route::get('/galerija', "GuestController@galerija")->name('galerija');





# USER RUTE

Route::group(['middleware' => ['auth']], function () {
    
   

    Route::get('/clanak/dodaj', "ClanakController@dodaj_clanak")->name('dodajClanak');
    Route::post('/clanak/objavi', "ClanakController@objaviClanak")->name('objaviClanak');
   
});



Auth::routes();
