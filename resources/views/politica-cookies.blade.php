@extends('layouts.app')

@section('title', 'Política de Cookies - Villarrica Tours S.A.')
@section('description', 'Información sobre el uso de cookies en el sitio web de Villarrica Tours S.A. y cómo gestionarlas.')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4 text-white" data-aos="fade-up">
                    Política de Cookies
                </h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="200">
                    Transparencia en el uso de cookies y tecnologías similares
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

                    <h2 class="section-title mt-5">1. ¿Qué son las Cookies?</h2>
                    <p>
                        Las cookies son pequeños archivos de texto que se almacenan en su dispositivo (ordenador, tablet o móvil) cuando visita nuestro sitio web. Estas cookies nos ayudan a:
                    </p>
                    <ul class="legal-list">
                        <li>Hacer que nuestro sitio web funcione correctamente</li>
                        <li>Recordar sus preferencias durante y entre visitas</li>
                        <li>Mejorar la velocidad y seguridad del sitio</li>
                        <li>Permitirle compartir contenido en redes sociales</li>
                        <li>Mejorar continuamente nuestro sitio web</li>
                        <li>Mostrar contenido más relevante para usted</li>
                    </ul>

                    <h2 class="section-title">2. Tipos de Cookies que Utilizamos</h2>
                    
                    <div class="cookie-type-card">
                        <h3 class="cookie-type-title">
                            <i class="fas fa-cog text-primary me-2"></i>
                            Cookies Técnicas (Esenciales)
                        </h3>
                        <p><strong>Propósito:</strong> Necesarias para el funcionamiento básico del sitio web.</p>
                        <p><strong>Duración:</strong> Sesión</p>
                        <p><strong>Ejemplos:</strong></p>
                        <ul>
                            <li>Mantener la sesión iniciada</li>
                            <li>Recordar elementos en el carrito de compra</li>
                            <li>Garantizar la seguridad de la navegación</li>
                        </ul>
                    </div>

                    <div class="cookie-type-card">
                        <h3 class="cookie-type-title">
                            <i class="fas fa-chart-line text-primary me-2"></i>
                            Cookies Analíticas
                        </h3>
                        <p><strong>Propósito:</strong> Nos ayudan a entender cómo los visitantes interactúan con nuestro sitio web.</p>
                        <p><strong>Duración:</strong> Hasta 2 años</p>
                        <p><strong>Ejemplos:</strong></p>
                        <ul>
                            <li>Google Analytics (_ga, _gid, _gat)</li>
                            <li>Número de visitantes</li>
                            <li>Páginas más visitadas</li>
                            <li>Tiempo de permanencia</li>
                        </ul>
                    </div>

                    <div class="cookie-type-card">
                        <h3 class="cookie-type-title">
                            <i class="fas fa-user-cog text-primary me-2"></i>
                            Cookies de Funcionalidad
                        </h3>
                        <p><strong>Propósito:</strong> Permiten recordar las opciones que ha elegido para proporcionarle una experiencia más personalizada.</p>
                        <p><strong>Duración:</strong> Hasta 1 año</p>
                        <p><strong>Ejemplos:</strong></p>
                        <ul>
                            <li>Idioma preferido</li>
                            <li>Región desde la que accede</li>
                            <li>Preferencias de visualización</li>
                        </ul>
                    </div>

                    <div class="cookie-type-card">
                        <h3 class="cookie-type-title">
                            <i class="fas fa-bullhorn text-primary me-2"></i>
                            Cookies de Marketing
                        </h3>
                        <p><strong>Propósito:</strong> Se utilizan para mostrar anuncios relevantes y medir la efectividad de las campañas publicitarias.</p>
                        <p><strong>Duración:</strong> Hasta 1 año</p>
                        <p><strong>Ejemplos:</strong></p>
                        <ul>
                            <li>Facebook Pixel</li>
                            <li>Google Ads</li>
                            <li>Remarketing</li>
                        </ul>
                    </div>

                    <h2 class="section-title">3. Cookies de Terceros</h2>
                    <p>
                        Utilizamos servicios de terceros que también pueden establecer cookies en su dispositivo. Estos incluyen:
                    </p>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Servicio</th>
                                    <th>Propósito</th>
                                    <th>Más información</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Google Analytics</td>
                                    <td>Análisis de tráfico web</td>
                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Política de privacidad</a></td>
                                </tr>
                                <tr>
                                    <td>Facebook</td>
                                    <td>Integración social y publicidad</td>
                                    <td><a href="https://www.facebook.com/policy/cookies/" target="_blank" rel="noopener">Política de cookies</a></td>
                                </tr>
                                <tr>
                                    <td>YouTube</td>
                                    <td>Reproducción de videos</td>
                                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Política de privacidad</a></td>
                                </tr>
                                <tr>
                                    <td>WhatsApp</td>
                                    <td>Widget de chat</td>
                                    <td><a href="https://www.whatsapp.com/legal/cookies" target="_blank" rel="noopener">Política de cookies</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="section-title">4. Gestión de Cookies</h2>
                    <p>
                        Usted puede controlar y gestionar las cookies de varias formas. Tenga en cuenta que eliminar o bloquear las cookies puede afectar su experiencia de usuario y algunas partes del sitio web podrían no funcionar completamente.
                    </p>

                    <h3 class="subsection-title">Configuración del navegador</h3>
                    <p>
                        La mayoría de navegadores le permiten:
                    </p>
                    <ul class="legal-list">
                        <li>Ver qué cookies tiene y eliminarlas de forma individual</li>
                        <li>Bloquear las cookies de terceros</li>
                        <li>Bloquear las cookies de sitios específicos</li>
                        <li>Bloquear todas las cookies</li>
                        <li>Eliminar todas las cookies al cerrar el navegador</li>
                    </ul>

                    <h3 class="subsection-title">Enlaces útiles para gestionar cookies en navegadores:</h3>
                    <ul class="legal-list">
                        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
                        <li><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias" target="_blank" rel="noopener">Mozilla Firefox</a></li>
                        <li><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener">Microsoft Edge</a></li>
                        <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
                    </ul>

                    <h2 class="section-title">5. Consentimiento</h2>
                    <p>
                        Al utilizar nuestro sitio web, usted acepta el uso de cookies según lo descrito en esta política. Mostramos un aviso de cookies en su primera visita para obtener su consentimiento. Puede cambiar sus preferencias en cualquier momento a través de:
                    </p>
                    <ul class="legal-list">
                        <li>El panel de configuración de cookies en nuestro sitio web</li>
                        <li>La configuración de su navegador</li>
                        <li>Los enlaces de exclusión proporcionados anteriormente</li>
                    </ul>

                    <h2 class="section-title">6. Cookies y Datos Personales</h2>
                    <p>
                        Algunas cookies pueden recopilar información que podría utilizarse para identificarle. Para más información sobre cómo manejamos sus datos personales, consulte nuestra <a href="{{ route('politica-privacidad') }}">Política de Privacidad</a>.
                    </p>

                    <h2 class="section-title">7. Cambios en la Política de Cookies</h2>
                    <p>
                        Podemos actualizar esta política de cookies periódicamente para reflejar cambios en las cookies que utilizamos o por otros motivos operativos, legales o reglamentarios. Revise esta política regularmente para mantenerse informado sobre nuestro uso de cookies.
                    </p>

                    <h2 class="section-title">8. Contacto</h2>
                    <p>
                        Si tiene preguntas sobre nuestro uso de cookies, puede contactarnos:
                    </p>
                    <ul class="legal-list">
                        <li><strong>Email:</strong> turismo@transvillarrica.com</li>
                        <li><strong>Teléfono:</strong> (511) 567-9670</li>
                        <li><strong>Dirección:</strong> Av. Carlos Alberto Izaguirre Mza. C Lote. 7 a.V. Casuarinas de Santa Rosa - San Martin de Porres</li>
                    </ul>

                    <div class="legal-footer">
                        <p class="text-center">
                            <strong>Villarrica Tours S.A.</strong><br>
                            Transparencia en el uso de tecnologías web
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection