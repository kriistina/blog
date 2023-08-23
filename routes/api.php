<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategorijaController;


Route::get('/kategorije', 'KategorijaController@dohvatiKategorije');

Route::get('/clanci', 'ClanakController@dohvatiClanke');

Route::get('/komentari', 'KomentarController@dohvatiKomentare');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
