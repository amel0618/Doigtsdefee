<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use Illuminate\Support\Facades\Auth;

class RendezVousController extends Controller
{
    public function create()
    {
        return view('rendezvous.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'heure' => 'required',
            // Ajoutez ici les autres règles de validation pour les champs du formulaire
        ]);

        // Enregistrez le rendez-vous dans la base de données
        $rendezvous = new RendezVous;
        $rendezvous->client_id = Auth::user()->id; // Remplacez par l'ID du client connecté
        $rendezvous->date = $validatedData['date'];
        
        $rendezvous->heure = $validatedData['heure'];
        // Enregistrez d'autres champs du formulaire si nécessaire
        $rendezvous->save();

        // Redirigez l'utilisateur vers une page de confirmation ou une autre page appropriée
        return redirect()->route('rendezvous.confirmation');
    }
}
