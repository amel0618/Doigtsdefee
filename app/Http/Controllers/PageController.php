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

    public function horaire()
    {
        return view('horaire');
    }

    public function contact()
    {
        return view('contact');
    }
}
