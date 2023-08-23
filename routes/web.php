<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', "GuestController@naslovnica")->name('naslovnica');

Route::get('/destinacije', "GuestController@destinacije")->name('destinacije');



Route::get('/kontakt', "GuestController@kontakt")->name('kontakt');

Route::get('/blog', "GuestController@blog")->name('blog');

Route::get('/galerija', "GuestController@galerija")->name('galerija');

Route::get('/clanak', "GuestController@clanak")->name('clanak');





# USER RUTE

Route::group(['middleware' => ['auth']], function () {
    
   

    Route::get('/clanak/dodaj', "ClanakController@dodajClanak")->name('dodajClanak');
    Route::post('/clanak/objavi', "ClanakController@objaviClanak");
    Route::post('/clanak/komentiraj/{id}', "KomentarController@napraviKomentar");
   
});



Auth::routes();
