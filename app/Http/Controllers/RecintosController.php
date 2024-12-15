<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recintos;

class RecintosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $datos = Recintos::all();
        return view('recintos.index', compact('datos'));
    }
}
