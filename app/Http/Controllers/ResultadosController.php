<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resultados;

class ResultadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $votosValidos = 850;
        // $votosBlanco = 50;
        // $votosNulos = 100;
        // $los=100;
        $resultados = Resultados::first(); // Aquí asumo que solo hay un conjunto de resultados. Ajusta si es necesario.
        // Obtener los votos desde la base de datos
        $votosC_Hjovanna=$resultados->c_hjovanna;
        $votosC_Yacira=$resultados->c_yacira;
        $votosC_Norma=$resultados->c_norma;
        $votosC_Efrain=$resultados->c_efrain;
        $votosC_Grover=$resultados->c_grover;
        $votosC_Marvin=$resultados->c_marvin;
        $votosC_Octavio=$resultados->c_octavio;
        // $votosValidos = $resultados->voto_valido;
        $votosBlanco = $resultados->voto_blanco;
        $votosNulos = $resultados->voto_nulo;
        // $votosEmitidos = $resultados->voto_emitido;
    
        // Calcular el total de votos
        $totalVotos = $votosBlanco + $votosNulos+$votosC_Hjovanna+$votosC_Yacira+$votosC_Norma+$votosC_Efrain+$votosC_Grover+$votosC_Marvin+$votosC_Octavio;
    
    
        // Crear los porcentajes
        $data = [
            'Votos Hjovanna' => round(($votosC_Hjovanna / $totalVotos) * 100, 2),
            'Votos Yacira' => round(($votosC_Yacira / $totalVotos) * 100, 2),
            'Votos Norma' => round(($votosC_Norma / $totalVotos) * 100, 2),
            'Votos Efrain' => round(($votosC_Efrain / $totalVotos) * 100, 2),
            'Votos Grover' => round(($votosC_Grover / $totalVotos) * 100, 2),
            'Votos Marvin' => round(($votosC_Marvin / $totalVotos) * 100, 2),
            'Votos Octavio' => round(($votosC_Octavio / $totalVotos) * 100, 2),
            // 'Votos Válidos' => round(($votosValidos / $totalVotos) * 100, 2),
            'Votos en Blanco' => round(($votosBlanco / $totalVotos) * 100, 2),
            'Votos Nulos' => round(($votosNulos / $totalVotos) * 100, 2),
        ];
        return view('resultados.index', compact('data'));
    }
}
