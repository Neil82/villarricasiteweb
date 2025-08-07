@extends('layouts.app')

@section('title', 'Servicios - Villarrica Tours S.A.')
@section('description', 'Transporte de personal y turístico a nivel nacional. Servicios especializados con {{ date("Y") - 1995 }} años de experiencia en el rubro.')
@section('keywords', 'transporte personal empresas, transporte turístico nacional, servicios transporte especializado, alquiler buses peru, transporte empresarial seguro, buses modernos GPS')
@section('og_type', 'service')
@section('og_title', 'Servicios de Transporte Especializado | Villarrica Tours S.A.')
@section('og_description', 'Transporte de personal y turístico con {{ date("Y") - 1995 }} años de experiencia. ✓ GPS tiempo real ✓ Conductores certificados ✓ Flota moderna')
@section('twitter_title', 'Servicios de Transporte Especializado | Villarrica Tours S.A.')
@section('twitter_description', 'Transporte especializado con {{ date("Y") - 1995 }} años de experiencia. ✓ GPS tiempo real ✓ Conductores certificados ✓ Flota moderna')

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
<section class="py-5 service-detail-commercial">
    <div class="container">
        <div class="service-header-commercial text-center mb-5">
            <div class="service-badge-main" data-aos="fade-up">
                <span class="badge-text">Servicio Premium</span>
            </div>
            <h2 class="service-title-commercial" data-aos="fade-up" data-aos-delay="200">
                Transporte de Personal
            </h2>
            <p class="service-subtitle-commercial text-primary" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-globe-americas me-2"></i>a nivel nacional
            </p>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="service-image-showcase">
                    <div class="service-slider-container">
                        <div class="service-slider-item active">
                            @include('components.optimized-image', [
                                'src' => 'vtsa/3buses_portada.png',
                                'alt' => 'Transporte de Personal - Flota Principal',
                                'class' => 'img-fluid rounded-20',
                                'lazy' => true
                            ])
                        </div>
                        <div class="service-slider-item">
                            @include('components.optimized-image', [
                                'src' => 'vtsa/corporativo2.jpg',
                                'alt' => 'Transporte de Personal - Servicio Corporativo',
                                'class' => 'img-fluid rounded-20',
                                'lazy' => true
                            ])
                        </div>
                        <div class="service-slider-item">
                            @include('components.optimized-image', [
                                'src' => 'vtsa/corporativo1.jpg',
                                'alt' => 'Transporte de Personal - Ejecutivo',
                                'class' => 'img-fluid rounded-20',
                                'lazy' => true
                            ])
                        </div>
                        <div class="service-slider-item">
                            @include('components.optimized-image', [
                                'src' => 'unidades/flotacompleta.jpg',
                                'alt' => 'Transporte de Personal - Empresarial',
                                'class' => 'img-fluid rounded-20',
                                'lazy' => true
                            ])
                        </div>
                    </div>
                    <div class="service-image-overlay">
                        <div class="overlay-content">
                            <h4>Flota Especializada</h4>
                            <p>Para empresas con máxima seguridad y confort</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="service-info-card">
                    <div class="experience-badge-floating">
                        <span class="experience-number">{{ date("Y") - 1995 }}</span>
                        <span class="experience-text">Años</span>
                    </div>
                    
                    <h3 class="service-card-title">El transporte que tu empresa necesita</h3>
                    <p class="service-description">
                        Villarrica Tours es una empresa líder dedicada al servicio de transporte de personal 
                        con {{ date("Y") - 1995 }} años de experiencia garantizando la seguridad y puntualidad 
                        que tu equipo merece.
                    </p>
                    
                    <div class="service-features-grid">
                        <div class="feature-item-modern">
                            <i class="fas fa-users"></i>
                            <span>Personal Ejecutivo</span>
                        </div>
                        <div class="feature-item-modern">
                            <i class="fas fa-plane"></i>
                            <span>Traslados Aeropuerto</span>
                        </div>
                        <div class="feature-item-modern">
                            <i class="fas fa-map-marked"></i>
                            <span>Cobertura Nacional</span>
                        </div>
                        <div class="feature-item-modern">
                            <i class="fas fa-crown"></i>
                            <span>Servicio VIP</span>
                        </div>
                    </div>
                    
                    <div class="service-cta-section">
                        <a href="{{ route('contacto') }}" class="btn btn-service-gradient">
                            <i class="fas fa-calculator me-2"></i>
                            <span>Solicitar Cotización</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Características del Servicio -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-center mb-4 section-subtitle-commercial">¿Por qué elegir nuestro servicio?</h3>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card-commercial">
                    <div class="feature-icon-wrap">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Seguridad Certificada</h5>
                    <p>Conductores con licencias AIIIC y AIIIA, capacitados continuamente</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card-commercial">
                    <div class="feature-icon-wrap">
                        <i class="fas fa-satellite"></i>
                    </div>
                    <h5>GPS en Tiempo Real</h5>
                    <p>Sistema GPS-Daegy Electronics para monitoreo constante de rutas</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card-commercial">
                    <div class="feature-icon-wrap">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h5>Máximo Confort</h5>
                    <p>Unidades con aire acondicionado y asientos ergonómicos</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card-commercial">
                    <div class="feature-icon-wrap">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5>Atención 24/7</h5>
                    <p>Disponibilidad total para emergencias y cambios de último minuto</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transporte Turístico Section -->
<section class="py-5 bg-light service-detail-commercial">
    <div class="container">
        <div class="service-header-commercial text-center mb-5">
            <div class="service-badge-main touristic" data-aos="fade-up">
                <span class="badge-text">Experiencias Únicas</span>
            </div>
            <h2 class="service-title-commercial" data-aos="fade-up" data-aos-delay="200">
                Transporte Turístico
            </h2>
            <p class="service-subtitle-commercial text-primary" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-globe-americas me-2"></i>a nivel nacional
            </p>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-5 order-lg-1" data-aos="fade-right">
                <div class="service-info-card touristic">
                    <div class="authorization-badge">
                        <i class="fas fa-certificate"></i>
                        <span>R.D. N°4534-2015-MTC/15</span>
                    </div>
                    
                    <h3 class="service-card-title">Descubre el Perú con nosotros</h3>
                    <p class="service-description">
                        Autorizados por el MTC y la Municipalidad de Lima, ofrecemos servicios turísticos 
                        con la mejor flota: ómnibus, minibuses, vans y minivans para cada necesidad.
                    </p>
                    
                    <div class="service-types-showcase">
                        <div class="type-item">
                            <i class="fas fa-map-marked-alt"></i>
                            <h6>Todo el Perú</h6>
                            <p>Rutas nacionales</p>
                        </div>
                        <div class="type-item">
                            <i class="fas fa-hiking"></i>
                            <h6>Excursiones</h6>
                            <p>Viajes grupales</p>
                        </div>
                        <div class="type-item">
                            <i class="fas fa-suitcase"></i>
                            <h6>Paquetes</h6>
                            <p>Todo incluido</p>
                        </div>
                        <div class="type-item">
                            <i class="fas fa-city"></i>
                            <h6>City Tours</h6>
                            <p>Lima y museos</p>
                        </div>
                    </div>
                    
                    <div class="service-cta-section">
                        <a href="{{ route('contacto') }}" class="btn btn-service-gradient touristic">
                            <i class="fas fa-route me-2"></i>
                            <span>Planifica tu Viaje</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-lg-2" data-aos="fade-left">
                <div class="service-image-showcase">
                    <div class="service-slider-container">
                        <div class="service-slider-item active">
                            @include('components.optimized-image', [
                                'src' => 'vtsa/selva_bus.jpg',
                                'alt' => 'Transporte Turístico - Aventura en la Selva',
                                'class' => 'img-fluid rounded-20',
                                'lazy' => true
                            ])
                        </div>
                        <div class="service-slider-item">
                            @include('components.optimized-image', [
                                'src' => 'vtsa/playa_coaster.jpg',
                                'alt' => 'Transporte Turístico - Turismo de Playa',
                                'class' => 'img-fluid rounded-20',
                                'lazy' => true
                            ])
                        </div>
                        <div class="service-slider-item">
                            @include('components.optimized-image', [
                                'src' => 'vtsa/ica_bus.jpg',
                                'alt' => 'Transporte Turístico - Destinos de Ica',
                                'class' => 'img-fluid rounded-20',
                                'lazy' => true
                            ])
                        </div>
                        <div class="service-slider-item">
                            @include('components.optimized-image', [
                                'src' => 'vtsa/sierra.png',
                                'alt' => 'Transporte Turístico - Turismo de Sierra',
                                'class' => 'img-fluid rounded-20',
                                'lazy' => true
                            ])
                        </div>
                    </div>
                    <div class="service-image-overlay touristic">
                        <div class="overlay-content">
                            <h4>Viaja con Estilo</h4>
                            <p>Unidades premium para experiencias inolvidables</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tipos de Turismo -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-center mb-4 section-subtitle-commercial">Experiencias turísticas para todos</h3>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tourism-type-card">
                    <div class="tourism-icon adventure">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h5>Aventura</h5>
                    <p>Trekking, montañismo y deportes extremos</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tourism-type-card">
                    <div class="tourism-icon corporate">
                        <i class="fas fa-building"></i>
                    </div>
                    <h5>Corporativo</h5>
                    <p>Viajes de incentivo y team building</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tourism-type-card">
                    <div class="tourism-icon cultural">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h5>Cultural</h5>
                    <p>Historia, arqueología y tradiciones</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="tourism-type-card">
                    <div class="tourism-icon gastronomic">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h5>Gastronómico</h5>
                    <p>Rutas culinarias y experiencias gourmet</p>
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
                        <i class="fas fa-bus"></i>
                    </div>
                    <h5>Flota Diversa</h5>
                    <p class="text-muted">Ómnibus, minibuses y vans para grupos de cualquier tamaño</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h5>Cobertura Nacional</h5>
                    <p class="text-muted">Servicio en todo el Perú con rutas optimizadas y seguras</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h5>Servicio Personalizado</h5>
                    <p class="text-muted">Soluciones a medida según las necesidades de cada empresa</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="service-icon">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <h5>Máximo Confort</h5>
                    <p class="text-muted">Aire acondicionado, asientos ergonómicos y ambiente agradable</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Competitive Advantage Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Nuestra Ventaja Competitiva</h2>
                <p class="section-subtitle">Lo que nos diferencia y por qué elegir Villarrica Tours</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="advantage-card">
                    <div class="advantage-header">
                        <div class="advantage-icon certified">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="advantage-badge">
                            <span class="badge-text">Certificado</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>Estándares Internacionales</h5>
                        <p class="text-muted">Cumplimos con certificaciones ISO 9001 y homologaciones oficiales que garantizan la máxima calidad en nuestros servicios.</p>
                        <div class="advantage-benefit">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Garantía de Calidad</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="advantage-card">
                    <div class="advantage-header">
                        <div class="advantage-icon experience">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="advantage-badge popular">
                            <span class="badge-text">Confianza</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>100+ Clientes Corporativos</h5>
                        <p class="text-muted">Empresas líderes confían en nosotros como socio estratégico para el transporte seguro de su personal.</p>
                        <div class="advantage-benefit">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Relaciones a Largo Plazo</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="advantage-card">
                    <div class="advantage-header">
                        <div class="advantage-icon technology">
                            <i class="fas fa-satellite"></i>
                        </div>
                        <div class="advantage-badge tech">
                            <span class="badge-text">Tecnología</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>Tecnología de Punta</h5>
                        <p class="text-muted">Flota moderna con GPS en tiempo real, unidades EURO 4/5 y equipamiento de última generación.</p>
                        <div class="advantage-benefit">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>Control Total</span>
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