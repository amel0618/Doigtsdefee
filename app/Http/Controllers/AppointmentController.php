<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        // Récupérer tous les rendez-vous
        $appointments = Appointment::all();

        // Retourner les rendez-vous en tant que réponse JSON
        return response()->json($appointments);
    }

    public function show($id)
    {
        // Récupérer le rendez-vous par son ID
        $appointment = Appointment::find($id);

        if (!$appointment) {
            // Si le rendez-vous n'existe pas, retourner une réponse d'erreur
            return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
        }

        // Retourner le rendez-vous en tant que réponse JSON
        return response()->json($appointment);
    }



    public function store(Request $request)
    {
        // Valider les données du formulaire de création du rendez-vous
        $validatedData = $request->validate([
            'client_name' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'service' => 'required|string',
        ]);

        // Créer un nouveau rendez-vous avec les données validées
        $appointment = Appointment::create($validatedData);

        // Retourner le rendez-vous créé en tant que réponse JSON
        return response()->json($appointment, 201);
    }

    public function update(Request $request, $id)
    {
        // Récupérer le rendez-vous à mettre à jour
        $appointment = Appointment::find($id);

        if (!$appointment) {
            // Si le rendez-vous n'existe pas, retourner une réponse d'erreur
            return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
        }

        // Valider les données du formulaire de mise à jour du rendez-vous
        $validatedData = $request->validate([
            'client_name' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'service' => 'required|string',
        ]);

        // Mettre à jour le rendez-vous avec les données validées
        $appointment->update($validatedData);

        // Retourner le rendez-vous mis à jour en tant que réponse JSON
        return response()->json($appointment);
    }

    public function destroy($id)
    {
        // Récupérer le rendez-vous à supprimer
        $appointment = Appointment::find($id);

        if (!$appointment) {
            // Si le rendez-vous n'existe pas, retourner une réponse d'erreur
            return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
        }

        // Supprimer le rendez-vous
        $appointment->delete();

        // Retourner une réponse indiquant que le rendez-vous a été supprimé avec succès
        return response()->json(['message' => 'Rendez-vous supprimé avec succès']);
    }
}
