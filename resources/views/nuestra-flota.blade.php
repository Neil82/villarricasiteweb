@extends('layouts.app')

@section('title', 'Nuestra Flota - Villarrica Tours S.A.')
@section('description', 'Flota moderna de ómnibus, minibús y vans con motores EURO 4 y EURO 5. Seguridad, comodidad y tecnología GPS en todas nuestras unidades.')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4 text-white" data-aos="fade-up">
                    Nuestra Flota
                </h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="200">
                    Unidades modernas con motores EURO 4 y EURO 5 para el mejor cuidado del medio ambiente. 
                    Tecnología de vanguardia y seguridad garantizada.
                </p>
            </div>
        </div>
    </div>
</section>

@include('partials.breadcrumbs')

<!-- Fleet Overview Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Flota Moderna y Tecnológica</h2>
                <p class="lead mb-4">
                    Villarrica Tours S.A, cuenta con una moderna flota de unidades entre Ómnibus, Minibús y Van 
                    con motores EURO 4 y EURO 5 para el mejor cuidado del medio ambiente, este sistema permite 
                    la reducción de los gases tóxicos como el monóxido de carbono en un 80%.
                </p>
                <p class="mb-4">
                    Porque nos preocupamos en la salud de nuestros clientes y en el cuidado del medio ambiente, 
                    por eso y muchas razones más Villarrica Tours S.A es considerada como una de las mejores 
                    empresas en el rubro de transporte de personal porque brinda un servicio de calidad siendo 
                    considerados como socios estratégicos.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Fleet Types Section -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Tipos de Vehículos</h2>
                <p class="section-subtitle">Diferentes opciones para satisfacer todas tus necesidades</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="fleet-card-commercial">
                    <!-- Header con imagen -->
                    <div class="fleet-header">
                        <img src="{{ asset('images/vtsa/bus.png') }}" alt="Ómnibus VTSA Villarrica Tours" class="img-fluid rounded">
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
                            <img src="{{ asset('images/unidades/capacidad1.jpg') }}" alt="Distribución de asientos Ómnibus" class="capacity-img">
                        </div>
                    </div>
                    
                    <!-- Información técnica -->
                    <div class="fleet-specs">
                        <div class="spec-item">
                            <i class="fas fa-gas-pump text-primary"></i>
                            <span class="spec-label">Combustible:</span>
                            <span class="spec-value">Diesel</span>
                        </div>
                    </div>
                    
                    <!-- Marcas disponibles -->
                    <div class="fleet-brands">
                        <h6><i class="fas fa-award text-primary me-2"></i>Marcas Disponibles</h6>
                        <div class="brands-list">
                            <span class="brand-tag">Hyundai</span>
                            <span class="brand-tag">Mercedes Benz</span>
                            <span class="brand-tag">Higer</span>
                            <span class="brand-tag">Iveco</span>
                            <span class="brand-tag">Golden Dragon</span>
                            <span class="brand-tag">+4 más</span>
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
                    <!-- Header con imagen -->
                    <div class="fleet-header">
                        <img src="{{ asset('images/unidades/Midvan_hourdorade.jpg') }}" alt="Minibús VTSA Villarrica Tours" class="img-fluid rounded">
                        <div class="fleet-badge popular">
                            <span class="badge-text">Popular</span>
                        </div>
                    </div>
                    
                    <!-- Título principal -->
                    <div class="fleet-title">
                        <h3>Minibús</h3>
                        <p class="fleet-subtitle">Ideal para equipos</p>
                    </div>
                    
                    <!-- Capacidad destacada -->
                    <div class="fleet-capacity-highlight">
                        <div class="capacity-main">
                            <span class="capacity-number">30-38</span>
                            <span class="capacity-label">Pasajeros</span>
                        </div>
                        <div class="capacity-visual">
                            <img src="{{ asset('images/unidades/capacidad2.jpg') }}" alt="Distribución de asientos Minibús" class="capacity-img">
                        </div>
                    </div>
                    
                    <!-- Información técnica -->
                    <div class="fleet-specs">
                        <div class="spec-item">
                            <i class="fas fa-gas-pump text-primary"></i>
                            <span class="spec-label">Combustible:</span>
                            <span class="spec-value">Diesel 2</span>
                        </div>
                    </div>
                    
                    <!-- Marcas disponibles -->
                    <div class="fleet-brands">
                        <h6><i class="fas fa-award text-primary me-2"></i>Marcas Disponibles</h6>
                        <div class="brands-list">
                            <span class="brand-tag">Toyota</span>
                            <span class="brand-tag">Hyundai</span>
                            <span class="brand-tag">Higer</span>
                            <span class="brand-tag">Marco Polo</span>
                            <span class="brand-tag">Mercedes Benz</span>
                            <span class="brand-tag">+2 más</span>
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
                    <!-- Header con imagen -->
                    <div class="fleet-header">
                        <img src="{{ asset('images/unidades/minivan.jpg') }}" alt="Van VTSA Villarrica Tours" class="img-fluid rounded">
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
                            <img src="{{ asset('images/unidades/capacidad3.jpg') }}" alt="Distribución de asientos Van" class="capacity-img">
                        </div>
                    </div>
                    
                    <!-- Información técnica -->
                    <div class="fleet-specs">
                        <div class="spec-item">
                            <i class="fas fa-gas-pump text-primary"></i>
                            <span class="spec-label">Combustible:</span>
                            <span class="spec-value">Diesel 2</span>
                        </div>
                    </div>
                    
                    <!-- Marcas disponibles -->
                    <div class="fleet-brands">
                        <h6><i class="fas fa-award text-primary me-2"></i>Marcas Disponibles</h6>
                        <div class="brands-list">
                            <span class="brand-tag">Toyota Hiace</span>
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
    </div>
</section>

<!-- Equipment Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Equipamiento Premium</h2>
                <p class="section-subtitle">Tecnología de última generación para tu máxima comodidad</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="equipment-card-commercial">
                    <div class="equipment-header">
                        <div class="equipment-icon security">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="equipment-badge premium">
                            <span class="badge-text">Premium</span>
                        </div>
                    </div>
                    <div class="equipment-content">
                        <h5>Seguridad y Confort</h5>
                        <div class="equipment-features">
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-satellite"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Sistema de Rastreo Satelital</strong>
                                    <small>GPS en tiempo real</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-snowflake"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Aire Acondicionado</strong>
                                    <small>Climatización total</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Cinturones de Seguridad</strong>
                                    <small>En cada asiento</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-chair"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Asientos Ergonómicos</strong>
                                    <small>Reclinables y cómodos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="equipment-card-commercial">
                    <div class="equipment-header">
                        <div class="equipment-icon entertainment">
                            <i class="fas fa-music"></i>
                        </div>
                        <div class="equipment-badge standard">
                            <span class="badge-text">Incluido</span>
                        </div>
                    </div>
                    <div class="equipment-content">
                        <h5>Equipos de Audio</h5>
                        <div class="equipment-features">
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-radio"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Radio</strong>
                                    <small>AM/FM estéreo</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-tv"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Televisor</strong>
                                    <small>Pantalla LED</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-compact-disc"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>DVD</strong>
                                    <small>Reproductor multimedia</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="equipment-card-commercial">
                    <div class="equipment-header">
                        <div class="equipment-icon tools">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="equipment-badge safety">
                            <span class="badge-text">Seguridad</span>
                        </div>
                    </div>
                    <div class="equipment-content">
                        <h5>Herramientas de Auxilio</h5>
                        <div class="equipment-features">
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-car"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Gata Hidráulica</strong>
                                    <small>Sistema profesional</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-wrench"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Llave de Rueda</strong>
                                    <small>Kit completo</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-fire-extinguisher"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Extintor</strong>
                                    <small>Certificado vigente</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-first-aid"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Botiquín</strong>
                                    <small>Equipado completo</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="equipment-card-commercial">
                    <div class="equipment-header">
                        <div class="equipment-icon navigation">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="equipment-badge tech">
                            <span class="badge-text">Tech</span>
                        </div>
                    </div>
                    <div class="equipment-content">
                        <h5>Navegación</h5>
                        <div class="equipment-features">
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-satellite"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>GPS en Tiempo Real</strong>
                                    <small>Ubicación exacta</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-route"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Rastreo Satelital</strong>
                                    <small>Monitoreo 24/7</small>
                                </div>
                            </div>
                            <div class="equipment-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="feature-text">
                                    <strong>Comunicación</strong>
                                    <small>Contacto constante</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Legal Obligations Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Respaldo Legal Total</h2>
                <p class="section-subtitle">Protección completa y tranquilidad garantizada</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="legal-compliance-card">
                    <div class="compliance-header">
                        <div class="compliance-icon vehicle-insurance">
                            <i class="fas fa-bus"></i>
                        </div>
                        <div class="compliance-badge certified">
                            <span class="badge-text">Certificado</span>
                        </div>
                    </div>
                    <div class="compliance-content">
                        <h4>Seguros en las Unidades</h4>
                        <p class="compliance-description">Protección total para nuestras unidades y pasajeros</p>
                        <div class="compliance-features">
                            <div class="feature-item">
                                <i class="fas fa-shield-alt text-success"></i>
                                <div class="feature-info">
                                    <h6>SOAT Vigente</h6>
                                    <small>Seguro Obligatorio ante Accidentes</small>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-umbrella text-success"></i>
                                <div class="feature-info">
                                    <h6>Seguro Todo Riesgo</h6>
                                    <small>Cobertura completa de la unidad</small>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-handshake text-success"></i>
                                <div class="feature-info">
                                    <h6>Responsabilidad Civil</h6>
                                    <small>Protección ante terceros</small>
                                </div>
                            </div>
                        </div>
                        <div class="compliance-guarantee">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span>100% Asegurado</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="legal-compliance-card">
                    <div class="compliance-header">
                        <div class="compliance-icon personnel-benefits">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="compliance-badge premium">
                            <span class="badge-text">Premium</span>
                        </div>
                    </div>
                    <div class="compliance-content">
                        <h4>Personal & Beneficios</h4>
                        <p class="compliance-description">Conductores profesionales con todos los beneficios</p>
                        <div class="compliance-features">
                            <div class="feature-item">
                                <i class="fas fa-user-shield text-primary"></i>
                                <div class="feature-info">
                                    <h6>Seguro SCTR</h6>
                                    <small>Cobertura de Trabajos de Riesgo</small>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-heartbeat text-primary"></i>
                                <div class="feature-info">
                                    <h6>ESSALUD + Vida Ley</h6>
                                    <small>Atención médica completa</small>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-file-invoice text-primary"></i>
                                <div class="feature-info">
                                    <h6>Personal en Planilla</h6>
                                    <small>SUNAT + AFP + Pensiones</small>
                                </div>
                            </div>
                        </div>
                        <div class="compliance-guarantee">
                            <i class="fas fa-award text-primary me-2"></i>
                            <span>Personal Certificado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Trust Message -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="compliance-trust-message" data-aos="fade-up">
                    <div class="trust-message-content">
                        <div class="trust-message-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="trust-message-text">
                            <h4>Todo este respaldo legal nos convierte en tu socio más confiable</h4>
                            <p>Con {{ date('Y') - 1995 }}+ años de experiencia, 100+ clientes satisfechos y una flota de 75+ unidades completamente aseguradas, tienes la garantía de que tu transporte está en las mejores manos.</p>
                        </div>
                        <div class="trust-message-cta">
                            <a href="{{ route('contacto') }}" class="btn btn-trust-cta">
                                <i class="fas fa-handshake me-2"></i>
                                <span>Únete a Nuestros Clientes</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Maintenance Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Control de Calidad y Mantenimiento</h2>
                <p class="section-subtitle">Procesos rigurosos para garantizar la excelencia operativa</p>
            </div>
        </div>
        
        <!-- Galería de Fotos de Revisión -->
        <div class="row mb-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/revision-1.jpg') }}" alt="Revisión Técnica 1" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">Inspección Externa</h6>
                        <p class="card-text small">Control de carrocería y sistemas externos</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/revision-2.jpg') }}" alt="Revisión Técnica 2" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">Revisión de Motor</h6>
                        <p class="card-text small">Verificación de sistemas mecánicos</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/revision-3.jpg') }}" alt="Revisión Técnica 3" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">Control Interior</h6>
                        <p class="card-text small">Inspección de asientos y equipamiento</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/revision-4.jpg') }}" alt="Revisión Técnica 4" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">Sistemas de Seguridad</h6>
                        <p class="card-text small">Verificación de equipos de emergencia</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <h2 class="section-title text-start">Check List de Pre Uso</h2>
                <p class="mb-4">
                    Todos nuestros conductores cumplen diariamente con la realización del CHECK LIST DE PRE USO 
                    para verificar la condición actual de sus vehículos, permitiendo reducir los riesgos para 
                    realizar el servicio sin novedad.
                </p>
                <p class="mb-4">
                    Estos controles son verificados por las supervisiones inopinadas y además de ello, se realiza 
                    el seguimiento semanal de la entrega del check list por parte de los conductores al área de operaciones.
                </p>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <h2 class="section-title text-start">Mantenimiento Preventivo</h2>
                <p class="mb-4">
                    Uno de los aspectos más importantes para incrementar la vida útil de los vehículos es el 
                    Mantenimiento Preventivo, el cual tiene como objetivos:
                </p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <strong>Garantizar la seguridad</strong> de los usuarios cumpliendo con las medidas de 
                        seguridad que son establecidas para minimizar los riesgos propios de cualquier actividad laboral.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <strong>Mantener nuestras unidades 100% operativas</strong>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <strong>Optimizar la calidad</strong> en nuestros servicios.
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <strong>Mejorar la productividad</strong> de nuestras unidades
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Galería de Nuestras Unidades</h2>
                <p class="section-subtitle">Conoce nuestra flota moderna y bien equipada</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/galeria-4-1030x687.jpg') }}" alt="Unidad Villarrica Tours" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Unidad Moderna</h5>
                        <p class="card-text">Equipada con tecnología de vanguardia y máxima comodidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/galeria-5-1030x687.jpg') }}" alt="Interior Unidad" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Interior Confortable</h5>
                        <p class="card-text">Asientos ergonómicos y aire acondicionado para tu comodidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/galeria-6-1030x687.jpg') }}" alt="Flota Villarrica" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Flota Completa</h5>
                        <p class="card-text">Diferentes tamaños para satisfacer todas tus necesidades.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/galeria-7-1030x687.jpg') }}" alt="Servicio Premium" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Servicio Premium</h5>
                        <p class="card-text">Atención personalizada y profesional en cada viaje.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/galeria-9-1030x687.jpg') }}" alt="Tecnología GPS" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Tecnología GPS</h5>
                        <p class="card-text">Rastreo en tiempo real para mayor seguridad y control.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card gallery-card">
                    <img src="{{ asset('images/unidades/galeria-10-1030x687.jpg') }}" alt="Mantenimiento" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Mantenimiento Regular</h5>
                        <p class="card-text">Inspecciones constantes para garantizar la seguridad.</p>
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
    // Función para animar los contadores de la flota
    function animateFleetCounters() {
        const fleetCounters = document.querySelectorAll('.fleet-counter');
        
        fleetCounters.forEach(counter => {
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
    const statsSection = document.querySelector('.about-stats-commercial');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateFleetCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(statsSection);
    }
});
</script>
@endsection 