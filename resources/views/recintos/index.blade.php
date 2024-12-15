<!-- resources/views/secciones/index.blade.php -->
@extends('layouts.user')

@section('content')
<div class="container">
    <h1>Listado de Recintos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Provincia</th>
                <th>Municipio</th>
                <th>Asiento Electoral</th>
                <th>Recinto Electoral</th>
                <th>Cantidad de Mesas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
                <tr>
                    <td>{{ $dato->seccion1 }}</td>
                    <td>{{ $dato->seccion2 }}</td>
                    <td>{{ $dato->asiento_electoral }}</td>
                    <td>{{ $dato->recinto_electoral }}</td>
                    <td>{{ $dato->cantidad_mesas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
