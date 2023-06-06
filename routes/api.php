<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategorijaController;


Route::get('/kategorije', 'KategorijaController@dohvatiKategorije');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
