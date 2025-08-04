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
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <h2 class="section-title text-start">Información de Contacto</h2>
                <div class="contact-info">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-building"></i>
                        <div>
                            <h5 class="mb-1">Villarrica Tours S.A.</h5>
                            <p class="mb-0">Inscripción: Registros Públicos – Ficha Nº 9202</p>
                            <p class="mb-0">Nº RUC: 20295999129</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5 class="mb-1">Dirección Fiscal</h5>
                            <p class="mb-0">Av. Los Próceres Nro. 201 Urb. Condevilla Señor</p>
                            <p class="mb-0">San Martín de Porres, Lima – Lima</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h5 class="mb-1">Teléfonos</h5>
                            <p class="mb-0">(01) 567-9670 / 972 736 269</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h5 class="mb-1">Correo Electrónico</h5>
                            <p class="mb-0">turismo@transvillarrica.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <h2 class="section-title text-start">Horarios de Atención</h2>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="contact-info">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-clock"></i>
                                <h5 class="mb-0 ms-2">HORARIO DE OFICINA</h5>
                            </div>
                            <p class="mb-1"><strong>Lunes a Viernes:</strong></p>
                            <p class="mb-0">8.00 AM – 05.00 PM</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="contact-info">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-route"></i>
                                <h5 class="mb-0 ms-2">HORARIO DE SERVICIO</h5>
                            </div>
                            <p class="mb-0"><strong>24 horas</strong></p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="contact-info">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-headset"></i>
                                <h5 class="mb-0 ms-2">HORARIO DE ATENCIÓN</h5>
                            </div>
                            <p class="mb-0"><strong>24 horas</strong></p>
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
                        <i class="fas fa-certificate"></i>
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
                        <p class="text-muted mb-0">Todos los campos marcados con * son obligatorios</p>
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
                                    <h6>Respuesta Garantizada</h6>
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
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Dónde Estamos</h2>
                <p class="section-subtitle">Visítanos en nuestras instalaciones</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="ratio ratio-21x9">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.1234567890123!2d-77.12345678901234!3d-12.12345678901234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA3JzM0LjQiUyA3N8KwMDcnMzQuNCJX!5e0!3m2!1ses!2spe!4v1234567890123" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
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