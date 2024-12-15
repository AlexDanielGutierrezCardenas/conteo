@extends('layouts.admin')

@section('content')
<div class="container">
    <!-- Círculo de conteo (ejemplo para mostrar la cantidad de candidatos) -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <a class="btn btn-primary">Crear Candidato</a>
        </div>
    </div>

    <div class="row mt-4">
        @foreach ($candidatos as $candidato)
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-body">
                    <!-- Imagen de la tarjeta (foto de prueba) -->
                    <div class="text-center">
                        <img src="https://e7.pngegg.com/pngimages/825/279/png-clipart-the-simpson-character-illustration-stewie-griffin-bart-simpson-brian-griffin-peter-griffin-homer-simpson-bart-simpson-television-cartoon.png" class="mb-3" alt="Foto de {{ $candidato->nombre_completo }}" width="150" height="150">
                    </div>

                    <!-- Información del candidato -->
                    <h5 class="card-title text-center">{{ $candidato->nombre_completo }}</h5>
                    <p class="card-text text-center"><strong>Partido:</strong> {{ $candidato->partido }}</p>
                    <p class="card-text text-center"><strong>Propuesta:</strong> {{ $candidato->propuesta }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
