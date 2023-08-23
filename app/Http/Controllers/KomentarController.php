<?php

namespace App\Http\Controllers;

use App\Models\Clanak;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{

    public function dohvatiKomentare(){

        $komentari = Komentar::with('korisnik', 'clanak')->orderBy('created_at', 'DESC')->get();
    
            return response()->json([
                'komentari' => $komentari
            ]);
    }

    public function napraviKomentar(Request $request, $id)
    {

        $clanak = Clanak::find($id);

        $komentar = new Komentar();
        $komentar->sadrzaj = $request->sadrzaj;
        $komentar->korisnik_id = Auth::user()->id;
        $komentar->clanak_id = $clanak->id;
        $komentar->save();

    }
}
