@extends('layouts.app')

@section('title', 'Política de Privacidad - Villarrica Tours S.A.')
@section('description', 'Política de privacidad de Villarrica Tours S.A. Información sobre cómo recopilamos, usamos y protegemos sus datos personales.')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4 text-white" data-aos="fade-up">
                    Política de Privacidad
                </h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="200">
                    Tu privacidad es importante para nosotros
                </p>
            </div>
        </div>
    </div>
</section>

@include('partials.breadcrumbs')

<!-- Content Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="legal-content">
                    <div class="update-date">
                        <i class="fas fa-calendar-alt me-2"></i>
                        Última actualización: {{ date('d/m/Y') }}
                    </div>

                    <h2 class="section-title mt-5">1. Introducción</h2>
                    <p>
                        En <strong>Villarrica Tours S.A.</strong> (en adelante, "la Empresa"), respetamos su privacidad y nos comprometemos a proteger sus datos personales. Esta Política de Privacidad describe cómo recopilamos, usamos, almacenamos y protegemos su información cuando utiliza nuestros servicios de transporte de personal y turístico.
                    </p>
                    <p>
                        Al utilizar nuestros servicios, usted acepta las prácticas descritas en esta política.
                    </p>

                    <h2 class="section-title">2. Responsable del Tratamiento</h2>
                    <ul class="legal-list">
                        <li><strong>Razón social:</strong> Villarrica Tours S.A.</li>
                        <li><strong>RUC:</strong> 20295999129</li>
                        <li><strong>Domicilio:</strong> Av. Carlos Alberto Izaguirre Mza. C Lote. 7 a.V. Casuarinas de Santa Rosa - San Martin de Porres</li>
                        <li><strong>Correo electrónico:</strong> turismo@transvillarrica.com</li>
                        <li><strong>Teléfono:</strong> (01) 567-9670</li>
                    </ul>

                    <h2 class="section-title">3. Información que Recopilamos</h2>
                    <h3 class="subsection-title">3.1 Información proporcionada directamente</h3>
                    <ul class="legal-list">
                        <li>Nombre completo y apellidos</li>
                        <li>Documento de identidad (DNI/CE/Pasaporte)</li>
                        <li>Dirección de domicilio</li>
                        <li>Número de teléfono</li>
                        <li>Correo electrónico</li>
                        <li>Información de la empresa (para clientes corporativos)</li>
                        <li>Información de facturación</li>
                    </ul>

                    <h3 class="subsection-title">3.2 Información recopilada automáticamente</h3>
                    <ul class="legal-list">
                        <li>Dirección IP</li>
                        <li>Tipo de navegador</li>
                        <li>Páginas visitadas en nuestro sitio web</li>
                        <li>Fecha y hora de acceso</li>
                        <li>Datos de ubicación (solo con su consentimiento)</li>
                    </ul>

                    <h2 class="section-title">4. Uso de la Información</h2>
                    <p>Utilizamos su información personal para:</p>
                    <ul class="legal-list">
                        <li>Prestar nuestros servicios de transporte</li>
                        <li>Procesar reservas y pagos</li>
                        <li>Comunicarnos con usted sobre sus servicios</li>
                        <li>Enviar información promocional (solo con su consentimiento)</li>
                        <li>Mejorar nuestros servicios</li>
                        <li>Cumplir con obligaciones legales</li>
                        <li>Garantizar la seguridad durante el transporte</li>
                        <li>Gestión de emergencias y contacto con familiares</li>
                    </ul>

                    <h2 class="section-title">5. Base Legal para el Tratamiento</h2>
                    <p>Procesamos sus datos personales basándonos en:</p>
                    <ul class="legal-list">
                        <li><strong>Ejecución de contrato:</strong> Para prestar los servicios de transporte contratados</li>
                        <li><strong>Obligaciones legales:</strong> Para cumplir con la normativa de transporte y tributaria</li>
                        <li><strong>Interés legítimo:</strong> Para mejorar nuestros servicios y garantizar la seguridad</li>
                        <li><strong>Consentimiento:</strong> Para envío de comunicaciones comerciales y uso de cookies</li>
                    </ul>

                    <h2 class="section-title">6. Compartir Información</h2>
                    <p>No vendemos ni alquilamos su información personal. Solo compartimos sus datos con:</p>
                    <ul class="legal-list">
                        <li><strong>Autoridades competentes:</strong> Cuando sea requerido por ley</li>
                        <li><strong>Proveedores de servicios:</strong> Que nos ayudan a operar nuestro negocio (bajo acuerdos de confidencialidad)</li>
                        <li><strong>Compañías de seguros:</strong> En caso de incidentes o accidentes</li>
                        <li><strong>Entidades financieras:</strong> Para procesar pagos</li>
                    </ul>

                    <h2 class="section-title">7. Seguridad de los Datos</h2>
                    <p>
                        Implementamos medidas de seguridad técnicas, administrativas y físicas para proteger su información personal contra acceso no autorizado, pérdida, alteración o destrucción. Estas incluyen:
                    </p>
                    <ul class="legal-list">
                        <li>Cifrado de datos sensibles</li>
                        <li>Acceso restringido a información personal</li>
                        <li>Capacitación regular del personal</li>
                        <li>Auditorías de seguridad periódicas</li>
                        <li>Protocolos de respuesta ante incidentes</li>
                    </ul>

                    <h2 class="section-title">8. Retención de Datos</h2>
                    <p>
                        Conservamos sus datos personales durante el tiempo necesario para cumplir con los fines descritos en esta política, a menos que la ley requiera o permita un período de retención más largo. Los criterios incluyen:
                    </p>
                    <ul class="legal-list">
                        <li>Duración de la relación comercial</li>
                        <li>Obligaciones legales de conservación</li>
                        <li>Plazos de prescripción legal</li>
                        <li>Necesidades de defensa legal</li>
                    </ul>

                    <h2 class="section-title">9. Sus Derechos</h2>
                    <p>De acuerdo con la Ley N° 29733 - Ley de Protección de Datos Personales, usted tiene derecho a:</p>
                    <ul class="legal-list">
                        <li><strong>Acceso:</strong> Conocer qué datos personales tenemos sobre usted</li>
                        <li><strong>Rectificación:</strong> Corregir datos inexactos o incompletos</li>
                        <li><strong>Cancelación:</strong> Solicitar la eliminación de sus datos</li>
                        <li><strong>Oposición:</strong> Oponerse al tratamiento de sus datos</li>
                        <li><strong>Portabilidad:</strong> Recibir sus datos en formato estructurado</li>
                        <li><strong>Limitación:</strong> Restringir el procesamiento en ciertas circunstancias</li>
                    </ul>
                    <p>
                        Para ejercer estos derechos, contáctenos a través de turismo@transvillarrica.com o presente una solicitud en nuestras oficinas.
                    </p>

                    <h2 class="section-title">10. Menores de Edad</h2>
                    <p>
                        Nuestros servicios no están dirigidos a menores de edad sin la autorización de sus padres o tutores. Si recopilamos información de menores, será siempre con el consentimiento verificable de sus representantes legales.
                    </p>

                    <h2 class="section-title">11. Cambios en la Política</h2>
                    <p>
                        Nos reservamos el derecho de actualizar esta Política de Privacidad en cualquier momento. Los cambios serán publicados en esta página con la fecha de actualización correspondiente. Le recomendamos revisar periódicamente esta política.
                    </p>

                    <h2 class="section-title">12. Contacto</h2>
                    <p>
                        Si tiene preguntas sobre esta Política de Privacidad o sobre el tratamiento de sus datos personales, puede contactarnos a través de:
                    </p>
                    <ul class="legal-list">
                        <li><strong>Correo electrónico:</strong> turismo@transvillarrica.com</li>
                        <li><strong>Teléfono:</strong> (01) 567-9670</li>
                        <li><strong>Dirección:</strong> Av. Carlos Alberto Izaguirre Mza. C Lote. 7 a.V. Casuarinas de Santa Rosa - San Martin de Porres</li>
                    </ul>

                    <div class="legal-footer">
                        <p class="text-center">
                            <strong>Villarrica Tours S.A.</strong><br>
                            Todos los derechos reservados
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection