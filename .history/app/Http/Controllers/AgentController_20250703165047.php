<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function create()
    {
        return view('creerAgent');
    }


    public function ajouter(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email|unique:agents',
            'motDePasse' => 'required|confirmed|min:6',
            'adresse' => 'required|string',
            'date_embauche' => 'required|date',
            'statut' => 'required|boolean',
        ]);

        $admin = session('admin');
        if (!$admin) {
            return redirect()->route('connexionAdmin')->with('error', 'Vous devez être connecté en tant qu’administrateur');
        }

        Agent::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'motDePasse' => Hash::make($request->motDePasse),
            'adresse' => $request->adresse,
            'date_embauche' => $request->date_embauche,
            'statut' => $request->statut,
            'administrateur_id' => $admin->id,
        ]);

        return redirect()->back()->with('success', 'Agent ajouté avec succès');
    }


    public function formulaireConnexion()
    {
        return view('connexionAgent');
    }
}
