<?php

namespace App\Http\Controllers;

use App\Models\Clanak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ClanakController extends Controller
{
    public function dodaj_clanak()
    {
        return view('dodaj_clanak');
    }

    public function objaviClanak(Request $request)
    {

        if ($request->slika) {
            $slika = time() . '.' . explode('/', explode(':', substr($request->slika, 0, strpos($request->slika, ';')))[1])[1];

            Image::make($request->slika)->save(public_path('images/' . $slika));
        } else {
            $slika = null;
        }

        $clanak = new Clanak();
        $clanak->naslov = $request->naziv;
        $clanak->sadrzaj = $request->sadrzaj;
        $clanak->datum_objave = $request->datum_objave;
        $clanak->korisnik_id = Auth::user()->id;
        $clanak->kategorija_id = $request->kategorija;
        $clanak->slika = $slika;
        $clanak->save();
    }
}
