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
            'motDePasse' => Hash::make($request->motDePasse),
        ]);

        session(['client' => $client]);

        return redirect()->route('profil');
    }

    public function profile()
    {
        if (!session()->has('client')) {
            return redirect()->route('connexion');
        }

        return view('profil', ['client' => session('client')]);
    }

    public function deconnexion()
    {
        session()->forget('client');
        return redirect()->route('connexion');
    }


    public function formulaireConnexion()
    {
        return view('connexion');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $client = Client::where('email', $request->email)->first();

        if ($client && Hash::check($request->password, $client->password)) {
            session(['client' => $client]);
            return redirect()->route('client.profile');
        }

        return back()->with('error', 'Email ou mot de passe incorrect');
    }

}
