<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Prestation;

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
        $prestations = Prestation::all()->where('categorie_id', '1');
        return view('beaute-mains', compact('prestations'));
    }

    public function pieds()
    {
        $prestations = Prestation::all()->where('categorie_id', '2');
        return view('beaute-pieds', compact('prestations'));
    }

    public function mentions()
    {
        return view('mentions');
    }
}
