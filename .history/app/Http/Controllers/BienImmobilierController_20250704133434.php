<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienImmobilierController extends Controller
{
    public function formulaireAjout()
    {
    $types = TypeBien::all();

    if (!session()->has('agent')) {
        return redirect()->route('connexionAgent');
    }

    return view('ajouter-bien', compact('types'));
}
}
