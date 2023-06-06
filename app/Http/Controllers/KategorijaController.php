<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class KategorijaController extends Controller
{
   public function dohvatiKategorije(){

    $kategorije = Kategorija::all();

        return response()->json([
            'kategorije' => $kategorije
        ]);

   }
}
