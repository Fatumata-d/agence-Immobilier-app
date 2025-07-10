<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Agent;
use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdministrateurController extends Controller
{
    public function formulaireConnexion()
    {
        return view('connexionAdmin');
    }



    public function connecterAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = User::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin' => $admin]);
            return redirect()->route('AdminDashboard');
        }

        return back()->with('error', 'Identifiants incorrects');
    }

    public function deconnexion()
    {
        session()->forget('admin');
        return redirect()->route('welcome');
    }

    public function formulaireModifier($id)
    {
        $agent = Agent::findOrFail($id);
        return view('AgentsModifier', compact('agent'));
    }

    public function modifier(Request $request, $id)
    {
        $agent = Agent::findOrFail($id);

        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:agents,email,' . $agent->id,
            'telephone' => 'required',
            'date_embauche' => 'required|date',
            'statut' => 'required|boolean',
            'motDePasse' => 'nullable|string|min:6', 
        ]);

        
        $agent->nom = $request->nom;
        $agent->prenom = $request->prenom;
        $agent->email = $request->email;
        $agent->telephone = $request->telephone;
        $agent->date_embauche = $request->date_embauche;
        $agent->statut = $request->statut;

        
        if ($request->filled('motDePasse')) {
            $agent->motDePasse = Hash::make($request->motDePasse);
        }

        $agent->save();

        return redirect()->route('ListeAgents')->with('success', 'Agent modifié avec succès.');
    }

    public function supprimer($id)
    {
        $agent = Agent::findOrFail($id);
        $agent->delete();

        return back()->with('success', 'Agent supprimé.');
    }


    public function rapport() 
    {
        $reservationsJour = Reservation::whereDate('created_at', Carbon::today())->count();
        $reservationsMois = Reservation::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        $reservationsAnnee = Reservation::whereYear('created_at', Carbon::now()->year)->count();


        $clientsJour = Client::whereDate('created_at', Carbon::today())->count();
        $clientsMois = Client::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        $clientsAnnee = Client::whereYear('created_at', Carbon::now()->year)->count();

         $biensVendus = BienImmobilier::where('statut', 'vendu')->get(); // liste des biens vendus
        $agentsInactifs = Agent::where('statut', 0)->get();

        return view('Rapport', compact(
            'reservationsJour', 'reservationsMois', 'reservationsAnnee',
            'clientsJour', 'clientsMois', 'clientsAnnee'
        ));
    }
}
