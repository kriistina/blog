<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class GuestController extends Controller
{
    public function naslovnica()
    {
        return view('welcome');
    }
    public function destinacije()
    {
        return view('Guest.destinacije');
    }

    public function about()
    {
        return view('Guest.about');
    }

    public function kontakt()
    {
        return view('Guest.kontakt');
    }

    public function blog()
    {
        return view('Guest.blog');
    }
    

    public function galerija()
    {
        return view('Guest.galerija');
    }
}
