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
        $nomFichier = basename($path);

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
            'photo' => $nomFichier,
        ]);

        return redirect()->route('AgentDashboard')->with('success', 'Bien ajouté avec succès.');
    }

    public function liste()
    {
        $types = TypeBien::all();

        $query = BienImmobilier::with(['agent', 'typeBien']);

        // Appliquer le filtre si demandé
        if ($request->has('type_bien_id') && $request->type_bien_id != '') {
            $query->where('type_bien_id', $request->type_bien_id);
        }

        // Exécuter la requête
        $biens = $query->get();

        // Passer les biens et les types à la vue
        return view('Biens', compact('biens', 'types'));
    }


    public function mesBiens()
    {
        $agent = session('agent');

        $biens = BienImmobilier::where('agent_id', $agent->id)->get();

        return view('MesBiens', compact('biens'));
    }

}
