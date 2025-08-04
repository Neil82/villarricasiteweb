@extends('layouts.app')

@section('title', 'Quienes Somos - Villarrica Tours S.A.')
@section('description', 'Conoce la historia de Villarrica Tours S.A., fundada en 1995 por Don Camilo Paitan Obregón. {{ date("Y") - 1995 }} años de confianza en el transporte de personal y turístico.')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4 text-white" data-aos="fade-up">
                    Quienes Somos
                </h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="200">
                    Confianza, desde 1995. {{ date("Y") - 1995 }} años de experiencia en el transporte de personal y turístico a nivel nacional.
                </p>
            </div>
        </div>
    </div>
</section>

@include('partials.breadcrumbs')

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title text-start">Nuestra Historia</h2>
                <p class="lead mb-4">
                    Don Camilo Paitan Obregón, fundó en el año 1995 la empresa Villarrica Tours S.A. 
                    Siempre se caracterizó por ser un hombre luchador y perseverante con mucho deseo de superación.
                </p>
                <p class="mb-4">
                    Actualmente contamos con una amplia cartera de clientes, quienes confían en nosotros 
                    para el traslado seguro de su personal, siendo considerados como socio estratégico 
                    para el crecimiento y desarrollo de ambas empresas.
                </p>
                <div class="row">
                    <div class="col-6">
                        <div class="text-center p-3">
                            <div class="stats-number">30+</div>
                            <p class="fw-bold">Años de Experiencia</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-3">
                            <div class="stats-number">1000+</div>
                            <p class="fw-bold">Clientes Satisfechos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <!-- Imagen de la empresa -->
                <div class="card mb-4">
                    <img src="{{ asset('images/unidades/galeria-6-1030x687.jpg') }}" alt="Villarrica Tours - Empresa Líder" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Villarrica Tours S.A.</h5>
                        <p class="card-text">Líderes en transporte de personal y turístico desde 1995.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body p-4">
                        <h4 class="text-primary mb-3">Nuestros Logros</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <strong>1995:</strong> Fundación de la empresa
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <strong>2000:</strong> Expansión a nivel nacional
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <strong>2010:</strong> Certificación ISO 9001
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <strong>2020:</strong> Flota moderna con tecnología GPS
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Vision Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="service-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-center mb-3">Misión</h3>
                        <p class="card-text">
                            Nuestra misión es posicionarnos como Empresa Líder en el Transporte especial de trabajadores, 
                            desarrollaremos nuevas estrategias para lograr un servicio de calidad, logrando satisfacer 
                            las necesidades más exigentes del mercado, cumpliremos con los estándares de seguridad 
                            responsable y así, garantizar la integridad de nuestros usuarios.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="service-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                        <h3 class="card-title text-center mb-3">Visión</h3>
                        <p class="card-text">
                            Ser una Empresa transporte Líder en el ámbito nacional, implementando un sistema de mejora 
                            continua a los procesos del sistema integrado de gestiones, capacitando periódicamente a 
                            nuestros colaboradores en temas de Seguridad, Salud en el trabajo, respetando las políticas 
                            laborales en el cuidado del medio ambiente logrando así reducir los riesgos en nuestro servicio.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Nuestros Valores</h2>
                <p class="section-subtitle">Los principios que guían nuestro trabajo diario</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5>Trabajo en Equipo</h5>
                    <p class="text-muted">Colaboración efectiva para lograr objetivos comunes</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h5>Honestidad</h5>
                    <p class="text-muted">Transparencia en todas nuestras operaciones</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h5>Sinergia</h5>
                    <p class="text-muted">Trabajo coordinado para maximizar resultados</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h5>Lealtad</h5>
                    <p class="text-muted">Compromiso con nuestros clientes y colaboradores</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Prevención</h5>
                    <p class="text-muted">Anticipamos y evitamos riesgos en nuestros servicios</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h5>Confianza</h5>
                    <p class="text-muted">Construimos relaciones duraderas basadas en la confianza</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h5>Responsabilidad</h5>
                    <p class="text-muted">Cumplimos con nuestros compromisos y obligaciones</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5>Puntualidad</h5>
                    <p class="text-muted">Respetamos el tiempo de nuestros clientes</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5>Innovación</h5>
                    <p class="text-muted">Siempre buscamos mejorar nuestros servicios</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quality Service Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Servicio de Calidad</h2>
                <p class="section-subtitle">Nuestros clientes confían en nosotros para el traslado de su personal</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body p-4">
                        <p class="mb-4">
                            Nuestros clientes confían en nosotros para el traslado de su personal, donde diariamente 
                            vamos demostrando puntualidad y eficiencia en el servicio brindado; nuestros conductores 
                            cuentan con licencia de conducir AIIIC y AIIIA, y son capacitados anualmente en temas de 
                            seguridad, salud ocupacional y cuidado del medio ambiente.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-primary mb-3">Certificaciones de Conductores:</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-certificate text-success me-2"></i>Primeros Auxilios</li>
                                    <li><i class="fas fa-certificate text-success me-2"></i>Manejo Defensivo</li>
                                    <li><i class="fas fa-certificate text-success me-2"></i>Uso de Extintores</li>
                                    <li><i class="fas fa-certificate text-success me-2"></i>Riesgos Psicosociales</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-primary mb-3">Licencias de Conducción:</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-id-card text-primary me-2"></i>AIIIC - Ómnibus</li>
                                    <li><i class="fas fa-id-card text-primary me-2"></i>AIIIA - Minibús</li>
                                </ul>
                            </div>
                        </div>
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