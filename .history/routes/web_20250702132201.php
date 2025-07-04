<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get('/inscrire', [ClientController::class, 'formulaireInscription'])->name('inscription');
Route::post('/inscrire', [ClientController::class, 'inscrire'])->name('inscriptionTraitement');

Route::get('/profil', [ClientAuthController::class, 'profile'])->name('profil');
Route::get('/deconnexion', [ClientAuthController::class, 'deconnexion'])->name('connexion');

Route::get('/connecter', [ClientController::class, 'formulaireConnexion'])->name('connexion');
Route::post('/connecter', [ClientAuthController::class, 'connecter'])->name('connexionTraitement');


