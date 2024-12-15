<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votos;
use App\Models\Recintos; 

class VotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $votos = Votos::with('Recintos')->get(); // Relación con Recintos
        $mesasRecintos = Recintos::all(); // Para el select
        return view('votos.index', compact('votos', 'mesasRecintos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_mesas' => 'required|exists:mesas_recintos,id', // Validar relación
            'num_mesas' => 'required|integer',
            'c_hjovanna' => 'nullable|integer',
            'c_yacira' => 'nullable|integer',
            'c_norma' => 'nullable|integer',
            'c_efrain' => 'nullable|integer',
            'c_grover' => 'nullable|integer',
            'c_marvin' => 'nullable|integer',
            'c_octavio' => 'nullable|integer',
            'voto_valido' => 'nullable|integer',
            'voto_blanco' => 'nullable|integer',
            'voto_nulo' => 'nullable|integer',
            'voto_emitido' => 'nullable|integer',
        ]);

        Votos::create($validated);
        return redirect()->back()->with('success', 'Registro creado con éxito.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_mesas' => 'required|exists:mesas_recintos,id',
            'num_mesas' => 'required|integer',
            'c_hjovanna' => 'nullable|integer',
            'c_yacira' => 'nullable|integer',
            'c_norma' => 'nullable|integer',
            'c_efrain' => 'nullable|integer',
            'c_grover' => 'nullable|integer',
            'c_marvin' => 'nullable|integer',
            'c_octavio' => 'nullable|integer',
            'voto_valido' => 'nullable|integer',
            'voto_blanco' => 'nullable|integer',
            'voto_nulo' => 'nullable|integer',
            'voto_emitido' => 'nullable|integer',
        ]);

        $voto = Votos::findOrFail($id);
        $voto->update($validated);
        return redirect()->back()->with('success', 'Registro actualizado con éxito.');
    }

    public function destroy($id)
    {
        Votos::destroy($id);
        return redirect()->back()->with('success', 'Registro eliminado con éxito.');
    }
}
