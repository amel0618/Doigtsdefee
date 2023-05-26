<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function prestation()
    {
        return view('prestation');
    }

    public function rendezvous()
    {
        return view('rendezvous');
    }

    public function horaire()
    {
        return view('horaire');
    }

    public function politique()
    {
        return view('politique');
    }
}
