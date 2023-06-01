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

    public function contact()
    {
        return view('contact');
    }

    public function apropos()
    {
        return view('apropos');
    }

    public function mains()
    {
        return view('beaute-mains');
    }

    public function pieds()
    {
        return view('beaute-pieds');
    }

    public function mentions()
    {
        return view('mentions');
    }
}
