@extends('layouts.user')

@section('content')
<div class="container">
    <h1>Gestión de Votos</h1>

    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Agregar Voto</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Recinto</th>
                <th>Número de Mesa</th>
                <th>Hjovanna</th>
                <th>Yacira</th>
                <th>Norma</th>
                <th>Efrain</th>
                <th>Grover</th>
                <th>Marvin</th>
                <th>Octavio</th>
                <th>Votos Válidos</th>
                <th>Votos en Blanco</th>
                <th>Votos Nulos</th>
                <th>Votos Emitidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($votos as $voto)
            <tr>
                <td>{{ $voto->id_votos }}</td>
                <td>{{ $voto->id_mesas }}</td>
                <td>{{ $voto->num_mesas }}</td>
                <td>{{ $voto->c_hjovanna }}</td>
                <td>{{ $voto->c_yacira }}</td>
                <td>{{ $voto->c_norma }}</td>
                <td>{{ $voto->c_efrain }}</td>
                <td>{{ $voto->c_grover }}</td>
                <td>{{ $voto->c_marvin }}</td>
                <td>{{ $voto->c_octavio }}</td>
                <td>{{ $voto->voto_valido }}</td>
                <td>{{ $voto->voto_blanco }}</td>
                <td>{{ $voto->voto_nulo }}</td>
                <td>{{ $voto->voto_emitido }}</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $voto->id_votos }}">Editar</button>
                    <form action="{{ route('votos_todos.destroy', $voto->id_votos) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>

            <!-- Modal de edición -->
            <div class="modal fade" id="editModal{{ $voto->id_votos }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ route('votos_todos.update', $voto->id_votos) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Editar Voto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Recinto</label>
                                    <select name="id_mesas" class="form-control">
                                        @foreach ($mesasRecintos as $mesaRecinto)
                                            <option value="{{ $mesaRecinto->id }}" {{ $voto->id_mesas == $mesaRecinto->id ? 'selected' : '' }}>
                                                {{ $mesaRecinto->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Número de Mesa</label>
                                    <input type="number" name="num_mesas" value="{{ $voto->num_mesas }}" class="form-control">
                                </div>
                                <!-- Otros campos aquí -->
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal de creación -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form id="form-votos" action="{{ route('votos_todos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Voto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Recinto</label>
                        <select name="id_mesas" class="form-control">
                            @foreach ($mesasRecintos as $mesaRecinto)
                                <option value="{{ $mesaRecinto->id_mesas }}">{{ $mesaRecinto->seccion1 }}, {{ $mesaRecinto->seccion2 }}, {{ $mesaRecinto->asiento_electoral }}, {{ $mesaRecinto->recinto_electoral }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Número de Mesa</label>
                        <input type="number" name="num_mesas" class="form-control" required>
                    </div>

                    <!-- JHOVANNA -->
                    <div class="mb-3 d-flex align-items-center">
                        <img src="{{ asset('admin_assets/images/candidatos/hjavanna.jpg') }}" alt="Jhovanna" class="me-2" style="width: 40px; height: 40px; object-fit: cover;">
                        <label class="mb-0">JHOVANNA ALARCON</label>
                        <input type="number" name="c_hjovanna" id="c_hjovanna" class="form-control ms-2" style="max-width: 80px;" required>
                    </div>

                    <!-- YACIRA -->
                    <div class="mb-3 d-flex align-items-center">
                        <img src="{{ asset('admin_assets/images/candidatos/yacira.jpg') }}" alt="Yacira" class="me-2" style="width: 40px; height: 40px; object-fit: cover;">
                        <label class="mb-0">YACIRA CARDOZO</label>
                        <input type="number" name="c_yacira" id="c_yacira" class="form-control ms-2" style="max-width: 80px;" required>
                    </div>

                    <!-- NORMA -->
                    <div class="mb-3 d-flex align-items-center">
                        <img src="{{ asset('admin_assets/images/candidatos/norma.jpeg') }}" alt="Norma" class="me-2" style="width: 40px; height: 40px; object-fit: cover;">
                        <label class="mb-0">NORMA VELASCO</label>
                        <input type="number" name="c_norma" id="c_norma" class="form-control ms-2" style="max-width: 80px;" required>
                    </div>

                    <!-- EFRAIN -->
                    <div class="mb-3 d-flex align-items-center">
                        <img src="{{ asset('admin_assets/images/candidatos/descarga.jpeg') }}"alt="Efrain" class="me-2" style="width: 40px; height: 40px; object-fit: cover;">
                        <label class="mb-0">EFRAIN OLAÑETA</label>
                        <input type="number" name="c_efrain" id="c_efrain" class="form-control ms-2" style="max-width: 80px;" required>
                    </div>

                    <!-- GROVER -->
                    <div class="mb-3 d-flex align-items-center">
                        <img src="{{ asset('admin_assets/images/candidatos/images.jpeg') }}"alt="Efrain" class="me-2" style="width: 40px; height: 40px; object-fit: cover;">
                        <label class="mb-0">GROVER GUTIERREZ</label>
                        <input type="number" name="c_grover" id="c_grover" class="form-control ms-2" style="max-width: 80px;" required>
                    </div>

                    <!-- MARVIN -->
                    <div class="mb-3 d-flex align-items-center">
                        <img src="{{ asset('admin_assets/images/candidatos/marvin.jpeg') }}"alt="Efrain" class="me-2" style="width: 40px; height: 40px; object-fit: cover;">
                        <label class="mb-0">MARVIN MOLINA</label>
                        <input type="number" name="c_marvin" id="c_marvin" class="form-control ms-2" style="max-width: 80px;" required>
                    </div>

                    <!-- OCTAVIO -->
                    <div class="mb-3 d-flex align-items-center">
                        <img src="{{ asset('admin_assets/images/candidatos/octavio.jpeg') }}"alt="Efrain" class="me-2" style="width: 40px; height: 40px; object-fit: cover;">
                        <label class="mb-0">OCTAVIO JANCO</label>
                        <input type="number" name="c_octavio" id="c_octavio" class="form-control ms-2" style="max-width: 80px;" required>
                    </div>

                    <!-- VOTOS VALIDOS -->
                    <div class="mb-3">
                        <label>VOTOS VALIDOS</label>
                        <input type="number" name="voto_valido" id="voto_valido" class="form-control" type="hidden">
                    </div>
                    
                    <!-- VOTOS EN BLANCO -->
                    <div class="mb-3">
                        <label>VOTOS EN BLANCO</label>
                        <input type="number" name="voto_blanco" id="voto_blanco" class="form-control" required>
                    </div>

                    <!-- VOTOS NULOS -->
                    <div class="mb-3">
                        <label>VOTOS NULOS</label>
                        <input type="number" name="voto_nulo" id="voto_nulo" class="form-control" required>
                    </div>

                    <!-- VOTOS EMITIDOS -->
                    <div class="mb-3">
                        <label>VOTOS EMITIDOS</label>
                        <input type="number" name="voto_emitido" id="voto_emitido" class="form-control" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="image">Imagen:</label>
                        <input type="file" name="image" id="image" accept="image/*" required>
                    </div> --}}

                    {{-- <label for="image">Seleccionar imagen:</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                    
                    <!-- Campo oculto para almacenar la imagen en Base64 -->
                    <input type="hidden" id="imageBase64" name="imageBase64"> --}}
                    <label for="image">Subir Imagen:</label>
                    <input type="file" name="image" id="image" accept="image/*" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
document.querySelectorAll('#c_hjovanna, #c_yacira, #c_norma, #c_efrain, #c_grover, #c_marvin, #c_octavio, #voto_blanco, #voto_nulo').forEach(input => {
    input.addEventListener('input', calcularVotos);
});

// Función para calcular los votos válidos, blancos, nulos y emitidos
function calcularVotos() {
    let totalVotosValidos = 0;

    // Suma de los votos válidos
    totalVotosValidos += parseInt(document.getElementById('c_hjovanna').value) || 0;
    totalVotosValidos += parseInt(document.getElementById('c_yacira').value) || 0;
    totalVotosValidos += parseInt(document.getElementById('c_norma').value) || 0;
    totalVotosValidos += parseInt(document.getElementById('c_efrain').value) || 0;
    totalVotosValidos += parseInt(document.getElementById('c_grover').value) || 0;
    totalVotosValidos += parseInt(document.getElementById('c_marvin').value) || 0;
    totalVotosValidos += parseInt(document.getElementById('c_octavio').value) || 0;

    // Asigna el total de votos válidos
    document.getElementById('voto_valido').value = totalVotosValidos;

    // Suma de los votos en blanco y nulos
    let votosBlanco = parseInt(document.getElementById('voto_blanco').value) || 0;
    let votosNulo = parseInt(document.getElementById('voto_nulo').value) || 0;

    // Suma de todos los votos emitidos
    let totalVotosEmitidos = totalVotosValidos + votosBlanco + votosNulo;

    // Asigna el total de votos emitidos
    document.getElementById('voto_emitido').value = totalVotosEmitidos;
}

// Manejo del envío del formulario
document.getElementById('form-votos').addEventListener('submit', function(event) {
    // Asegúrate de que los campos se hayan calculado antes de enviar
    calcularVotos();

    // Si deseas realizar alguna validación adicional antes de enviar el formulario
    // if ( /* condición de validación */ ) {
    //     event.preventDefault(); // Detén el envío si hay un error
    // }
});
</script>

<script>
    // Selección del input de imagen
    const imageInput = document.getElementById('image');
        const hiddenInput = document.getElementById('imageBase64');

        // Convertir la imagen a Base64 cuando se seleccione
        imageInput.addEventListener('change', () => {
            const file = imageInput.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(event) {
                    const base64String = event.target.result.split(',')[1]; // Base64 sin el prefijo
                    hiddenInput.value = base64String;
                };

                reader.readAsDataURL(file); // Leer el archivo como Base64
            }
        });
</script>
@endsection
