<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function formulaireInscription()
    {
        return view('inscription');
    }

    public function inscrire(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'telephone' => 'required|string',
            'adresse' => 'required|string',
            'email' => 'required|email|unique:clients',
            'motDePasse' => 'required|confirmed|min:6',
        ]);

        $client = Client::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session(['client' => $client]);

        return redirect()->route('client.profile');
    }

    
}
