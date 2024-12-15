<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function adminCandidato(){
        $candidatos = Candidato::all();
        // Pasar los datos a la vista
        return view('pages.candidato.index', compact('candidatos'));
    }
}
