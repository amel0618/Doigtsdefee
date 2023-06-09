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
        $categories = Categorie::whereHas('Prestations', function ($query) {
            $query->where('type_id', '1');
        })->with(['Prestations' => function ($query) {
            $query->where('type_id', '1');
        }])->get();
        return view('main', compact('categories'));
    }

    public function pieds()
    {
        $categories = Categorie::whereHas('Prestations', function ($query) {
            $query->where('type_id', '2');
        })->with(['Prestations' => function ($query) {
            $query->where('type_id', '2');
        }])->get();
        return view('pied', compact('categories'));
    }

    public function mentions()
    {
        return view('mentions');
    }
}
