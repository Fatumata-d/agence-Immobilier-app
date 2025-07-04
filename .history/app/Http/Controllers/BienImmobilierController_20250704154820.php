<?php

namespace App\Http\Controllers;

use App\Models\TypeBien;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BienImmobilier;

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

    public function enregistrer(Request $request)
    {
        $request->validate([
            'type_bien_id' => 'required|exists:type_biens,id',
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'adresse' => 'required|string',
            'ville' => 'required|string',
            'superficie' => 'required|numeric',
            'prix' => 'required|numeric',
            'photo' => 'required|image|max:2048',
        ]);

        $agent = session('agent');

        $matricule = 'BIEN-' . strtoupper(Str::random(8));

        
        $path = $request->file('photo')->store('photos', 'public');

        BienImmobilier::create([
            'matricule' => $matricule,
            'type_bien_id' => $request->type_bien_id,
            'titre' => $request->titre,
            'description' => $request->description,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'superficie' => $request->superficie,
            'prix' => $request->prix,
            'agent_id' => $agent->id,
            'date_ajout' => now(),
            'photo' => $path,
        ]);

        return redirect()->route('AgentDashboard')->with('success', 'Bien ajouté avec succès.');
    }

    public function liste()
    {
        $biens = BienImmobilier::with(['agent', 'typeBien'])->get();
        return view('Biens', compact('biens'));
    }
}
