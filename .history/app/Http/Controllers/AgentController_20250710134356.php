<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\TypeBien;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\BienImmobilier;
use Illuminate\Support\Facades\Hash;

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
            return redirect()->route('connexionAdmin')->with('error', 'Vous devez être connecté en tant que administrateur');
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

    public function liste()
    {
        $agents = \App\Models\Agent::all();
        return view('ListeAgents', compact('agents'));
    }


    public function formulaireConnexion()
    {
        return view('connexionAgent');
    }

    public function connecterAgent(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'motDePasse' => 'required',
        ]);

        $agent = Agent::where('email', $request->email)->first();

            if ($agent && Hash::check($request->motDePasse, $agent->motDePasse)) {
            session(['agent' => $agent]);
            return redirect()->route('AgentDashboard');
        }

        return back()->with('error', 'Identifiants incorrects');
    }


    public function dashboard()
    {
        if (!session()->has('agent')) {
            return redirect()->route('connexionAgent');
        }

        return view('AgentDashboard');

    }

    public function mesRendezVous()
    {
        $agent = session('agent');
        $reservations = Reservation::where('agent_id', $agent->id)
            ->with(['client', 'bienImmobilier'])
            ->orderBy('date_reservation', 'asc')
            ->get();

        return view('RendezVous', compact('reservations'));
    }

    public function deconnexion()
    {
        session()->forget('agent');
        return redirect()->route('welcome');
    }


    public function changerStatut(Request $request, $id)
    {
            $request->validate([
            'statut' => 'required|in:disponible,loué,vendu',
            ]);

            $bien = BienImmobilier::findOrFail($id);

        
            if ($bien->agent_id != session('agent')->id) {
            abort(403, 'Accès refusé.');
            }

            $bien->statut = $request->statut;
            $bien->save();

            return back()->with('success', 'Statut mis à jour avec succès.');
    }

    public function supprimer ($id)
    {
        $bien = BienImmobilier::findOrFail($id);

        if ($bien->agent_id != session('agent')->id) {
            abort(403, 'Accès refusé.');
        }

        $bien->delete();

        return back()->with('success', 'Bien supprimé avec succès.');
    }

    public function formulaireModifier($id)
    {
        $bien = BienImmobilier::findOrFail($id);

        
        if ($bien->agent_id != session('agent')->id) {
            abort(403, 'Accès refusé.');
        }

        $types = TypeBien::all();

        return view('modifierBien', compact('bien', 'types'));
    }


    public function mettreAJour(Request $request, $id)
    {
        $bien = BienImmobilier::findOrFail($id);

        if ($bien->agent_id != session('agent')->id) {
            abort(403);
        }

        $request->validate([
            'type_bien_id' => 'required|exists:type_biens,id',
            'titre' => 'required|string',
            'description' => 'required|string',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'superficie' => 'required|numeric',
            'prix' => 'required|numeric',
            'photo' => 'nullable|image|max:2048',
        ]);

        $bien->type_bien_id = $request->type_bien_id;
        $bien->titre = $request->titre;
        $bien->description = $request->description;
        $bien->adresse = $request->adresse;
        $bien->ville = $request->ville;
        $bien->superficie = $request->superficie;
        $bien->prix = $request->prix;

        // Si une nouvelle photo est uploadée, on remplace
        if ($request->hasFile('photo')) {
            // Supprimer l’ancienne photo (optionnel)
            Storage::delete('public/photos/' . $bien->photo);

            // Stocker la nouvelle photo
            $chemin = $request->file('photo')->store('public/photos');
            $bien->photo = basename($chemin);
        }

        $bien->save();

        return redirect()->route('agent.biens')->with('success', 'Bien mis à jour avec succès.');
    }
}
