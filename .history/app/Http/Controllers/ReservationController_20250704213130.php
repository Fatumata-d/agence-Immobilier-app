<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BienImmobilier;

class ReservationController extends Controller
{
    public function afficherFormulaire($bien_id)
    {
        $bien = BienImmobilier::findOrFail($bien_id);
        return view('FormulaireReservation', compact('bien'));
    }


    public function enregistrerReservation(Request $request)
    {
        
        $request->validate([
            'bien_immobilier_id' => 'required|exists:bien_immobiliers,id',
            'date_reservation' => 'required|date|after_or_equal:today',
            'message' => 'required|string|unique:reservations,Message',
        ]);

        $client = session('client');

        // Récupérer le bien et l'agent associé
        $bien = BienImmobilier::findOrFail($request->bien_immobilier_id);
        $agent = $bien->agent;

        // Créer la réservation
        Reservation::create([
            'client_id' => $client->id,
            'bien_immobilier_id' => $bien->id,
            'agent_id' => $agent->id,
            'date_reservation' => $request->date_reservation,
            'Message' => $request->message,
        ]);

        // Redirection avec message succès
        return redirect()->route('profil.client')->with('success', 'Réservation envoyée avec succès !');
    }

}
