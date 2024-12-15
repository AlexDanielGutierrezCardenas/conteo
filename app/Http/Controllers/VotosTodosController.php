<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VotosTodos;
use App\Models\MesasRecintos;
use App\Models\Resultados;
use App\Models\Image;

class VotosTodosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $votos = VotosTodos::with('mesaRecintos')->get(); // Relación con MesasRecintos
        $mesasRecintos = MesasRecintos::all(); // Para el select

        $votosValidos = 850;
        $votosBlanco = 50;
        $votosNulos = 100;
    
        // Calcular el total de votos
        $totalVotos = $votosValidos + $votosBlanco + $votosNulos;
    
        // Crear los porcentajes
        $data = [
            'Votos Válidos' => round(($votosValidos / $totalVotos) * 100, 2),
            'Votos en Blanco' => round(($votosBlanco / $totalVotos) * 100, 2),
            'Votos Nulos' => round(($votosNulos / $totalVotos) * 100, 2),
        ];
        return view('votos_todos.index', compact('votos', 'mesasRecintos', 'data'));
    }

    public function store(Request $request)
{
    // Validación de los datos recibidos
    // dd($request->all());
    $validated = $request->validate([
        'id_mesas' => 'required|exists:mesas_recintos,id_mesas',
        'num_mesas' => 'required|integer',
        'c_hjovanna' => 'nullable|integer', // Acepta nulos y asegura que sea un número entero
        'c_yacira' => 'nullable|integer',
        'c_norma' => 'nullable|integer',
        'c_efrain' => 'nullable|integer',
        'c_grover' => 'nullable|integer',
        'c_marvin' => 'nullable|integer',
        'c_octavio' => 'nullable|integer',
        'voto_valido' => 'nullable|integer', // Acepta nulos y asegura que sea un número entero
        'voto_blanco' => 'nullable|integer',
        'voto_nulo' => 'nullable|integer',
        'voto_emitido' => 'nullable|integer',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
    ]);
    
    // Guardar otros datos relacionados con votos
    $votosNuevos = new VotosTodos;
    $votosNuevos->id_mesas = $request->id_mesas;
    $votosNuevos->num_mesas = $request->num_mesas;
    $votosNuevos->c_hjovanna = $request->c_hjovanna;
    $votosNuevos->c_yacira = $request->c_yacira;
    $votosNuevos->c_norma = $request->c_norma;
    $votosNuevos->c_efrain = $request->c_efrain;
    $votosNuevos->c_grover = $request->c_grover;
    $votosNuevos->c_marvin = $request->c_marvin;
    $votosNuevos->c_octavio = $request->c_octavio;
    $votosNuevos->voto_valido = $request->voto_valido;
    $votosNuevos->voto_blanco = $request->voto_blanco;
    $votosNuevos->voto_nulo = $request->voto_nulo;
    $votosNuevos->voto_emitido = $request->voto_emitido;
    $votosNuevos->save();
    $id_votos = $votosNuevos->id_votos;

    if ($request->hasFile('image')) {
        // Guarda la imagen en 'storage/app/public/images' y obtiene la ruta relativa
        $imagePath = $request->file('image')->store('images', 'public'); // Guardamos en el disco 'public'
    
        // Guardar solo la ruta relativa (la que se usará para acceder a la imagen)
        $image = new Image();
        $image->id_votos_todos = $id_votos;
        $image->id_mesas = $request->id_mesas;
        $image->image_path = $imagePath; // Guarda solo la ruta relativa 'images/nombre_imagen.jpg'
        $image->save();
    
        // Opcionalmente, puedes obtener la URL completa de la imagen
        $imageUrl = asset('storage/' . $imagePath); // Genera la URL pública
        // dd($imageUrl); // Imprime la URL de la imagen
    }
    // Manejo de la tabla Resultados
    $resultadosExistentes = Resultados::first();
    if ($resultadosExistentes) {
        $resultadosExistentes->c_hjovanna += $request->c_hjovanna;
        $resultadosExistentes->c_yacira += $request->c_yacira;
        $resultadosExistentes->c_norma += $request->c_norma;
        $resultadosExistentes->c_efrain += $request->c_efrain;
        $resultadosExistentes->c_grover += $request->c_grover;
        $resultadosExistentes->c_marvin += $request->c_marvin;
        $resultadosExistentes->c_octavio += $request->c_octavio;
        $resultadosExistentes->voto_valido += $request->voto_valido;
        $resultadosExistentes->voto_blanco += $request->voto_blanco;
        $resultadosExistentes->voto_nulo += $request->voto_nulo;
        $resultadosExistentes->voto_emitido += $request->voto_emitido;
        $resultadosExistentes->save();
    } else {
        $resultadosNuevos = new Resultados;
        $resultadosNuevos->c_hjovanna = $request->c_hjovanna;
        $resultadosNuevos->c_yacira = $request->c_yacira;
        $resultadosNuevos->c_norma = $request->c_norma;
        $resultadosNuevos->c_efrain = $request->c_efrain;
        $resultadosNuevos->c_grover = $request->c_grover;
        $resultadosNuevos->c_marvin = $request->c_marvin;
        $resultadosNuevos->c_octavio = $request->c_octavio;
        $resultadosNuevos->voto_valido = $request->voto_valido;
        $resultadosNuevos->voto_blanco = $request->voto_blanco;
        $resultadosNuevos->voto_nulo = $request->voto_nulo;
        $resultadosNuevos->voto_emitido = $request->voto_emitido;
        $resultadosNuevos->save();
    }

    return redirect()->back()->with('success', 'Registro creado con éxito.');
}


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_mesas' => 'required|exists:mesas_recintos,id_mesas',
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

        $voto = VotosTodos::findOrFail($id);
        $voto->update($validated);
        return redirect()->back()->with('success', 'Registro actualizado con éxito.');
    }
    public function destroy($id)
    {
        VotosTodos::destroy($id);
        return redirect()->back()->with('success', 'Registro eliminado con éxito.');
    }
    
}
