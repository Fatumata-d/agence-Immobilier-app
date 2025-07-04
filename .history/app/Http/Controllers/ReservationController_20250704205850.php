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

}
