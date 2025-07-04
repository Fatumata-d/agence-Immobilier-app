<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdministrateurController;

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

Route::get('/biens', function () {
    return view('Biens');
})->name('Biens');

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

Route::get('/rapport', function () {
    return view('Rapport');
})->name('Rapport');



Route::get('/inscrire', [ClientController::class, 'formulaireInscription'])->name('inscription');
Route::post('/inscrire', [ClientController::class, 'inscrire'])->name('inscriptionTraitement');

Route::get('/profil', [ClientController::class, 'profile'])->name('profil');
Route::get('/deconnexion', [ClientController::class, 'deconnexion'])->name('deconnexion');

Route::get('/connecter', [ClientController::class, 'formulaireConnexion'])->name('connexionClient');
Route::post('/connecter', [ClientController::class, 'connecter'])->name('connexionTraitement');

Route::get('/connecterAdmin', [AdministrateurController::class, 'formulaireConnexion'])->name('connexionAdmin');
Route::post('/connecterAdmin', [AdministrateurController::class, 'connecterAdmin'])->name('traitementConnexionAdmin');



Route::get('/connecterAgent', [AgentController::class, 'formulaireConnexion'])->name('connexionAgent');
Route::post('/connecterAgent', [AgentController::class, 'connecterAgent'])->name('traitementConnexionAdmin');

Route::get('/ajouterAgent', [AgentController::class, 'create'])->name('creerAgent');
Route::post('/ajouter-agent', [AgentController::class, 'ajouter'])->name('AgentTraitement');
Route::get('/agents', [AgentController::class, 'liste'])->name('ListeAgents');
