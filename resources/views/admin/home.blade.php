@extends('layouts.admin')

@section('content')
<div class="container-fluid p-0">
    <!-- Header -->
    <div class="bg-primary text-light text-center py-4">
        <h1 class="fw-bold">Plataforma Electoral 2024</h1>
        <p class="lead">Conoce a los candidatos, propuestas y resultados en tiempo real.</p>
    </div>

    <!-- Main Content -->
    <div class="container mt-4">
        <!-- Sección de Candidatos -->
        <section class="mb-5">
            <h2 class="fw-bold text-center mb-4">Candidatos Destacados</h2>
            <div class="row">
                <!-- Tarjeta de Candidato -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <img src="{{ asset('admin_assets/images/candidatos/1.jpg') }}" 
                        class="card-img-top rounded-top" alt="Candidato 1" style="max-width: 415px; ">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">María López</h5>
                            <p class="card-text">Partido: Unión Progresista</p>
                            <a href="#" class="btn btn-primary btn-sm">Ver Perfil</a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta de Candidato -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <img src="{{ asset('admin_assets/images/candidatos/3.jpeg') }}" style="width: 415px; " class="card-img-top rounded-top" alt="Candidato 2">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Carlos Méndez</h5>
                            <p class="card-text">Partido: Cambio Seguro</p>
                            <a href="#" class="btn btn-primary btn-sm">Ver Perfil</a>
                        </div>
                    </div>
                </div>
                <!-- Tarjeta de Candidato -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <img src="{{ asset('admin_assets/images/candidatos/2.jpg') }}"  class="card-img-top rounded-top" alt="Candidato 3">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Ana Martínez</h5>
                            <p class="card-text">Partido: Fuerza Nacional</p>
                            <a href="#" class="btn btn-primary btn-sm">Ver Perfil</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Propuestas -->
        <section class="mb-5 bg-light p-4 rounded shadow-sm">
            <h2 class="fw-bold text-center mb-4">Propuestas Clave</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <i data-feather="check-circle" class="icon-lg text-primary mb-2"></i>
                        <h5 class="fw-bold">Educación de Calidad</h5>
                        <p>Impulsar reformas en el sistema educativo para garantizar igualdad de oportunidades.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i data-feather="trending-up" class="icon-lg text-success mb-2"></i>
                        <h5 class="fw-bold">Crecimiento Económico</h5>
                        <p>Propuestas orientadas a generar empleo y fomentar la inversión extranjera.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i data-feather="shield" class="icon-lg text-danger mb-2"></i>
                        <h5 class="fw-bold">Seguridad Nacional</h5>
                        <p>Fortalecer la seguridad mediante inversiones en tecnología y capacitación policial.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Noticias -->
        <section class="mb-5">
            <h2 class="fw-bold text-center mb-4">Noticias Recientes</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <img src="noticia1.jpg" class="card-img-top rounded-top" alt="Noticia 1">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Debate Presidencial</h5>
                            <p class="card-text">Los candidatos se enfrentarán en un debate clave este fin de semana.</p>
                            <a href="#" class="btn btn-link">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <img src="noticia2.jpg" class="card-img-top rounded-top" alt="Noticia 2">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Encuestas Actualizadas</h5>
                            <p class="card-text">Últimos resultados de intención de voto muestran una competencia cerrada.</p>
                            <a href="#" class="btn btn-link">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
