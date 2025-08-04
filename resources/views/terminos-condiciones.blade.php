@extends('layouts.app')

@section('title', 'Términos y Condiciones - Villarrica Tours S.A.')
@section('description', 'Términos y condiciones de uso de los servicios de transporte de Villarrica Tours S.A.')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4 text-white" data-aos="fade-up">
                    Términos y Condiciones
                </h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="200">
                    Condiciones generales de contratación de servicios
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

                    <h2 class="section-title mt-5">1. Aceptación de los Términos</h2>
                    <p>
                        Al contratar los servicios de <strong>Villarrica Tours S.A.</strong> (en adelante, "la Empresa"), usted acepta estar sujeto a estos Términos y Condiciones. Si no está de acuerdo con alguna parte de estos términos, no podrá utilizar nuestros servicios.
                    </p>
                    <p>
                        Estos términos constituyen un acuerdo legal vinculante entre usted (persona natural o jurídica) y Villarrica Tours S.A. para la prestación de servicios de transporte de personal y turístico.
                    </p>

                    <h2 class="section-title">2. Descripción de los Servicios</h2>
                    <p>Villarrica Tours S.A. ofrece los siguientes servicios:</p>
                    <ul class="legal-list">
                        <li><strong>Transporte de Personal:</strong> Servicio regular de traslado de trabajadores desde y hacia centros laborales</li>
                        <li><strong>Transporte Turístico:</strong> Servicios de excursiones, tours y viajes programados</li>
                        <li><strong>Servicio de Alquiler:</strong> Alquiler de unidades con conductor para eventos especiales</li>
                        <li><strong>Transporte Corporativo:</strong> Servicios especializados para empresas</li>
                    </ul>

                    <h2 class="section-title">3. Reservas y Contratación</h2>
                    
                    <h3 class="subsection-title">3.1 Proceso de Reserva</h3>
                    <ul class="legal-list">
                        <li>Las reservas pueden realizarse a través de nuestra página web, teléfono o presencialmente</li>
                        <li>Toda reserva está sujeta a disponibilidad</li>
                        <li>Se requiere confirmación por escrito de la Empresa</li>
                        <li>Los datos proporcionados deben ser veraces y completos</li>
                    </ul>

                    <h3 class="subsection-title">3.2 Confirmación de Servicio</h3>
                    <p>
                        La confirmación del servicio incluirá:
                    </p>
                    <ul class="legal-list">
                        <li>Fecha y hora del servicio</li>
                        <li>Puntos de recojo y destino</li>
                        <li>Número de pasajeros</li>
                        <li>Tipo de unidad asignada</li>
                        <li>Costo total del servicio</li>
                        <li>Condiciones de pago</li>
                    </ul>

                    <h2 class="section-title">4. Tarifas y Pagos</h2>
                    
                    <h3 class="subsection-title">4.1 Estructura de Precios</h3>
                    <ul class="legal-list">
                        <li>Las tarifas se calculan según: distancia, tiempo, tipo de servicio y unidad</li>
                        <li>Los precios incluyen IGV salvo indicación contraria</li>
                        <li>Se pueden aplicar cargos adicionales por: peajes, estacionamientos, horas extras</li>
                        <li>Las tarifas están sujetas a cambios sin previo aviso para nuevas reservas</li>
                    </ul>

                    <h3 class="subsection-title">4.2 Formas de Pago</h3>
                    <ul class="legal-list">
                        <li>Efectivo</li>
                        <li>Transferencia bancaria</li>
                        <li>Depósito en cuenta</li>
                        <li>Tarjetas de crédito/débito (sujeto a disponibilidad)</li>
                    </ul>

                    <h3 class="subsection-title">4.3 Condiciones de Pago</h3>
                    <ul class="legal-list">
                        <li><strong>Servicios regulares:</strong> Pago mensual adelantado</li>
                        <li><strong>Servicios eventuales:</strong> 50% al confirmar, 50% antes del servicio</li>
                        <li><strong>Clientes corporativos:</strong> Según acuerdo comercial</li>
                        <li>Mora genera intereses según tasa máxima legal</li>
                    </ul>

                    <h2 class="section-title">5. Obligaciones del Cliente</h2>
                    <p>El cliente se compromete a:</p>
                    <ul class="legal-list">
                        <li>Proporcionar información veraz y completa</li>
                        <li>Estar presente en el lugar y hora acordados (tolerancia máxima: 10 minutos)</li>
                        <li>Respetar la capacidad máxima de la unidad</li>
                        <li>No transportar materiales peligrosos o prohibidos</li>
                        <li>Tratar con respeto al conductor y otros pasajeros</li>
                        <li>Mantener la limpieza de la unidad</li>
                        <li>Usar cinturón de seguridad</li>
                        <li>No fumar ni consumir bebidas alcohólicas en la unidad</li>
                        <li>Cumplir con las normas de seguridad indicadas</li>
                    </ul>

                    <h2 class="section-title">6. Obligaciones de la Empresa</h2>
                    <p>Villarrica Tours S.A. se compromete a:</p>
                    <ul class="legal-list">
                        <li>Proporcionar unidades en óptimas condiciones mecánicas y de limpieza</li>
                        <li>Asignar conductores profesionales debidamente licenciados</li>
                        <li>Cumplir con los horarios acordados (salvo casos fortuitos)</li>
                        <li>Mantener vigentes todos los seguros obligatorios</li>
                        <li>Respetar las rutas y paradas acordadas</li>
                        <li>Brindar asistencia en caso de emergencias</li>
                        <li>Proteger la información personal del cliente</li>
                    </ul>

                    <h2 class="section-title">7. Modificaciones y Cancelaciones</h2>
                    
                    <h3 class="subsection-title">7.1 Modificaciones</h3>
                    <ul class="legal-list">
                        <li>Cambios con más de 48 horas: Sin costo adicional</li>
                        <li>Cambios con 24-48 horas: Sujeto a disponibilidad y posible recargo</li>
                        <li>Cambios con menos de 24 horas: 10% de recargo sobre el servicio</li>
                    </ul>

                    <h3 class="subsection-title">7.2 Cancelaciones por el Cliente</h3>
                    <ul class="legal-list">
                        <li>Más de 72 horas antes: Devolución total</li>
                        <li>48-72 horas antes: Retención del 25%</li>
                        <li>24-48 horas antes: Retención del 50%</li>
                        <li>Menos de 24 horas: Sin devolución</li>
                    </ul>

                    <h3 class="subsection-title">7.3 Cancelaciones por la Empresa</h3>
                    <p>
                        En caso de cancelación por parte de la Empresa, se devolverá el 100% del monto pagado o se reprogramará el servicio según preferencia del cliente.
                    </p>

                    <h2 class="section-title">8. Responsabilidad y Limitaciones</h2>
                    
                    <h3 class="subsection-title">8.1 Seguro y Cobertura</h3>
                    <ul class="legal-list">
                        <li>Todas las unidades cuentan con SOAT vigente</li>
                        <li>Seguro de responsabilidad civil</li>
                        <li>La cobertura está sujeta a los términos de las pólizas</li>
                    </ul>

                    <h3 class="subsection-title">8.2 Limitación de Responsabilidad</h3>
                    <p>La Empresa no será responsable por:</p>
                    <ul class="legal-list">
                        <li>Pérdida o daño de objetos personales dejados en las unidades</li>
                        <li>Retrasos por condiciones de tráfico, clima o casos fortuitos</li>
                        <li>Daños indirectos o consecuenciales</li>
                        <li>Actos de terceros fuera del control de la Empresa</li>
                    </ul>

                    <h3 class="subsection-title">8.3 Indemnización</h3>
                    <p>
                        El cliente indemnizará a la Empresa por cualquier daño causado por su negligencia o incumplimiento de estos términos.
                    </p>

                    <h2 class="section-title">9. Propiedad Intelectual</h2>
                    <p>
                        Todos los derechos de propiedad intelectual relacionados con:
                    </p>
                    <ul class="legal-list">
                        <li>Marca "Villarrica Tours S.A."</li>
                        <li>Logotipos y diseños</li>
                        <li>Contenido del sitio web</li>
                        <li>Material publicitario</li>
                    </ul>
                    <p>
                        Son propiedad exclusiva de la Empresa y están protegidos por las leyes aplicables.
                    </p>

                    <h2 class="section-title">10. Fuerza Mayor</h2>
                    <p>
                        Ninguna de las partes será responsable por incumplimientos debido a causas de fuerza mayor, incluyendo pero no limitándose a:
                    </p>
                    <ul class="legal-list">
                        <li>Desastres naturales</li>
                        <li>Huelgas o paros</li>
                        <li>Restricciones gubernamentales</li>
                        <li>Pandemias o emergencias sanitarias</li>
                        <li>Conflictos armados</li>
                        <li>Fallas generalizadas de servicios públicos</li>
                    </ul>

                    <h2 class="section-title">11. Resolución de Conflictos</h2>
                    
                    <h3 class="subsection-title">11.1 Negociación Directa</h3>
                    <p>
                        Las partes intentarán resolver cualquier disputa mediante negociación directa durante un período de 30 días.
                    </p>

                    <h3 class="subsection-title">11.2 Mediación y Arbitraje</h3>
                    <p>
                        De no llegar a un acuerdo, las partes se someterán a:
                    </p>
                    <ul class="legal-list">
                        <li>Mediación ante el Centro de Arbitraje de la Cámara de Comercio de Lima</li>
                        <li>De persistir el conflicto, arbitraje de derecho bajo las reglas del mismo centro</li>
                        <li>El laudo arbitral será definitivo e inapelable</li>
                    </ul>

                    <h2 class="section-title">12. Ley Aplicable y Jurisdicción</h2>
                    <p>
                        Estos términos se rigen por las leyes de la República del Perú. Para cualquier controversia no sujeta a arbitraje, las partes se someten a la jurisdicción de los tribunales del distrito judicial de Lima.
                    </p>

                    <h2 class="section-title">13. Disposiciones Generales</h2>
                    <ul class="legal-list">
                        <li><strong>Divisibilidad:</strong> Si alguna cláusula es declarada inválida, las demás permanecerán vigentes</li>
                        <li><strong>Integridad:</strong> Estos términos constituyen el acuerdo completo entre las partes</li>
                        <li><strong>Modificaciones:</strong> Cualquier modificación debe ser por escrito y firmada por ambas partes</li>
                        <li><strong>Renuncia:</strong> La falta de ejercicio de un derecho no implica renuncia al mismo</li>
                        <li><strong>Notificaciones:</strong> Se considerarán válidas las enviadas a las direcciones registradas</li>
                    </ul>

                    <h2 class="section-title">14. Contacto</h2>
                    <p>
                        Para consultas sobre estos términos y condiciones:
                    </p>
                    <ul class="legal-list">
                        <li><strong>Razón Social:</strong> Villarrica Tours S.A.</li>
                        <li><strong>Dirección:</strong> [Dirección de la empresa]</li>
                        <li><strong>Teléfono:</strong> (511) 567-9670</li>
                        <li><strong>Email:</strong> [Email de contacto]</li>
                        <li><strong>Horario de atención:</strong> Lunes a Sábado de 8:00 AM a 6:00 PM</li>
                    </ul>

                    <div class="legal-footer">
                        <p class="text-center">
                            <strong>Villarrica Tours S.A.</strong><br>
                            RUC: [Número de RUC]<br>
                            Todos los derechos reservados © {{ date('Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection