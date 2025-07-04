<?php

namespace App\Http\Controllers;

use App\Models\TypeBien;
use Illuminate\Http\Request;

class BienImmobilierController extends Controller
{
    public function formulaireAjout()
    {
        $types = TypeBien::all();

        if (!session()->has('agent')) {
            return redirect()->route('connexionAgent');
        }

        return view('ajouterBiens', compact('types'));
    }

    
}
