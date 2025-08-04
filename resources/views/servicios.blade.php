@extends('layouts.app')

@section('title', 'Servicios - Villarrica Tours S.A.')
@section('description', 'Transporte de personal y turístico a nivel nacional. Servicios especializados con {{ date("Y") - 1995 }} años de experiencia en el rubro.')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4 text-white" data-aos="fade-up">
                    Nuestros Servicios
                </h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="200">
                    Soluciones integrales de transporte con {{ date("Y") - 1995 }} años de experiencia en el rubro. 
                    Seguridad, comodidad, confort y calidad garantizados.
                </p>
            </div>
        </div>
    </div>
</section>

@include('partials.breadcrumbs')

<!-- Transporte de Personal Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title text-start">Transporte de Personal</h2>
                <h3 class="text-primary mb-4">a nivel nacional</h3>
                <p class="lead mb-4">
                    Villarrica Tours, es una empresa dedicada al servicio de transporte de personal y turístico 
                    en general con {{ date("Y") - 1995 }} años de experiencia en el rubro.
                </p>
                <p class="mb-4">
                    Nuestros servicios otorgan a nuestros usuarios seguridad, comodidad, confort y calidad de trato, 
                    porque contamos con una gestión profesional de estándares internacionales, con unidades nuevas 
                    y debidamente equipadas y con conductores con amplia experiencia, adicionalmente la circulación 
                    de nuestras unidades se encuentra controlada por sistema GPS-Daegy Electronics Perú SAC.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-primary mb-3">Ofrecemos:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>
                                <strong>Traslado de Personal:</strong> pensando en la comodidad de sus ejecutivos y empleados.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>
                                <strong>Traslado Local:</strong> traslados al aeropuerto en servicio automóvil y van.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>
                                <strong>Nivel nacional:</strong> el transporte de personal lo llevamos a todo el Perú.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>
                                <strong>VIP Ejecutivos:</strong> pone énfasis en la atención personalizada del cliente Corporativo.
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="{{ route('contacto') }}" class="btn btn-primary mt-3">
                    <i class="fas fa-calculator me-2"></i>Solicitar Cotización
                </a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <!-- Imagen del servicio de transporte de personal -->
                <div class="card mb-4">
                    <img src="{{ asset('images/vtsa/3buses.png') }}" alt="Transporte de Personal VTSA" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Transporte de Personal</h5>
                        <p class="card-text">Flota especializada para empresas con máxima seguridad y confort.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="service-icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <h4 class="text-center mb-3">Características del Servicio</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-shield-alt text-primary me-2"></i>
                                        Seguridad Garantizada
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-clock text-primary me-2"></i>
                                        Puntualidad
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-snowflake text-primary me-2"></i>
                                        Aire Acondicionado
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-satellite text-primary me-2"></i>
                                        GPS en Tiempo Real
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-id-card text-primary me-2"></i>
                                        Conductores Certificados
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-bus text-primary me-2"></i>
                                        Unidades Modernas
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-phone text-primary me-2"></i>
                                        Atención 24/7
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-map-marked-alt text-primary me-2"></i>
                                        Cobertura Nacional
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transporte Turístico Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <h2 class="section-title text-start">Transporte Turístico</h2>
                <h3 class="text-primary mb-4">a nivel nacional</h3>
                <p class="lead mb-4">
                    Nuestra actividad empresarial cuenta con autorizaciones administrativas de la Gerencia de 
                    Transporte Urbano de la Municipalidad de Lima Metropolitana y de la Dirección General de 
                    Transporte Terrestre del Ministerio de Transportes y Comunicaciones – R.D. N4534-2015-MTC/15, 
                    buenos permite circular tanto a nivel urbano y nacional.
                </p>
                <p class="mb-4">
                    La tipología de nuestras unidades contamos con una variedad y diversidad como ómnibus, 
                    minibuses, couster, vans y minivans, lo que nos permite atender todas las necesidades de nuestros usuarios.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-primary mb-3">Servicios Turísticos:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>
                                <strong>Todo el Perú:</strong> Turismo a nivel Nacional.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>
                                <strong>Excursiones:</strong> viajes de promoción, excursiones y visitas a museos.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>
                                <strong>Turismo Integral:</strong> Paquetes turísticos.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check text-success me-2"></i>
                                <strong>Turismo Local:</strong> Turismo en Lima Metropolitana y paseos a Museos.
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="{{ route('contacto') }}" class="btn btn-primary mt-3">
                    <i class="fas fa-calculator me-2"></i>Solicitar Cotización
                </a>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <!-- Imagen del servicio turístico -->
                <div class="card mb-4">
                    <img src="{{ asset('images/vtsa/bus_solo2.png') }}" alt="Transporte Turístico VTSA" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Transporte Turístico</h5>
                        <p class="card-text">Unidades premium para experiencias turísticas únicas a nivel nacional.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="service-icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                        </div>
                        <h4 class="text-center mb-3">Experiencias Turísticas</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-mountain text-primary me-2"></i>
                                        Turismo de Aventura
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-building text-primary me-2"></i>
                                        Turismo Corporativo
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-graduation-cap text-primary me-2"></i>
                                        Turismo Educativo
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-camera text-primary me-2"></i>
                                        Turismo Fotográfico
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="fas fa-utensils text-primary me-2"></i>
                                        Turismo Gastronómico
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-church text-primary me-2"></i>
                                        Turismo Religioso
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-leaf text-primary me-2"></i>
                                        Turismo Ecológico
                                    </li>
                                    <li class="mb-2">
                                        <i class="fas fa-history text-primary me-2"></i>
                                        Turismo Cultural
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">¿Por qué elegirnos?</h2>
                <p class="section-subtitle">Ventajas que nos distinguen en el mercado</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h5>{{ date("Y") - 1995 }} Años de Experiencia</h5>
                    <p class="text-muted">Trayectoria sólida y confiable en el mercado peruano</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Seguridad Garantizada</h5>
                    <p class="text-muted">Conductores certificados y unidades con todos los estándares de seguridad</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5>Puntualidad</h5>
                    <p class="text-muted">Respetamos el tiempo de nuestros clientes con servicios puntuales</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5>Atención 24/7</h5>
                    <p class="text-muted">Disponibilidad total para atender sus necesidades en cualquier momento</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Certificaciones y Autorizaciones</h2>
                <p class="section-subtitle">Cumplimos con todos los estándares de calidad y seguridad</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card text-center">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>ISO 9001</h5>
                        <p class="text-muted">BUREAU VERITAS Certification</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card text-center">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-check-double"></i>
                        </div>
                        <h5>HODELPE</h5>
                        <p class="text-muted">Corporación HODELPE – Homologaciones Perú</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card text-center">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h5>Autorización MTC</h5>
                        <p class="text-muted">R.D. N4534-2015-MTC/15</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">¿En qué podemos ayudarte?</h2>
                <p class="lead mb-4">
                    Si estás interesado en alguno de nuestros servicios o deseas hacernos alguna consulta, 
                    estaremos encantados de atenderle.
                </p>
                <a href="{{ route('contacto') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-phone me-2"></i>Solicitar Cotización
                </a>
            </div>
        </div>
    </div>
</section>
@endsection 