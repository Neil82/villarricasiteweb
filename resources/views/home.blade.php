@extends('layouts.app')

@section('title', 'Villarrica Tours S.A. - Transporte de Confianza')
@section('description', 'Transporte de personal y turístico a nivel nacional con 30 años de experiencia. Seguridad, comodidad y confort garantizados.')
@section('keywords', 'villarrica tours, transporte personal lima, transporte turístico peru, alquiler buses, empresa transporte confiable, GPS tiempo real, flota moderna EURO 5')
@section('og_type', 'website')
@section('og_title', 'Villarrica Tours S.A. - Líder en Transporte desde 1995')
@section('og_description', 'Transporte de confianza con 30 años de experiencia. ✓ 120+ unidades modernas ✓ GPS tiempo real ✓ 100+ empresas nos eligen ✓ Disponible 24/7')
@section('twitter_title', 'Villarrica Tours S.A. - Líder en Transporte desde 1995')
@section('twitter_description', 'Transporte de confianza con 30 años de experiencia. ✓ 120+ unidades ✓ GPS tiempo real ✓ 100+ empresas nos eligen')

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
                        @include('components.optimized-image', [
                            'src' => 'logo.png',
                            'alt' => 'Villarrica Tours',
                            'class' => 'img-fluid hero-logo-img',
                            'lazy' => false
                        ])
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
                                <div class="hero-stat-number counter" data-count="120" data-suffix="+">0+</div>
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
                            @include('components.optimized-image', [
                                'src' => 'vtsa/corporativo2.jpg',
                                'alt' => 'Transporte de Personal',
                                'class' => 'service-image active',
                                'data_index' => '0',
                                'lazy' => true
                            ])
                            @include('components.optimized-image', [
                                'src' => 'vtsa/bus_airport.png',
                                'alt' => 'Transporte de Personal',
                                'class' => 'service-image',
                                'data_index' => '1',
                                'lazy' => true
                            ])
                            @include('components.optimized-image', [
                                'src' => 'vtsa/corporativo1.jpg',
                                'alt' => 'Transporte de Personal',
                                'class' => 'service-image',
                                'data_index' => '2',
                                'lazy' => true
                            ])
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
                            @include('components.optimized-image', [
                                'src' => 'vtsa/bus_desierto.png',
                                'alt' => 'Transporte Turístico',
                                'class' => 'service-image active',
                                'data_index' => '0',
                                'lazy' => true
                            ])
                            @include('components.optimized-image', [
                                'src' => 'vtsa/selva_bus.jpg',
                                'alt' => 'Transporte Turístico',
                                'class' => 'service-image',
                                'data_index' => '1',
                                'lazy' => true
                            ])
                            @include('components.optimized-image', [
                                'src' => 'vtsa/ica_bus.jpg',
                                'alt' => 'Transporte Turístico',
                                'class' => 'service-image',
                                'data_index' => '2',
                                'lazy' => true
                            ])
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
                            @include('components.optimized-image', [
                                'src' => 'vtsa/3buses_2.png',
                                'alt' => 'Historia Villarrica Tours VTSA',
                                'class' => 'trajectory-img',
                                'lazy' => true
                            ])
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
                                <div class="stat-number-about about-counter" data-count="120" data-suffix="+">0+</div>
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
        

        <!-- Tipos de Vehículos -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="fleet-card-commercial">
                    <!-- Header con carrusel de imágenes -->
                    <div class="fleet-header">
                        <div class="fleet-carousel" data-fleet-type="omnibus">
                            <div class="fleet-carousel-inner">
                                <div class="fleet-carousel-item active">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/bus/bus_yutong.png',
                                        'alt' => 'Ómnibus Yutong',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                                <div class="fleet-carousel-item">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/bus/bus_higer.png',
                                        'alt' => 'Ómnibus Higer',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                                <div class="fleet-carousel-item">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/bus/bus_goldendragon.jpg',
                                        'alt' => 'Ómnibus Golden Dragon',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                            </div>
                            <button class="fleet-carousel-control prev" onclick="changeFleetSlide(this, -1)">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="fleet-carousel-control next" onclick="changeFleetSlide(this, 1)">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            <div class="fleet-carousel-indicators">
                                <button class="fleet-carousel-indicator active" onclick="goToFleetSlide(this, 0)"></button>
                                <button class="fleet-carousel-indicator" onclick="goToFleetSlide(this, 1)"></button>
                                <button class="fleet-carousel-indicator" onclick="goToFleetSlide(this, 2)"></button>
                            </div>
                        </div>
                        <div class="fleet-badge">
                            <span class="badge-text">Premium</span>
                        </div>
                    </div>
                    
                    <!-- Título principal -->
                    <div class="fleet-title">
                        <h3>Ómnibus</h3>
                        <p class="fleet-subtitle">Para grupos grandes</p>
                    </div>
                    
                    <!-- Capacidad destacada -->
                    <div class="fleet-capacity-highlight">
                        <div class="capacity-main">
                            <span class="capacity-number">42-53</span>
                            <span class="capacity-label">Pasajeros</span>
                        </div>
                        <div class="capacity-visual">
                            @include('components.optimized-image', [
                                'src' => 'unidades/capacidad1.jpg',
                                'alt' => 'Distribución de asientos Ómnibus',
                                'class' => 'capacity-img',
                                'lazy' => true
                            ])
                        </div>
                    </div>
                    
                    
                    <!-- Marcas disponibles -->
                    <div class="fleet-brands">
                        <h6><i class="fas fa-award text-primary me-2"></i>Marcas Disponibles</h6>
                        <div class="brands-list">
                            <span class="brand-tag">Yutong</span>
                            <span class="brand-tag">Mercedes Benz</span>
                            <span class="brand-tag">Hyundai</span>
                            <span class="brand-tag">Higer</span>
                            <span class="brand-tag">Golden Dragon</span>
                            <span class="brand-tag">Iveco</span>
                            <span class="brand-tag">International</span>
                            <span class="brand-tag">Marco Polo</span>
                            <span class="brand-tag">DongFeng</span>
                        </div>
                    </div>
                    
                    <!-- Call to action -->
                    <div class="fleet-cta">
                        <a href="{{ route('contacto') }}" class="btn btn-fleet-primary">
                            <i class="fas fa-calculator me-2"></i>
                            <span>Cotizar Ahora</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="fleet-card-commercial">
                    <!-- Header con carrusel de imágenes -->
                    <div class="fleet-header">
                        <div class="fleet-carousel" data-fleet-type="coaster">
                            <div class="fleet-carousel-inner">
                                <div class="fleet-carousel-item active" data-vehicle-title="Minibús">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/coaster/kamaz_busscar.jpg',
                                        'alt' => 'Kamaz Busscar',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                                <div class="fleet-carousel-item" data-vehicle-title="Minibús">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/coaster/kamaz_busscar.jpg',
                                        'alt' => 'Kamaz Busscar',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                                <div class="fleet-carousel-item" data-vehicle-title="Minibús">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/coaster/kamaz_busscar.jpg',
                                        'alt' => 'Kamaz Busscar',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                            </div>
                            <button class="fleet-carousel-control prev" onclick="changeFleetSlide(this, -1)">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="fleet-carousel-control next" onclick="changeFleetSlide(this, 1)">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            <div class="fleet-carousel-indicators">
                                <button class="fleet-carousel-indicator active" onclick="goToFleetSlide(this, 0)"></button>
                                <button class="fleet-carousel-indicator" onclick="goToFleetSlide(this, 1)"></button>
                                <button class="fleet-carousel-indicator" onclick="goToFleetSlide(this, 2)"></button>
                            </div>
                        </div>
                        <div class="fleet-badge popular">
                            <span class="badge-text">Popular</span>
                        </div>
                    </div>
                    
                    <!-- Título principal -->
                    <div class="fleet-title">
                        <h3 data-dynamic-title="true" data-default-title="Coaster">Minibús</h3>
                        <p class="fleet-subtitle">Grupos medianos</p>
                    </div>
                    
                    <!-- Capacidad destacada -->
                    <div class="fleet-capacity-highlight">
                        <div class="capacity-main">
                            <span class="capacity-number">30-38</span>
                            <span class="capacity-label">Pasajeros</span>
                        </div>
                        <div class="capacity-visual">
                            @include('components.optimized-image', [
                                'src' => 'unidades/capacidad2.jpg',
                                'alt' => 'Distribución de asientos Minibús',
                                'class' => 'capacity-img',
                                'lazy' => true
                            ])
                        </div>
                    </div>
                    
                    
                    <!-- Marcas disponibles -->
                    <div class="fleet-brands">
                        <h6><i class="fas fa-award text-primary me-2"></i>Marcas Disponibles</h6>
                        <div class="brands-list">
                            <span class="brand-tag">Kamaz</span>
                            <span class="brand-tag">DongFeng</span>
                            <span class="brand-tag">Yutong</span>
                            <span class="brand-tag">Higer</span>
                            <span class="brand-tag">Agrelo</span>
                            <span class="brand-tag">Hyundai</span>
                        </div>
                    </div>
                    
                    <!-- Call to action -->
                    <div class="fleet-cta">
                        <a href="{{ route('contacto') }}" class="btn btn-fleet-primary">
                            <i class="fas fa-calculator me-2"></i>
                            <span>Cotizar Ahora</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="fleet-card-commercial">
                    <!-- Header con carrusel de imágenes -->
                    <div class="fleet-header">
                        <div class="fleet-carousel" data-fleet-type="van">
                            <div class="fleet-carousel-inner">
                                <div class="fleet-carousel-item active">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/minivan.jpg',
                                        'alt' => 'Van VTSA Villarrica Tours - Vista 1',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                                <div class="fleet-carousel-item">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/minivan.jpg',
                                        'alt' => 'Van VTSA Villarrica Tours - Vista 2',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                                <div class="fleet-carousel-item">
                                    @include('components.optimized-image', [
                                        'src' => 'unidades/minivan.jpg',
                                        'alt' => 'Van VTSA Villarrica Tours - Vista 3',
                                        'class' => 'img-fluid',
                                        'lazy' => true
                                    ])
                                </div>
                            </div>
                            <button class="fleet-carousel-control prev" onclick="changeFleetSlide(this, -1)">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="fleet-carousel-control next" onclick="changeFleetSlide(this, 1)">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            <div class="fleet-carousel-indicators">
                                <button class="fleet-carousel-indicator active" onclick="goToFleetSlide(this, 0)"></button>
                                <button class="fleet-carousel-indicator" onclick="goToFleetSlide(this, 1)"></button>
                                <button class="fleet-carousel-indicator" onclick="goToFleetSlide(this, 2)"></button>
                            </div>
                        </div>
                        <div class="fleet-badge compact">
                            <span class="badge-text">Compacto</span>
                        </div>
                    </div>
                    
                    <!-- Título principal -->
                    <div class="fleet-title">
                        <h3>Van</h3>
                        <p class="fleet-subtitle">Grupos pequeños</p>
                    </div>
                    
                    <!-- Capacidad destacada -->
                    <div class="fleet-capacity-highlight">
                        <div class="capacity-main">
                            <span class="capacity-number">14-21</span>
                            <span class="capacity-label">Pasajeros</span>
                        </div>
                        <div class="capacity-visual">
                            @include('components.optimized-image', [
                                'src' => 'unidades/capacidad3.jpg',
                                'alt' => 'Distribución de asientos Van',
                                'class' => 'capacity-img',
                                'lazy' => true
                            ])
                        </div>
                    </div>
                    
                    
                    <!-- Marcas disponibles -->
                    <div class="fleet-brands">
                        <h6><i class="fas fa-award text-primary me-2"></i>Marcas Disponibles</h6>
                        <div class="brands-list">
                            <span class="brand-tag">Fotón</span>
                            <span class="brand-tag">Maxus</span>
                            <span class="brand-tag">Jac</span>
                            <span class="brand-tag">Sprinter</span>
                            <span class="brand-tag">Joylong</span>
                        </div>
                    </div>
                    
                    <!-- Call to action -->
                    <div class="fleet-cta">
                        <a href="{{ route('contacto') }}" class="btn btn-fleet-primary">
                            <i class="fas fa-calculator me-2"></i>
                            <span>Cotizar Ahora</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
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
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-alconsa.png',
                        'alt' => 'Alconsa',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-amp-terminals.png',
                        'alt' => 'AMP Terminals',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-cemex.png',
                        'alt' => 'Cemex',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-fadesa.png',
                        'alt' => 'Fadesa',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-impala.png',
                        'alt' => 'Impala',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-ixm.png',
                        'alt' => 'IXM',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-maersk.png',
                        'alt' => 'Maersk',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-mixercon.png',
                        'alt' => 'Mixercon',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-mra.png',
                        'alt' => 'MRA',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-palcon.png',
                        'alt' => 'Palcon',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-prodac.png',
                        'alt' => 'Prodac',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-qb.png',
                        'alt' => 'QB',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-quimpac.png',
                        'alt' => 'Quimpac',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-rfs.png',
                        'alt' => 'RFS',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-schneider.png',
                        'alt' => 'Schneider',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-stierlift.png',
                        'alt' => 'Stierlift',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-tasa.png',
                        'alt' => 'Tasa',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-tpp.png',
                        'alt' => 'TPP',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-vartini.png',
                        'alt' => 'Vartini',
                        'lazy' => true
                    ])
                </div>
                
                <!-- Duplicar logos para efecto infinito -->
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-alconsa.png',
                        'alt' => 'Alconsa',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-amp-terminals.png',
                        'alt' => 'AMP Terminals',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-cemex.png',
                        'alt' => 'Cemex',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-fadesa.png',
                        'alt' => 'Fadesa',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-impala.png',
                        'alt' => 'Impala',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-ixm.png',
                        'alt' => 'IXM',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-maersk.png',
                        'alt' => 'Maersk',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-mixercon.png',
                        'alt' => 'Mixercon',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-mra.png',
                        'alt' => 'MRA',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-palcon.png',
                        'alt' => 'Palcon',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-prodac.png',
                        'alt' => 'Prodac',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-qb.png',
                        'alt' => 'QB',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-quimpac.png',
                        'alt' => 'Quimpac',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-rfs.png',
                        'alt' => 'RFS',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-schneider.png',
                        'alt' => 'Schneider',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-stierlift.png',
                        'alt' => 'Stierlift',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-tasa.png',
                        'alt' => 'Tasa',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-tpp.png',
                        'alt' => 'TPP',
                        'lazy' => true
                    ])
                </div>
                <div class="client-logo">
                    @include('components.optimized-image', [
                        'src' => 'clientes/logotipo-vartini.png',
                        'alt' => 'Vartini',
                        'lazy' => true
                    ])
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards and Recognition Section -->
<section class="py-5 bg-light awards-section" id="certifications-section">
    <!-- Animated particles background -->
    <div class="awards-particles">
        <div class="award-particle" style="left: 10%; animation-delay: 0s;"></div>
        <div class="award-particle" style="left: 20%; animation-delay: 2s;"></div>
        <div class="award-particle" style="left: 30%; animation-delay: 4s;"></div>
        <div class="award-particle" style="left: 40%; animation-delay: 6s;"></div>
        <div class="award-particle" style="left: 50%; animation-delay: 8s;"></div>
        <div class="award-particle" style="left: 60%; animation-delay: 10s;"></div>
        <div class="award-particle" style="left: 70%; animation-delay: 12s;"></div>
        <div class="award-particle" style="left: 80%; animation-delay: 14s;"></div>
        <div class="award-particle" style="left: 90%; animation-delay: 16s;"></div>
    </div>
    
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title">Premios y Reconocimientos</h2>
                <p class="section-subtitle">Excelencia reconocida por nuestros clientes y socios</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="award-card h-100">
                    <div class="award-shine"></div>
                    <div class="card-body text-center p-5">
                        <div class="award-image-container mb-4">
                            <div class="award-image-wrapper" style="animation-delay: 0s;">
                                @include('components.optimized-image', [
                                    'src' => 'premios/impala.png',
                                    'alt' => 'Premio Impala - Proveedor Destacado',
                                    'class' => 'img-fluid',
                                    'style' => 'max-height: 300px; width: 100%; object-fit: contain;',
                                    'lazy' => true
                                ])
                            </div>
                        </div>
                        <h4 class="award-title">Premio Impala</h4>
                        <p class="card-text text-muted">
                            Reconocimiento como proveedor destacado por nuestro servicio de excelencia y compromiso con la calidad en el transporte corporativo.
                        </p>
                        <div class="mt-3">
                            <span class="award-badge">Proveedor Destacado</span>
                            <span class="award-badge">Excelencia en Servicio</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                <div class="award-card h-100">
                    <div class="award-shine"></div>
                    <div class="card-body text-center p-5">
                        <div class="award-image-container mb-4">
                            <div class="award-image-wrapper" style="animation-delay: 4s;">
                                @include('components.optimized-image', [
                                    'src' => 'premios/schneider.png',
                                    'alt' => 'Premio Schneider Electric - Partner de Confianza',
                                    'class' => 'img-fluid',
                                    'style' => 'max-height: 300px; width: 100%; object-fit: contain;',
                                    'lazy' => true
                                ])
                            </div>
                        </div>
                        <h4 class="award-title">Premio Schneider Electric</h4>
                        <p class="card-text text-muted">
                            Distinción como partner de confianza por nuestra confiabilidad, seguridad y cumplimiento en el transporte de personal especializado.
                        </p>
                        <div class="mt-3">
                            <span class="award-badge">Partner de Confianza</span>
                            <span class="award-badge">Seguridad Certificada</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                <p class="lead text-muted">
                    <i class="fas fa-trophy trophy-icon me-2" style="font-size: 1.5rem;"></i>
                    Estos reconocimientos reflejan nuestro compromiso continuo con la excelencia y la satisfacción de nuestros clientes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">¿Necesitas transporte confiable?</h2>
                <p class="lead mb-4">
                    Contáctanos ahora y recibe una cotización personalizada en menos de 24 horas. 
                    <strong>Sin compromiso, completamente gratis.</strong>
                </p>
                <a href="{{ route('contacto') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-comments me-2"></i>Contactar Ahora
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

        // Funciones para el carrusel de imágenes de flota
        window.changeFleetSlide = function(button, direction) {
            const carousel = button.closest('.fleet-carousel');
            const items = carousel.querySelectorAll('.fleet-carousel-item');
            const indicators = carousel.querySelectorAll('.fleet-carousel-indicator');
            
            let currentIndex = Array.from(items).findIndex(item => item.classList.contains('active'));
            items[currentIndex].classList.remove('active');
            indicators[currentIndex].classList.remove('active');
            
            currentIndex = (currentIndex + direction + items.length) % items.length;
            
            items[currentIndex].classList.add('active');
            indicators[currentIndex].classList.add('active');
            
            // Actualizar título si es dinámico
            updateFleetTitle(carousel, items[currentIndex]);
        };
        
        window.updateFleetTitle = function(carousel, activeItem) {
            const card = carousel.closest('.fleet-card-commercial');
            const titleElement = card.querySelector('h3[data-dynamic-title="true"]');
            if (titleElement && activeItem.dataset.vehicleTitle) {
                titleElement.style.opacity = '0';
                setTimeout(() => {
                    titleElement.textContent = activeItem.dataset.vehicleTitle;
                    titleElement.style.opacity = '1';
                }, 150);
            }
        };

        window.goToFleetSlide = function(indicator, index) {
            const carousel = indicator.closest('.fleet-carousel');
            const items = carousel.querySelectorAll('.fleet-carousel-item');
            const indicators = carousel.querySelectorAll('.fleet-carousel-indicator');
            
            items.forEach((item, i) => {
                item.classList.toggle('active', i === index);
            });
            
            indicators.forEach((ind, i) => {
                ind.classList.toggle('active', i === index);
            });
            
            // Actualizar título si es dinámico
            updateFleetTitle(carousel, items[index]);
        };

        // Carrusel solo manual - sin auto-play para evitar conflictos
    });
</script>
@endsection 