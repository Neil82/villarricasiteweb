@extends('layouts.app')

@section('title', 'Contacto - Villarrica Tours S.A.')
@section('description', 'Contáctanos para solicitar cotizaciones de transporte de personal y turístico. Atención 24/7 en todo el Perú.')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4 text-white" data-aos="fade-up">
                    Solicita tu Cotización
                </h1>
                <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="200">
                    Obtén una cotización personalizada en menos de 24 horas. {{ date("Y") - 1995 }} años de experiencia nos respaldan.
                </p>
                <div class="hero-benefits" data-aos="fade-up" data-aos-delay="300">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <div class="hero-benefit-item">
                                <i class="fas fa-clock me-2"></i>
                                <span>Respuesta en 24hrs</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="hero-benefit-item">
                                <i class="fas fa-shield-alt me-2"></i>
                                <span>Sin Compromiso</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="hero-benefit-item">
                                <i class="fas fa-phone me-2"></i>
                                <span>Atención 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.breadcrumbs')

<!-- Contact Information Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Múltiples Formas de Contactarnos</h2>
                <p class="section-subtitle">Elige la opción que más te convenga para recibir atención inmediata</p>
            </div>
        </div>
        
        <div class="row">
            <!-- Contact Cards -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-method-card phone-card">
                    <div class="contact-method-header">
                        <div class="contact-method-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-method-badge urgent">
                            <span class="badge-text">Inmediato</span>
                        </div>
                    </div>
                    <div class="contact-method-content">
                        <h5>Llámanos Ahora</h5>
                        <p class="contact-benefit">Atención directa con nuestros especialistas</p>
                        <div class="contact-details">
                            <div class="contact-number-main">
                                <a href="tel:+51567967">(01) 567-9670</a>
                            </div>
                            <div class="contact-number-mobile">
                                <a href="tel:+51972736269">972 736 269</a>
                            </div>
                        </div>
                        <div class="contact-action">
                            <a href="tel:+51567967" class="btn btn-contact-primary">
                                <i class="fas fa-phone me-2"></i>Llamar Ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-method-card whatsapp-card">
                    <div class="contact-method-header">
                        <div class="contact-method-icon whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-method-badge popular">
                            <span class="badge-text">Popular</span>
                        </div>
                    </div>
                    <div class="contact-method-content">
                        <h5>WhatsApp Business</h5>
                        <p class="contact-benefit">Respuesta rápida y documentos al instante</p>
                        <div class="contact-details">
                            <div class="whatsapp-number">
                                <span>+51 954 778 370</span>
                            </div>
                            <div class="availability-tag">
                                <i class="fas fa-clock me-1 text-primary"></i>
                                <small>Respuesta dentro del horario</small>
                            </div>
                        </div>
                        <div class="contact-action">
                            <a href="https://wa.me/51954778370?text=Hola, me interesa solicitar una cotización para transporte" target="_blank" class="btn btn-contact-whatsapp">
                                <i class="fab fa-whatsapp me-2"></i>Chatear Ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-method-card email-card">
                    <div class="contact-method-header">
                        <div class="contact-method-icon email">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-method-badge formal">
                            <span class="badge-text">Formal</span>
                        </div>
                    </div>
                    <div class="contact-method-content">
                        <h5>Email Corporativo</h5>
                        <p class="contact-benefit">Para solicitudes formales y documentación</p>
                        <div class="contact-details">
                            <div class="email-address">
                                <a href="mailto:turismo@transvillarrica.com">turismo@transvillarrica.com</a>
                            </div>
                            <div class="response-time">
                                <i class="fas fa-clock me-1"></i>
                                <small>Respuesta en 2-4 horas</small>
                            </div>
                        </div>
                        <div class="contact-action">
                            <a href="mailto:turismo@transvillarrica.com?subject=Solicitud de Cotización&body=Estimados, me interesa solicitar una cotización para:" class="btn btn-contact-email">
                                <i class="fas fa-envelope me-2"></i>Escribir Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company Information -->
        <div class="row mt-5">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <div class="company-info-card">
                    <div class="company-header">
                        <div class="company-logo-display mb-4 text-center" style="padding-top: 1.5rem;">
                            <img src="{{ asset('images/logo.png') }}" alt="Villarrica Tours S.A." class="company-brand-logo">
                        </div>
                        <p class="company-tagline">Tu socio confiable en transporte</p>
                    </div>
                    <div class="company-details">
                        <div class="detail-item">
                            <i class="fas fa-certificate me-3"></i>
                            <div>
                                <strong>RUC:</strong> 20295999129<br>
                                <small>Empresa legalmente constituida</small>
                            </div>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt me-3"></i>
                            <div>
                                <strong>Dirección:</strong><br>
                                Av. Los Próceres Nro. 201<br>
                                San Martín de Porres, Lima
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="schedule-info-card">
                    <div class="schedule-header">
                        <h4>Horarios de Atención</h4>
                        <p class="schedule-tagline">Disponibles cuando nos necesites</p>
                    </div>
                    <div class="schedule-grid">
                        <div class="schedule-item office">
                            <div class="schedule-icon">
                                <i class="fas fa-business-time"></i>
                            </div>
                            <div class="schedule-content">
                                <h6>Oficina Administrativa</h6>
                                <p class="schedule-time">Lunes a Viernes<br><strong>8:00 AM - 5:00 PM</strong></p>
                                <small>Para trámites y documentación</small>
                            </div>
                        </div>
                        <div class="schedule-item service highlight">
                            <div class="schedule-icon">
                                <i class="fas fa-bus"></i>
                            </div>
                            <div class="schedule-content">
                                <h6>Servicio de Transporte</h6>
                                <p class="schedule-time featured">24 HORAS<br><strong>Todos los días</strong></p>
                                <small>Disponibilidad total para tus viajes</small>
                            </div>
                            <div class="always-on-badge">
                                <span>SIEMPRE</span>
                            </div>
                        </div>
                        <div class="schedule-item support">
                            <div class="schedule-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="schedule-content">
                                <h6>Soporte y Emergencias</h6>
                                <p class="schedule-time">24 HORAS<br><strong>Atención inmediata</strong></p>
                                <small>Para consultas y emergencias</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">¿Por qué más de 100 empresas confían en nosotros?</h2>
                <p class="section-subtitle">La tranquilidad que buscas para el transporte de tu equipo</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="trust-card">
                    <div class="trust-icon guarantee">
                        <i class="fas fa-award"></i>
                    </div>
                    <h5>Garantía Total</h5>
                    <p class="text-muted">Certificaciones internacionales ISO 9001 y homologaciones oficiales que respaldan nuestro servicio.</p>
                    <div class="trust-badge">
                        <span class="badge-text">Certificado</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="trust-card">
                    <div class="trust-icon experience">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h5>{{ date("Y") - 1995 }} Años de Experiencia</h5>
                    <p class="text-muted">Trayectoria sólida en transporte de personal para empresas líderes en el mercado peruano.</p>
                    <div class="trust-badge popular">
                        <span class="badge-text">Líder</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="trust-card">
                    <div class="trust-icon safety">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Seguridad Garantizada</h5>
                    <p class="text-muted">Conductores certificados, seguros completos y tecnología GPS para máxima tranquilidad.</p>
                    <div class="trust-badge safe">
                        <span class="badge-text">Seguro</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="section-title">Solicita tu Cotización Gratuita</h2>
                    <p class="section-subtitle">Completa el formulario y un especialista te contactará en menos de 24 horas</p>
                    <div class="form-guarantee">
                        <i class="fas fa-lock me-2 text-success"></i>
                        <small class="text-muted">Tus datos están protegidos y no serán compartidos con terceros</small>
                    </div>
                </div>
                <div class="quote-form-card">
                    <div class="form-header">
                        <div class="form-header-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4>Formulario de Cotización</h4>
                        <p class="text-white mb-0">Todos los campos marcados con * son obligatorios</p>
                    </div>
                    <div class="card-body p-4">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre y apellidos *</label>
                                    <input type="text" class="form-control form-control-enhanced" id="nombre" placeholder="Ej: Juan Pérez García" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Correo electrónico *</label>
                                    <input type="email" class="form-control form-control-enhanced" id="email" placeholder="Ej: juan.perez@empresa.com" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="telefono" class="form-label">Teléfono *</label>
                                    <input type="tel" class="form-control form-control-enhanced" id="telefono" placeholder="Ej: 987 654 321" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="empresa" class="form-label">Empresa</label>
                                    <input type="text" class="form-control form-control-enhanced" id="empresa" placeholder="Nombre de tu empresa">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="servicio" class="form-label">Tipo de Servicio *</label>
                                    <select class="form-select form-control-enhanced" id="servicio" required>
                                        <option value="">¿Qué servicio necesitas?</option>
                                        <option value="transporte-personal">Transporte de Personal</option>
                                        <option value="transporte-turistico">Transporte Turístico</option>
                                        <option value="omnibus">Ómnibus (42-53 pasajeros)</option>
                                        <option value="minibus">Minibús (30-38 pasajeros)</option>
                                        <option value="van">Van (14-21 pasajeros)</option>
                                        <option value="servicio-eventual">Servicio Eventual</option>
                                        <option value="otro">Otro servicio</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pasajeros" class="form-label">Número de Pasajeros</label>
                                    <input type="number" class="form-control form-control-enhanced" id="pasajeros" placeholder="¿Cuántos pasajeros?" min="1" max="60">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Detalles de tu solicitud *</label>
                                <textarea class="form-control form-control-enhanced" id="mensaje" rows="5" placeholder="Cuéntanos sobre tu proyecto: fechas, destinos, frecuencia del servicio, horarios, etc." required></textarea>
                            </div>
                            
                            <div class="urgency-box mb-4">
                                <div class="urgency-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="urgency-content">
                                    <p class="mb-0">Te contactaremos en menos de 24 horas con tu cotización personalizada</p>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-quote-submit btn-lg">
                                    <i class="fas fa-rocket me-2"></i>
                                    <span>Solicitar Cotización Gratuita</span>
                                    <div class="btn-shine"></div>
                                </button>
                                <p class="form-disclaimer mt-3">
                                    <i class="fas fa-shield-alt text-success me-1"></i>
                                    <small class="text-muted">Sin compromiso • Respuesta en 24hrs • Datos seguros</small>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title">Dónde Estamos</h2>
                <p class="section-subtitle mb-0">Visítanos en nuestras instalaciones</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15609.44963209856!2d-77.10647923527907!3d-12.018552582102018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf52ef28c059%3A0xd4bae2a257f61041!2sVILLARRICA%20TOURS%20S.A.!5e0!3m2!1ses-419!2spe!4v1754348418377!5m2!1ses-419!2spe" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="location-info-card">
                    <div class="location-header">
                        <div class="location-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Cómo Llegar</h4>
                        <p class="text-muted">Usa tu app favorita de navegación</p>
                    </div>
                    
                    <div class="navigation-options">
                        <div class="nav-option-card waze" data-aos="fade-up" data-aos-delay="100">
                            <div class="nav-option-header">
                                <div class="nav-option-icon">
                                    <i class="fab fa-waze"></i>
                                </div>
                                <div class="nav-option-info">
                                    <h6>Waze</h6>
                                    <small>Navegación inteligente</small>
                                </div>
                            </div>
                            <a href="https://waze.com/ul?q=VILLARRICA%20TOURS%20S.A.&navigate=yes&ll=-12.019338341457741,-77.08659641175947" target="_blank" class="btn btn-nav-waze">
                                <i class="fas fa-route me-2"></i>Abrir en Waze
                            </a>
                        </div>
                        
                        <div class="nav-option-card google-maps" data-aos="fade-up" data-aos-delay="200">
                            <div class="nav-option-header">
                                <div class="nav-option-icon">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div class="nav-option-info">
                                    <h6>Google Maps</h6>
                                    <small>Mapas de Google</small>
                                </div>
                            </div>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=-12.019338341457741,-77.08659641175947&destination_place_id=ChIJWcAo70_PBZERQRAWpSLqvtQ" target="_blank" class="btn btn-nav-google">
                                <i class="fas fa-directions me-2"></i>Abrir en Google Maps
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="location-details mt-4">
                        <h6 class="text-primary mb-3">Nuestra Dirección</h6>
                        <div class="address-info">
                            <i class="fas fa-building me-2 text-primary"></i>
                            <span>Av. Los Próceres Nro. 201<br>San Martín de Porres, Lima</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Síguenos en Redes Sociales</h2>
                <p class="section-subtitle">Mantente informado sobre nuestros servicios y promociones</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card text-center h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <h5>Facebook</h5>
                        <p class="text-muted">Síguenos para ver nuestras últimas noticias y promociones</p>
                        <a href="https://www.facebook.com/profile.php?id=100064287904488" class="btn btn-outline-primary" target="_blank">
                            <i class="fab fa-facebook me-2"></i>Seguir
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card text-center h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <h5>Instagram</h5>
                        <p class="text-muted">Descubre nuestras experiencias y destinos turísticos</p>
                        <a href="https://www.instagram.com/villarrica_tours_sa/" class="btn btn-outline-primary" target="_blank">
                            <i class="fab fa-instagram me-2"></i>Seguir
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card text-center h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h5>WhatsApp</h5>
                        <p class="text-muted">Atención directa y rápida para consultas y cotizaciones</p>
                        <a href="https://wa.me/51954778370" class="btn btn-outline-success" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>Chatear
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card text-center h-100">
                    <div class="card-body p-4">
                        <div class="service-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Email</h5>
                        <p class="text-muted">Envíanos un correo para solicitudes formales</p>
                        <a href="mailto:turismo@transvillarrica.com" class="btn btn-outline-primary">
                            <i class="fas fa-envelope me-2"></i>Escribir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Contact Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h2 class="mb-4">¿Necesitas una cotización rápida?</h2>
                <p class="lead mb-4">
                    Llámanos directamente o escríbenos por WhatsApp para una atención inmediata
                </p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="tel:+51972736269" class="btn btn-light btn-lg w-100">
                            <i class="fas fa-phone me-2"></i>Llamar Ahora
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="https://wa.me/51954778370" class="btn btn-success btn-lg w-100" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Aquí puedes agregar la lógica para enviar el formulario
        alert('Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.');
        form.reset();
    });
});
</script>
@endsection