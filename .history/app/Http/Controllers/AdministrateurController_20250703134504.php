<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    public function formulaireConnexion()
    {
        return view('connexionAdmin');
    }



    public function connecter(Request $request)
    {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $admin = User::where('email', $request->email)->first();

    if ($admin && Hash::check($request->password, $admin->password)) {
        session(['admin' => $admin]);
        return redirect()->route('dashboard.admin');
    }

    return back()->with('error', 'Identifiants incorrects');
    }
}
