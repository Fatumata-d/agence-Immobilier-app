<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    public function formulaireConnexion()
    {
        if (session()->has('client')) {
            return redirect()->route('profil');
        }

        return view('connexionClient');
    }

}
