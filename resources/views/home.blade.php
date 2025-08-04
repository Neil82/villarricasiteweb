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
                <div class="service-card-commercial">
                    <!-- Header con imagen y carousel -->
                    <div class="service-header">
                        <div class="service-image-container">
                            <img src="{{ asset('images/vtsa/bus.png') }}" alt="Transporte de Personal" class="service-image active" data-index="0">
                            <img src="{{ asset('images/vtsa/3_buses.png') }}" alt="Transporte de Personal" class="service-image" data-index="1">
                            <img src="{{ asset('images/vtsa/bus_solo.png') }}" alt="Transporte de Personal" class="service-image" data-index="2">
                        </div>
                        <div class="service-badge professional">
                            <span class="badge-text">Profesional</span>
                        </div>
                    </div>
                    
                    <!-- Contenido principal -->
                    <div class="service-content">
                        <div class="service-icon-wrapper">
                            <div class="service-icon-modern">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        
                        <div class="service-title-section">
                            <h3 class="service-title-main">Transporte de Personal</h3>
                            <div class="service-level">
                                <span class="level-indicator">a nivel nacional</span>
                            </div>
                        </div>
                        
                        <div class="service-description">
                            <p>
                                Servicio especializado para empresas que requieren traslado seguro y puntual de su personal. 
                                Contamos con unidades modernas y conductores certificados.
                            </p>
                        </div>
                        
                        <div class="service-features">
                            <div class="feature-tag">
                                <i class="fas fa-shield-alt"></i>
                                <span>Seguridad</span>
                            </div>
                            <div class="feature-tag">
                                <i class="fas fa-clock"></i>
                                <span>Puntualidad</span>
                            </div>
                            <div class="feature-tag">
                                <i class="fas fa-certificate"></i>
                                <span>Certificado</span>
                            </div>
                        </div>
                        
                        <div class="service-cta">
                            <a href="{{ route('servicios') }}" class="btn btn-service-primary">
                                <span>Ver Más Detalles</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-commercial">
                    <!-- Header con imagen y carousel -->
                    <div class="service-header">
                        <div class="service-image-container">
                            <img src="{{ asset('images/vtsa/3buses_2.png') }}" alt="Transporte Turístico" class="service-image active" data-index="0">
                            <img src="{{ asset('images/vtsa/2.png') }}" alt="Transporte Turístico" class="service-image" data-index="1">
                            <img src="{{ asset('images/vtsa/bus_solo2.png') }}" alt="Transporte Turístico" class="service-image" data-index="2">
                        </div>
                        <div class="service-badge premium">
                            <span class="badge-text">Premium</span>
                        </div>
                    </div>
                    
                    <!-- Contenido principal -->
                    <div class="service-content">
                        <div class="service-icon-wrapper">
                            <div class="service-icon-modern">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                        </div>
                        
                        <div class="service-title-section">
                            <h3 class="service-title-main">Transporte Turístico</h3>
                            <div class="service-level">
                                <span class="level-indicator">a nivel nacional</span>
                            </div>
                        </div>
                        
                        <div class="service-description">
                            <p>
                                Experiencias turísticas únicas con la mejor flota del país. 
                                Excursiones, viajes corporativos y paquetes turísticos personalizados.
                            </p>
                        </div>
                        
                        <div class="service-features">
                            <div class="feature-tag">
                                <i class="fas fa-star"></i>
                                <span>Único</span>
                            </div>
                            <div class="feature-tag">
                                <i class="fas fa-route"></i>
                                <span>Excursiones</span>
                            </div>
                            <div class="feature-tag">
                                <i class="fas fa-users-cog"></i>
                                <span>Personalizado</span>
                            </div>
                        </div>
                        
                        <div class="service-cta">
                            <a href="{{ route('servicios') }}" class="btn btn-service-primary">
                                <span>Ver Más Detalles</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5 about-section-commercial">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-content-commercial">
                    <div class="about-badge">
                        <span class="badge-text">Desde 1995</span>
                    </div>
                    
                    <h2 class="about-title-main">¿Quienes Somos?</h2>
                    <div class="about-subtitle-highlight">
                        <span class="highlight-text">Confianza, desde 1995.</span>
                    </div>
                    
                    <div class="about-story">
                        <p class="story-lead">
                            Don Camilo Paitan Obregón, fundó en el año 1995 la empresa Villarrica Tours S.A. 
                            Siempre se caracterizó por ser un hombre luchador y perseverante con mucho deseo de superación.
                        </p>
                        <p class="story-detail">
                            Actualmente contamos con una amplia cartera de clientes, quienes confían en nosotros 
                            para el traslado seguro de su personal, siendo considerados como socio estratégico 
                            para el crecimiento y desarrollo de ambas empresas.
                        </p>
                    </div>
                    
                    <div class="about-cta">
                        <a href="{{ route('quienes-somos') }}" class="btn btn-about-primary">
                            <i class="fas fa-info-circle me-2"></i>
                            <span>Conoce Más</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-visual-section">
                    <!-- Imagen con overlay mejorado -->
                    <div class="trajectory-card-commercial">
                        <div class="trajectory-header">
                            <img src="{{ asset('images/vtsa/3buses_2.png') }}" alt="Historia Villarrica Tours VTSA" class="trajectory-img">
                            <div class="trajectory-overlay">
                                <div class="trajectory-badge">
                                    <span class="badge-text">Nuestra Trayectoria</span>
                                </div>
                            </div>
                        </div>
                        <div class="trajectory-content">
                            <p class="trajectory-text">Desde 1995, construyendo confianza con cada viaje y una flota moderna.</p>
                        </div>
                    </div>
                    
                    <!-- Stats mejorados -->
                    <div class="about-stats-commercial">
                        <div class="stats-grid">
                            <div class="stat-item-commercial">
                                <div class="stat-number-about about-counter" data-count="{{ date('Y') - 1995 }}" data-suffix="+">0+</div>
                                <div class="stat-label-about">Años de Experiencia</div>
                            </div>
                            <div class="stat-item-commercial">
                                <div class="stat-number-about about-counter" data-count="100" data-suffix="+">0+</div>
                                <div class="stat-label-about">Clientes Satisfechos</div>
                            </div>
                            <div class="stat-item-commercial">
                                <div class="stat-number-about about-counter" data-count="75" data-suffix="+">0+</div>
                                <div class="stat-label-about">Unidades Modernas</div>
                            </div>
                            <div class="stat-item-commercial">
                                <div class="stat-number-about">24/7</div>
                                <div class="stat-label-about">Atención Disponible</div>
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
                <p class="section-subtitle">Características que nos distinguen en el mercado</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card-enhanced premium text-center p-4">
                    <div class="feature-badge guaranteed">
                        <span class="badge-text">Garantizado</span>
                    </div>
                    <div class="feature-icon-enhanced mb-3">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Seguridad Garantizada</h5>
                    <p class="text-muted">Conductores certificados y unidades con todos los estándares de seguridad internacionales.</p>
                    <div class="feature-cta-hover">
                        <a href="{{ route('servicios') }}" class="btn btn-feature-sm">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card-enhanced text-center p-4">
                    <div class="feature-icon-enhanced mb-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5>Puntualidad</h5>
                    <p class="text-muted">Respetamos el tiempo de nuestros clientes con servicios siempre a tiempo.</p>
                    <div class="feature-cta-hover">
                        <a href="{{ route('servicios') }}" class="btn btn-feature-sm">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card-enhanced premium text-center p-4">
                    <div class="feature-badge tech">
                        <span class="badge-text">Tiempo Real</span>
                    </div>
                    <div class="feature-icon-enhanced gps-pulse mb-3">
                        <i class="fas fa-satellite"></i>
                    </div>
                    <h5>GPS en Tiempo Real</h5>
                    <p class="text-muted">Todas nuestras unidades cuentan con rastreo satelital para mayor control.</p>
                    <div class="feature-cta-hover">
                        <a href="{{ route('servicios') }}" class="btn btn-feature-sm">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card-enhanced text-center p-4">
                    <div class="feature-icon-enhanced mb-3">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h5>Aire Acondicionado</h5>
                    <p class="text-muted">Comodidad garantizada en todas nuestras unidades con clima controlado.</p>
                    <div class="feature-cta-hover">
                        <a href="{{ route('servicios') }}" class="btn btn-feature-sm">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card-enhanced text-center p-4">
                    <div class="feature-badge always-on">
                        <span class="badge-text pulse-number">24/7</span>
                    </div>
                    <div class="feature-icon-enhanced mb-3">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5>Atención 24/7</h5>
                    <p class="text-muted">Disponibilidad total para atender sus necesidades en cualquier momento.</p>
                    <div class="feature-cta-hover">
                        <a href="{{ route('contacto') }}" class="btn btn-feature-sm">Contactar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-card-enhanced text-center p-4">
                    <div class="feature-icon-enhanced mb-3">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h5>Certificaciones</h5>
                    <p class="text-muted">Certificaciones que garantizan nuestra calidad y confiabilidad.</p>
                    <div class="feature-cta-hover">
                        <a href="#certifications-section" class="btn btn-feature-sm">Ver Certificados</a>
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
        
        // Animación counter específica para la sección About
        function animateAboutCounters() {
            const aboutCounters = document.querySelectorAll('.about-counter');
            
            aboutCounters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const suffix = counter.getAttribute('data-suffix') || '';
                const duration = 2000; // 2 segundos
                const step = target / (duration / 16); // 60fps
                let current = 0;
                
                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + suffix;
                    }
                };
                
                updateCounter();
            });
        }
        
        // Intersection Observer para activar la animación cuando sea visible
        const aboutStatsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateAboutCounters();
                    aboutStatsObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });
        
        const aboutStatsSection = document.querySelector('.about-stats-commercial');
        if (aboutStatsSection) {
            aboutStatsObserver.observe(aboutStatsSection);
        }
    });
</script>
@endsection 