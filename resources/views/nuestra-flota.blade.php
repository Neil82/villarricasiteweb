@extends('layouts.app')

@section('title', 'Nuestra Flota - Villarrica Tours S.A.')
@section('description', 'Flota moderna de ómnibus, minibús y vans con motores EURO 4 y EURO 5. Seguridad, comodidad y tecnología GPS en todas nuestras unidades.')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">
                    Nuestra Flota
                </h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="200">
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
                        <img src="{{ asset('images/vtsa/3_buses.png') }}" alt="Minibús VTSA Villarrica Tours" class="img-fluid rounded">
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
                        <img src="{{ asset('images/vtsa/bus_solo.png') }}" alt="Van VTSA Villarrica Tours" class="img-fluid rounded">
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
                <h2 class="section-title">Equipamiento de las Unidades</h2>
                <p class="section-subtitle">Tecnología y comodidad en cada viaje</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5 class="card-title">Seguridad y Confort</h5>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2">
                                <i class="fas fa-satellite text-primary me-2"></i>
                                Sistema de Rastreo Satelital – GPS
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-snowflake text-primary me-2"></i>
                                Aire Acondicionado
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-user-shield text-primary me-2"></i>
                                Cinturones de seguridad en cada asiento
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-chair text-primary me-2"></i>
                                Asientos reclinables y ergonómicos
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h5 class="card-title">Equipos de Audio</h5>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2">
                                <i class="fas fa-radio text-primary me-2"></i>
                                Radio
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-tv text-primary me-2"></i>
                                Televisor
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-compact-disc text-primary me-2"></i>
                                DVD
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h5 class="card-title">Herramientas de Auxilio</h5>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2">
                                <i class="fas fa-car text-primary me-2"></i>
                                Gata Hidráulica
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-wrench text-primary me-2"></i>
                                Llave de rueda
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-tire text-primary me-2"></i>
                                Llanta de repuesto
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-fire-extinguisher text-primary me-2"></i>
                                Extintor
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-triangle text-primary me-2"></i>
                                Triángulo o conos de seguridad
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-first-aid text-primary me-2"></i>
                                Botiquín
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100">
                    <div class="card-body text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h5 class="card-title">Navegación</h5>
                        <ul class="list-unstyled text-start">
                            <li class="mb-2">
                                <i class="fas fa-satellite text-primary me-2"></i>
                                GPS en tiempo real
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-route text-primary me-2"></i>
                                Rastreo satelital
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-mobile-alt text-primary me-2"></i>
                                Comunicación constante
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Legal Obligations Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Obligaciones Legales</h2>
                <p class="section-subtitle">Cumplimos con todas las normativas vigentes</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h4 class="text-primary mb-3">Seguros en las Unidades:</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-shield-alt text-success me-2"></i>
                                Seguro Obligatorio ante Accidentes de Tránsito (SOAT)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-shield-alt text-success me-2"></i>
                                Pólizas de Seguro a Todo Riesgo
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-shield-alt text-success me-2"></i>
                                Pólizas de Seguro de Responsabilidad Civil
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h4 class="text-primary mb-3">Seguros al Personal:</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-user-shield text-success me-2"></i>
                                Seguro Complementario de Trabajos de Riesgo (SCTR)
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-user-shield text-success me-2"></i>
                                Póliza de Seguro Vida Ley
                            </li>
                        </ul>
                        <h5 class="text-primary mt-4 mb-3">Beneficios del Personal:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="fas fa-file-invoice text-primary me-2"></i>
                                Pagos de SUNAT: PDT Mensual – Renta Anual
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-heartbeat text-primary me-2"></i>
                                Pago ESSALUD
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-piggy-bank text-primary me-2"></i>
                                Sistema Nacional de Pensiones y AFP
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-users text-primary me-2"></i>
                                Personal en planilla
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Maintenance Section -->
<section class="py-5 bg-light">
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