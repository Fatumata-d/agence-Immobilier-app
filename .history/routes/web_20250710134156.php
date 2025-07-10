<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\BienImmobilierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/apropos', function () {
    return view('APropos');
})->name('APropos');

Route::get('/services', function () {
    return view('Services');
})->name('Services');

Route::get('/contact', function () {
    return view('Contact');
})->name('Contact');

Route::get('/loginpage', function () {
    return view('loginPage');
})->name('loginPage');

Route::get('/connecter-vous', function () {
    return view('connexion');
})->name('connexion');

Route::get('/DashboardAdmin', function () {
    return view('AdminDashboard');
})->name('AdminDashboard');

Route::get('/rapport', [AdministrateurController::class, 'rapport'])->name('Rapport');

Route::get('/inscrire', [ClientController::class, 'formulaireInscription'])->name('inscription');
Route::post('/inscrire', [ClientController::class, 'inscrire'])->name('inscriptionTraitement');

Route::get('/profil', [ClientController::class, 'profile'])->name('profil');
Route::get('/historique', [ClientController::class, 'historique'])->name('historique');
Route::get('/deconnexion', [ClientController::class, 'deconnexion'])->name('deconnexion');

Route::get('/connecter', [ClientController::class, 'formulaireConnexion'])->name('connexionClient');
Route::post('/connecter', [ClientController::class, 'connecter'])->name('connexionTraitement');
Route::get('/clients', [ClientController::class, 'liste'])->name('ListeClients');

Route::get('/connecterAdmin', [AdministrateurController::class, 'formulaireConnexion'])->name('connexionAdmin');
Route::post('/connecterAdmin', [AdministrateurController::class, 'connecterAdmin'])->name('traitementConnexionAdmin');
Route::get('/deconnexion-admin', [AdministrateurController::class, 'deconnexion'])->name('deconnexion-admin');


Route::get('/connecterAgent', [AgentController::class, 'formulaireConnexion'])->name('connexionAgent');
Route::post('/connecterAgent', [AgentController::class, 'connecterAgent'])->name('traitementConnexionAgent');
Route::get('/dashboard-agent', [AgentController::class, 'dashboard'])->name('AgentDashboard');
Route::get('/deconnexion-agent', [AgentController::class, 'deconnexion'])->name('deconnexion-agent');
Route::get('/rendezvous', [AgentController::class, 'mesRendezVous'])->name('RendezVous');


Route::get('/ajouterAgent', [AgentController::class, 'create'])->name('creerAgent');
Route::post('/ajouter-agent', [AgentController::class, 'ajouter'])->name('AgentTraitement');
Route::get('/agents', [AgentController::class, 'liste'])->name('ListeAgents');

Route::get('/reserver/{bien}', [ReservationController::class, 'afficherFormulaire'])->name('FormulaireReservation');
Route::post('/reserver', [ReservationController::class, 'enregistrerReservation'])->name('reservationEnregistrer');


Route::get('/ajouterBien', [BienImmobilierController::class, 'formulaireAjout'])->name('ajouterBiens');
Route::post('/ajouter-bien', [BienImmobilierController::class, 'enregistrer'])->name('enregistrerBien');
Route::get('/biens', [BienImmobilierController::class, 'liste'])->name('Biens');
Route::get('/mesBiens', [BienImmobilierController::class, 'mesBiens'])->name('MesBiens');


Route::put('/agent/bien/{id}/statut', [AgentController::class, 'changerStatut'])->name('statutBien');
Route::delete('/agent/bien/{id}', [AgentController::class, 'supprimer'])->name('supprimerBien');
Route::get('/agent/bien/{id}/modifier', [AgentController::class, 'formulaireModifier'])->name('modifierBien');
Route::put('/agent/bien/{id}/mettre-a-jour', [App\Http\Controllers\AgentController::class, 'mettreAJour'])->name('agent.bien.mettreAJour');

