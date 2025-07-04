<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function afficherFormulaire($bien_id)
    {

        $bien = \App\Models\BienImmobilier::findOrFail($bien_id);
        return view('reservations.formulaire', compact('bien'));
    }

}
