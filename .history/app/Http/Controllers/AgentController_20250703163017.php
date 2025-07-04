<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function create()
    {
        return view('connexionAgent');
    }




    public function formulaireConnexion()
    {
        return view('connexionAgent');
    }
}
