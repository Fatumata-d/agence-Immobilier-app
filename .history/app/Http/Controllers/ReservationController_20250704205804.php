<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function afficherFormulaire($bien_id)
{
    // Vérifie que le client est connecté
    if (!session()->has('client')) {
        return redirect()->route('client.connexion')->with('erreur', 'Vous devez être connecté pour réserver.');
    }

    $bien = \App\Models\BienImmobilier::findOrFail($bien_id);
    return view('reservations.formulaire', compact('bien'));
}

}
