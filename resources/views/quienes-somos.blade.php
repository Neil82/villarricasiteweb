@extends('layouts.app')

@section('title', 'Quienes Somos - Villarrica Tours S.A.')
@section('description', 'Conoce la historia de Villarrica Tours S.A., fundada en 1995 por Don Camilo Paitan Obregón. {{ date("Y") - 1995 }} años de confianza en el transporte de personal y turístico.')
@section('keywords', 'historia villarrica tours, empresa transporte 1995, Camilo Paitan Obregón, trayectoria empresarial transporte, líderes transporte peru, empresa familiar transporte')
@section('og_type', 'website')
@section('og_title', 'Nuestra Historia desde 1995 | Villarrica Tours S.A.')
@section('og_description', 'Conoce la historia de Villarrica Tours S.A., fundada en 1995. {{ date("Y") - 1995 }} años de experiencia, 100+ empresas confían en nosotros. ✓ Líderes del mercado ✓ Historia de éxito')
@section('twitter_title', 'Nuestra Historia desde 1995 | Villarrica Tours S.A.')
@section('twitter_description', '{{ date("Y") - 1995 }} años de experiencia en transporte. Fundada en 1995, 100+ empresas confían en nosotros. ✓ Líderes del mercado')

@section('content')
<!-- Hero Section -->
<section class="hero-section about-hero-commercial" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('{{ asset('images/contacto/flota-profesional.png') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-trust-badge" data-aos="fade-up">
                    <span class="trust-years">Desde 1995</span>
                </div>
                <h1 class="display-3 fw-bold mb-4 text-white hero-title-impact" data-aos="fade-up" data-aos-delay="200">
                    30 Años Construyendo <span class="text-warning">Confianza</span>
                </h1>
                <p class="lead text-white mb-5 hero-subtitle-commercial" data-aos="fade-up" data-aos-delay="400">
                    Más de 100 empresas líderes confían en nosotros para el transporte seguro de su equipo. 
                    <strong>Somos el socio estratégico que necesitas.</strong>
                </p>
                
                <!-- Estadísticas impactantes -->
                <div class="row hero-stats-commercial" data-aos="fade-up" data-aos-delay="600">
                    <div class="col-md-3 col-6 mb-3">
                        <div class="hero-stat-commercial">
                            <div class="hero-stat-number-big about-page-counter" data-count="{{ date('Y') - 1995 }}" data-suffix="+">0+</div>
                            <div class="hero-stat-label-commercial">Años de Experiencia</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="hero-stat-commercial">
                            <div class="hero-stat-number-big about-page-counter" data-count="100" data-suffix="+">0+</div>
                            <div class="hero-stat-label-commercial">Empresas Clientes</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="hero-stat-commercial">
                            <div class="hero-stat-number-big about-page-counter" data-count="120" data-suffix="+">0+</div>
                            <div class="hero-stat-label-commercial">Unidades Modernas</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="hero-stat-commercial">
                            <div class="hero-stat-number-big">24/7</div>
                            <div class="hero-stat-label-commercial">Disponibilidad</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-cta-section" data-aos="fade-up" data-aos-delay="800">
                    <a href="{{ route('contacto') }}" class="btn btn-hero-primary me-3">
                        <i class="fas fa-handshake me-2"></i>
                        <span>Únete a Nuestros Clientes</span>
                    </a>
                    <a href="#historia" class="btn btn-hero-secondary">
                        <i class="fas fa-play me-2"></i>
                        <span>Conoce Nuestra Historia</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.breadcrumbs')

<!-- Historia Section -->
<section class="py-5" id="historia">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="story-commercial-section">
                    <div class="story-badge">
                        <span class="badge-text">Nuestra Historia</span>
                    </div>
                    <h2 class="story-title-commercial">De una visión a ser el <span class="text-primary">líder nacional</span></h2>
                    <p class="story-lead-commercial">
                        En 1995, Don Camilo Paitan Obregón tenía una visión clara: <strong>crear la empresa de transporte más confiable del país.</strong> 
                        Su perseverancia y dedicación sentaron las bases de lo que hoy conoces.
                    </p>
                    <div class="story-highlight-box">
                        <div class="highlight-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="highlight-text">
                            "Hoy, más de 100 empresas líderes confían en nosotros diariamente para el traslado seguro de su personal, 
                            considerándonos su <strong>socio estratégico</strong> para el crecimiento mutuo."
                        </p>
                    </div>
                    
                    <div class="story-cta-section">
                        <a href="{{ route('contacto') }}" class="btn btn-story-primary">
                            <i class="fas fa-rocket me-2"></i>
                            <span>Sé Parte de Esta Historia</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <!-- Timeline visual -->
                <div class="timeline-commercial">
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="timeline-year">1995</div>
                        <div class="timeline-content">
                            <h5>Fundación</h5>
                            <p>Inicio con visión de excelencia</p>
                        </div>
                        <div class="timeline-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="timeline-year">2000</div>
                        <div class="timeline-content">
                            <h5>Expansión Nacional</h5>
                            <p>Presencia en todo el Perú</p>
                        </div>
                        <div class="timeline-icon success">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="timeline-year">2010</div>
                        <div class="timeline-content">
                            <h5>Certificación ISO 9001</h5>
                            <p>Estándares internacionales</p>
                        </div>
                        <div class="timeline-icon warning">
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="timeline-year">2020</div>
                        <div class="timeline-content">
                            <h5>Tecnología GPS</h5>
                            <p>Flota moderna e inteligente</p>
                        </div>
                        <div class="timeline-icon primary">
                            <i class="fas fa-satellite"></i>
                        </div>
                    </div>
                    <div class="timeline-item current" data-aos="fade-up" data-aos-delay="500">
                        <div class="timeline-year">HOY</div>
                        <div class="timeline-content">
                            <h5>Líderes del Mercado</h5>
                            <p>100+ empresas confían en nosotros</p>
                        </div>
                        <div class="timeline-icon current">
                            <i class="fas fa-crown"></i>
                        </div>
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

<!-- Why Choose Us Section -->
<section class="py-5 why-choose-commercial">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="choose-us-badge" data-aos="fade-up">
                    <span class="badge-text">¿Por Qué Nosotros?</span>
                </div>
                <h2 class="section-title-commercial" data-aos="fade-up" data-aos-delay="200">
                    100+ Empresas Líderes Ya <span class="text-primary">Nos Eligieron</span>
                </h2>
                <p class="section-subtitle-commercial" data-aos="fade-up" data-aos-delay="400">
                    Descubre las razones por las que somos el socio estratégico preferido del mercado peruano
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="advantage-card-commercial">
                    <div class="advantage-header">
                        <div class="advantage-icon security">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="advantage-badge premium">
                            <span class="badge-text">Garantizado</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>Máxima Seguridad</h5>
                        <p>30 años sin accidentes graves. Conductores certificados, unidades con SOAT y seguros completos.</p>
                        <div class="advantage-proof">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>ISO 9001 certificado</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="advantage-card-commercial">
                    <div class="advantage-header">
                        <div class="advantage-icon reliability">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="advantage-badge popular">
                            <span class="badge-text">Confiable</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>Puntualidad del 99.8%</h5>
                        <p>Tu equipo llega a tiempo, siempre. Monitoreo GPS en tiempo real y rutas optimizadas.</p>
                        <div class="advantage-proof">
                            <i class="fas fa-satellite text-primary me-2"></i>
                            <span>Tecnología GPS avanzada</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="advantage-card-commercial">
                    <div class="advantage-header">
                        <div class="advantage-icon service">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="advantage-badge service">
                            <span class="badge-text">24/7</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>Atención Total</h5>
                        <p>Soporte disponible las 24 horas. Emergencias, cambios de último minuto, siempre te respaldamos.</p>
                        <div class="advantage-proof">
                            <i class="fas fa-phone-alt text-secondary me-2"></i>
                            <span>Línea directa ejecutiva</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="advantage-card-commercial">
                    <div class="advantage-header">
                        <div class="advantage-icon experience">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="advantage-badge leader">
                            <span class="badge-text">Líderes</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>30 Años de Liderazgo</h5>
                        <p>Experiencia incomparable. Conocemos cada ruta, cada desafío, cada solución en el Perú.</p>
                        <div class="advantage-proof">
                            <i class="fas fa-map-marked-alt text-warning me-2"></i>
                            <span>Cobertura nacional completa</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="advantage-card-commercial">
                    <div class="advantage-header">
                        <div class="advantage-icon fleet">
                            <i class="fas fa-bus"></i>
                        </div>
                        <div class="advantage-badge modern">
                            <span class="badge-text">Moderno</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>Flota Renovada</h5>
                        <p>120+ unidades modernas EURO 4/5. Aire acondicionado, asientos ergonómicos, máximo confort.</p>
                        <div class="advantage-proof">
                            <i class="fas fa-leaf text-success me-2"></i>
                            <span>Eco-friendly certificado</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="advantage-card-commercial">
                    <div class="advantage-header">
                        <div class="advantage-icon partnership">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="advantage-badge strategic">
                            <span class="badge-text">Estratégico</span>
                        </div>
                    </div>
                    <div class="advantage-content">
                        <h5>Socio Estratégico</h5>
                        <p>No solo transportamos, nos convertimos en tu aliado. Planes personalizados para cada empresa.</p>
                        <div class="advantage-proof">
                            <i class="fas fa-chart-line text-info me-2"></i>
                            <span>Crecimiento conjunto garantizado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="why-choose-cta" data-aos="fade-up">
                    <h4 class="cta-title">¿Listo para experimentar la diferencia?</h4>
                    <p class="cta-subtitle">Únete a las 100+ empresas que ya confían en nosotros</p>
                    <a href="{{ route('contacto') }}" class="btn btn-cta-primary me-3">
                        <i class="fas fa-star me-2"></i>
                        <span>Solicitar Cotización VIP</span>
                    </a>
                    <a href="tel:+51567967" class="btn btn-cta-secondary">
                        <i class="fas fa-phone me-2"></i>
                        <span>Llamar Ahora</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quality Service Section -->
<section class="py-5 quality-service-commercial">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="quality-badge" data-aos="fade-up">
                    <span class="badge-text">Excelencia Garantizada</span>
                </div>
                <h2 class="section-title-commercial" data-aos="fade-up" data-aos-delay="200">
                    Servicio de Calidad <span class="text-primary">Superior</span>
                </h2>
                <p class="section-subtitle-commercial" data-aos="fade-up" data-aos-delay="400">
                    La seguridad de tu equipo es nuestra prioridad número uno
                </p>
            </div>
        </div>
        
        <!-- Estadísticas de calidad -->
        <div class="row mb-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="quality-stat-card">
                    <div class="quality-stat-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="quality-stat-number">0</div>
                    <div class="quality-stat-label">Accidentes Graves</div>
                    <div class="quality-stat-detail">en 30 años</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="quality-stat-card">
                    <div class="quality-stat-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="quality-stat-number">100%</div>
                    <div class="quality-stat-label">Conductores Certificados</div>
                    <div class="quality-stat-detail">capacitación continua</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="quality-stat-card">
                    <div class="quality-stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="quality-stat-number">99.8%</div>
                    <div class="quality-stat-label">Puntualidad</div>
                    <div class="quality-stat-detail">en todos los servicios</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="quality-stat-card">
                    <div class="quality-stat-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <div class="quality-stat-number">365</div>
                    <div class="quality-stat-label">Días al Año</div>
                    <div class="quality-stat-detail">disponibilidad total</div>
                </div>
            </div>
        </div>
        
        <!-- Certificaciones y licencias -->
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <div class="certification-card-commercial">
                    <div class="certification-header">
                        <div class="certification-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>Certificaciones de Elite</h4>
                        <p class="certification-subtitle">Nuestros conductores son profesionales altamente calificados</p>
                    </div>
                    <div class="certification-grid">
                        <div class="certification-item">
                            <div class="cert-icon-wrapper">
                                <i class="fas fa-medkit"></i>
                            </div>
                            <div class="cert-content">
                                <h6>Primeros Auxilios</h6>
                                <small>Respuesta inmediata ante emergencias</small>
                            </div>
                        </div>
                        <div class="certification-item">
                            <div class="cert-icon-wrapper">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="cert-content">
                                <h6>Manejo Defensivo</h6>
                                <small>Técnicas avanzadas de conducción</small>
                            </div>
                        </div>
                        <div class="certification-item">
                            <div class="cert-icon-wrapper">
                                <i class="fas fa-fire-extinguisher"></i>
                            </div>
                            <div class="cert-content">
                                <h6>Uso de Extintores</h6>
                                <small>Prevención y control de incendios</small>
                            </div>
                        </div>
                        <div class="certification-item">
                            <div class="cert-icon-wrapper">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="cert-content">
                                <h6>Riesgos Psicosociales</h6>
                                <small>Bienestar mental y emocional</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="license-card-commercial">
                    <div class="license-header">
                        <div class="license-icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <h4>Licencias Profesionales</h4>
                        <p class="license-subtitle">Autorizados para operar vehículos de gran capacidad</p>
                    </div>
                    <div class="license-types">
                        <div class="license-type-card">
                            <div class="license-badge">AIIIC</div>
                            <div class="license-info">
                                <h5>Ómnibus</h5>
                                <p>Vehículos de 42-53 pasajeros</p>
                                <div class="license-features">
                                    <span><i class="fas fa-check-circle text-success me-1"></i>Rutas nacionales</span>
                                    <span><i class="fas fa-check-circle text-success me-1"></i>Viajes largos</span>
                                </div>
                            </div>
                        </div>
                        <div class="license-type-card">
                            <div class="license-badge">AIIIA</div>
                            <div class="license-info">
                                <h5>Minibús</h5>
                                <p>Vehículos de 14-38 pasajeros</p>
                                <div class="license-features">
                                    <span><i class="fas fa-check-circle text-success me-1"></i>Rutas urbanas</span>
                                    <span><i class="fas fa-check-circle text-success me-1"></i>Grupos medianos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="training-note">
                        <i class="fas fa-info-circle text-primary me-2"></i>
                        <span>Capacitación anual obligatoria en seguridad, salud ocupacional y medio ambiente</span>
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

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Función para animar los contadores de la página "Quienes Somos"
    function animateAboutPageCounters() {
        const aboutPageCounters = document.querySelectorAll('.about-page-counter');
        
        aboutPageCounters.forEach(counter => {
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
    const statsNumbers = document.querySelectorAll('.about-page-counter');
    if (statsNumbers.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateAboutPageCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        // Observar el primer contador para activar la animación
        observer.observe(statsNumbers[0]);
    }
});
</script>
@endsection 