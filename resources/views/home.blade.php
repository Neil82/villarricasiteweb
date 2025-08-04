@extends('layouts.app')

@section('title', 'Villarrica Tours S.A. - Transporte de Confianza')
@section('description', 'Transporte de personal y turístico a nivel nacional con {{ date("Y") - 1995 }} años de experiencia. Seguridad, comodidad y confort garantizados.')

@section('content')
<!-- Hero Section with Video Background -->
<section class="hero-section-fullscreen">
    <!-- Video de YouTube como fondo -->
    <div class="hero-video-background">
        <iframe 
            src="https://www.youtube.com/embed/egKbSfu79_Y?autoplay=1&mute=1&loop=1&playlist=egKbSfu79_Y&controls=0&showinfo=0&rel=0&modestbranding=1&iv_load_policy=3&fs=0&disablekb=1"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
        </iframe>
    </div>
    
    <!-- Partículas animadas -->
    <div class="particles-container">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <div class="hero-content-overlay">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 col-xl-8">
                    
                    <!-- Logo principal -->
                    <div class="hero-logo mb-4" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('images/logo.png') }}" alt="Villarrica Tours" class="img-fluid hero-logo-img">
                    </div>
                    <h2 class="hero-subtitle h3 text-white mb-4 fw-bold" data-aos="fade-up" data-aos-delay="300">
                        TRANSPORTE DE CONFIANZA
                    </h2>
                    
                    <!-- Cards de valor flotantes -->
                    <div class="row mb-5" data-aos="fade-up" data-aos-delay="500">
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <div class="hero-feature-card">
                                <div class="hero-feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h6 class="text-white mb-1">Seguridad</h6>
                                <small class="text-white-50">Garantizada</small>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <div class="hero-feature-card">
                                <div class="hero-feature-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <h6 class="text-white mb-1">Puntualidad</h6>
                                <small class="text-white-50">Asegurada</small>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <div class="hero-feature-card">
                                <div class="hero-feature-icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <h6 class="text-white mb-1">Atención</h6>
                                <small class="text-white-50">24/7</small>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <div class="hero-feature-card">
                                <div class="hero-feature-icon">
                                    <i class="fas fa-satellite"></i>
                                </div>
                                <h6 class="text-white mb-1">GPS</h6>
                                <small class="text-white-50">Tiempo Real</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botones de acción -->
                    <div class="hero-cta-buttons" data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ route('contacto') }}" class="btn btn-primary btn-lg me-3 mb-3">
                            <i class="fas fa-phone me-2"></i>Solicitar Cotización
                        </a>
                        <a href="{{ route('nuestra-flota') }}" class="btn btn-outline-light btn-lg mb-3">
                            <i class="fas fa-bus me-2"></i>Ver Nuestra Flota
                        </a>
                    </div>
                    
                    <!-- Estadísticas rápidas -->
                    <div class="row hero-stats mt-5" data-aos="fade-up" data-aos-delay="700">
                        <div class="col-3">
                            <div class="hero-stat">
                                <div class="hero-stat-number counter" data-count="{{ date("Y") - 1995 }}" data-suffix="+">0+</div>
                                <div class="hero-stat-label">Años</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="hero-stat">
                                <div class="hero-stat-number counter" data-count="100" data-suffix="+">0+</div>
                                <div class="hero-stat-label">Clientes</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="hero-stat">
                                <div class="hero-stat-number counter" data-count="75" data-suffix="+">0+</div>
                                <div class="hero-stat-label">Unidades</div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="hero-stat">
                                <div class="hero-stat-number">24/7</div>
                                <div class="hero-stat-label">Soporte</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-scroll-indicator">
        <div class="scroll-arrow">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>
</section>


<!-- Services Preview Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Nuestros Servicios Principales</h2>
                <p class="section-subtitle">Soluciones de transporte integrales para todas tus necesidades</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="service-image-container" style="height: 250px; overflow: hidden; position: relative;">
                        <img src="{{ asset('images/vtsa/bus.png') }}" alt="Transporte de Personal" class="service-image active" data-index="0">
                        <img src="{{ asset('images/vtsa/3_buses.png') }}" alt="Transporte de Personal" class="service-image" data-index="1">
                        <img src="{{ asset('images/vtsa/bus_solo.png') }}" alt="Transporte de Personal" class="service-image" data-index="2">
                    </div>
                    <div class="card-body text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="card-title">Transporte de Personal</h4>
                        <h5 class="text-primary mb-3">a nivel nacional</h5>
                        <p class="card-text">
                            Servicio especializado para empresas que requieren traslado seguro y puntual de su personal. 
                            Contamos con unidades modernas y conductores certificados.
                        </p>
                        <a href="{{ route('servicios') }}" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <div class="service-image-container" style="height: 250px; overflow: hidden; position: relative;">
                        <img src="{{ asset('images/vtsa/3buses_2.png') }}" alt="Transporte Turístico" class="service-image active" data-index="0">
                        <img src="{{ asset('images/vtsa/2.png') }}" alt="Transporte Turístico" class="service-image" data-index="1">
                        <img src="{{ asset('images/vtsa/bus_solo2.png') }}" alt="Transporte Turístico" class="service-image" data-index="2">
                    </div>
                    <div class="card-body text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h4 class="card-title">Transporte Turístico</h4>
                        <h5 class="text-primary mb-3">a nivel nacional</h5>
                        <p class="card-text">
                            Experiencias turísticas únicas con la mejor flota del país. 
                            Excursiones, viajes corporativos y paquetes turísticos personalizados.
                        </p>
                        <a href="{{ route('servicios') }}" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title text-start">¿Quienes Somos?</h2>
                <h3 class="text-primary mb-4">Confianza, desde 1995.</h3>
                <p class="lead mb-4">
                    Don Camilo Paitan Obregón, fundó en el año 1995 la empresa Villarrica Tours S.A. 
                    Siempre se caracterizó por ser un hombre luchador y perseverante con mucho deseo de superación.
                </p>
                <p class="mb-4">
                    Actualmente contamos con una amplia cartera de clientes, quienes confían en nosotros 
                    para el traslado seguro de su personal, siendo considerados como socio estratégico 
                    para el crecimiento y desarrollo de ambas empresas.
                </p>
                <a href="{{ route('quienes-somos') }}" class="btn btn-primary">
                    <i class="fas fa-info-circle me-2"></i>Conoce Más
                </a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <!-- Imagen histórica de la empresa -->
                <div class="card mb-4">
                    <img src="{{ asset('images/vtsa/3buses_2.png') }}" alt="Historia Villarrica Tours VTSA" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Nuestra Trayectoria</h5>
                        <p class="card-text">Desde 1995, construyendo confianza con cada viaje y una flota moderna.</p>
                    </div>
                </div>
                
                <div class="stats-card">
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="stats-number">30+</div>
                            <p>Años de Experiencia</p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="stats-number">100+</div>
                            <p>Clientes Satisfechos</p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="stats-number">75+</div>
                            <p>Unidades Modernas</p>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="stats-number">24/7</div>
                            <p>Atención Disponible</p>
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
                <p class="section-subtitle">Características que nos distinguen en el mercado</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Seguridad Garantizada</h5>
                    <p class="text-muted">Conductores certificados y unidades con todos los estándares de seguridad internacionales.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5>Puntualidad</h5>
                    <p class="text-muted">Respetamos el tiempo de nuestros clientes con servicios siempre a tiempo.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-satellite"></i>
                    </div>
                    <h5>GPS en Tiempo Real</h5>
                    <p class="text-muted">Todas nuestras unidades cuentan con rastreo satelital para mayor control.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h5>Aire Acondicionado</h5>
                    <p class="text-muted">Comodidad garantizada en todas nuestras unidades con clima controlado.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5>Atención 24/7</h5>
                    <p class="text-muted">Disponibilidad total para atender sus necesidades en cualquier momento.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h5>Certificaciones</h5>
                    <p class="text-muted">Certificaciones que garantizan nuestra calidad y confiabilidad.</p>
                    
                    <!-- Logos de certificaciones -->
                    <div class="certifications-grid mt-3">
                        <div class="certification-item">
                            <img src="{{ asset('images/homologacion/BV_certification_9001.png') }}" alt="ISO 9001 Bureau Veritas">
                        </div>
                        <div class="certification-item">
                            <img src="{{ asset('images/homologacion/hodelpe-homologado.png') }}" alt="HODELPE">
                        </div>
                        <div class="certification-item">
                            <img src="{{ asset('images/homologacion/cial.png') }}" alt="CIAL">
                        </div>
                        <div class="certification-item">
                            <img src="{{ asset('images/homologacion/Mega-homologado.png') }}" alt="Mega">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fleet Gallery Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Nuestra Flota</h2>
                <p class="section-subtitle">Unidades modernas con tecnología de vanguardia</p>
            </div>
        </div>
        
        <!-- Galería de Fotos de Flota VTSA -->
        <div class="row mb-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card gallery-card">
                    <img src="{{ asset('images/vtsa/3_buses.png') }}" alt="Flota Completa VTSA" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title">Flota Completa</h6>
                        <p class="card-text small">Diferentes tamaños para cada necesidad</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card gallery-card">
                    <img src="{{ asset('images/vtsa/bus.png') }}" alt="Ómnibus VTSA" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title">Ómnibus de Lujo</h6>
                        <p class="card-text small">Máximo confort y seguridad</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card gallery-card">
                    <img src="{{ asset('images/vtsa/bus_solo.png') }}" alt="Unidad Individual VTSA" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title">Unidad Premium</h6>
                        <p class="card-text small">Tecnología de vanguardia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card gallery-card">
                    <img src="{{ asset('images/vtsa/2.png') }}" alt="Flota VTSA en Servicio" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title">En Operación</h6>
                        <p class="card-text small">Servicio profesional 24/7</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tipos de Vehículos -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="fleet-card">
                    <div class="service-icon">
                        <i class="fas fa-bus"></i>
                    </div>
                    <h4>Ómnibus</h4>
                    <p class="text-primary fw-bold">42-53 asientos</p>
                    <p class="text-muted small"><strong>Combustible:</strong> Diesel</p>
                    <p class="text-muted small"><strong>Marcas:</strong> Hyundai, Mercedes Benz, Higer, Iveco, Golden Dragon, Yutong, International, Marco Polo, DongFeng</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="fleet-card">
                    <div class="service-icon">
                        <i class="fas fa-bus-alt"></i>
                    </div>
                    <h4>Minibús</h4>
                    <p class="text-primary fw-bold">30-38 asientos</p>
                    <p class="text-muted small"><strong>Combustible:</strong> Diesel 2 (petróleo)</p>
                    <p class="text-muted small"><strong>Marcas:</strong> Toyota, Hyundai, Higer, Marco Polo, Mercedes Benz, Yutong, Volare W9</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="fleet-card">
                    <div class="service-icon">
                        <i class="fas fa-van-shuttle"></i>
                    </div>
                    <h4>Van</h4>
                    <p class="text-primary fw-bold">14-21 asientos</p>
                    <p class="text-muted small"><strong>Combustible:</strong> Diesel 2 (petróleo)</p>
                    <p class="text-muted small"><strong>Marcas:</strong> Toyota Hiace y Joylong</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('nuestra-flota') }}" class="btn btn-primary">
                <i class="fas fa-car me-2"></i>Ver Toda Nuestra Flota
            </a>
        </div>
    </div>
</section>


<!-- Clients Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Nuestros Clientes</h2>
                <p class="section-subtitle">Empresas que confían en nosotros para su transporte</p>
            </div>
        </div>
        
        <!-- Carousel de logos -->
        <div class="clients-carousel-container">
            <div class="clients-carousel">
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-alconsa.png') }}" alt="Alconsa">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-amp-terminals.png') }}" alt="AMP Terminals">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-cemex.png') }}" alt="Cemex">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-fadesa.png') }}" alt="Fadesa">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-impala.png') }}" alt="Impala">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-ixm.png') }}" alt="IXM">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-maersk.png') }}" alt="Maersk">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-mixercon.png') }}" alt="Mixercon">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-mra.png') }}" alt="MRA">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-palcon.png') }}" alt="Palcon">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-prodac.png') }}" alt="Prodac">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-qb.png') }}" alt="QB">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-quimpac.png') }}" alt="Quimpac">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-rfs.png') }}" alt="RFS">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-schneider.png') }}" alt="Schneider">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-stierlift.png') }}" alt="Stierlift">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-tasa.png') }}" alt="Tasa">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-tpp.png') }}" alt="TPP">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-vartini.png') }}" alt="Vartini">
                </div>
                
                <!-- Duplicar logos para efecto infinito -->
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-alconsa.png') }}" alt="Alconsa">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-amp-terminals.png') }}" alt="AMP Terminals">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-cemex.png') }}" alt="Cemex">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-fadesa.png') }}" alt="Fadesa">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-impala.png') }}" alt="Impala">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-ixm.png') }}" alt="IXM">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-maersk.png') }}" alt="Maersk">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-mixercon.png') }}" alt="Mixercon">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-mra.png') }}" alt="MRA">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-palcon.png') }}" alt="Palcon">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-prodac.png') }}" alt="Prodac">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-qb.png') }}" alt="QB">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-quimpac.png') }}" alt="Quimpac">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-rfs.png') }}" alt="RFS">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-schneider.png') }}" alt="Schneider">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-stierlift.png') }}" alt="Stierlift">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-tasa.png') }}" alt="Tasa">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-tpp.png') }}" alt="TPP">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('images/clientes/logotipo-vartini.png') }}" alt="Vartini">
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

@section('scripts')
<script>
    // Carrusel de imágenes de servicios con efecto creativo
    document.addEventListener('DOMContentLoaded', function() {
        // Función para cada contenedor de imágenes
        document.querySelectorAll('.service-image-container').forEach(function(container, containerIndex) {
            const images = container.querySelectorAll('.service-image');
            let currentIndex = 0;
            
            // Crear indicadores
            const indicatorsContainer = document.createElement('div');
            indicatorsContainer.className = 'service-image-indicators';
            
            images.forEach((img, index) => {
                const indicator = document.createElement('div');
                indicator.className = 'service-image-indicator';
                if (index === 0) indicator.classList.add('active');
                indicator.addEventListener('click', () => goToImage(index));
                indicatorsContainer.appendChild(indicator);
            });
            
            container.appendChild(indicatorsContainer);
            const indicators = indicatorsContainer.querySelectorAll('.service-image-indicator');
            
            // Función para cambiar a una imagen específica
            function goToImage(index) {
                images[currentIndex].classList.remove('active');
                indicators[currentIndex].classList.remove('active');
                
                currentIndex = index;
                
                images[currentIndex].classList.add('active');
                indicators[currentIndex].classList.add('active');
            }
            
            // Función para cambiar a la siguiente imagen
            function nextImage() {
                const nextIndex = (currentIndex + 1) % images.length;
                goToImage(nextIndex);
            }
            
            // Cambiar imagen automáticamente cada 4 segundos
            // Offset para que no cambien al mismo tiempo
            setTimeout(() => {
                setInterval(nextImage, 4000);
            }, containerIndex * 1000);
        });
    });
</script>
@endsection 