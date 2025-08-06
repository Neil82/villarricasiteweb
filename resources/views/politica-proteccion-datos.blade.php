@extends('layouts.app')

@section('title', 'Política de Protección de Datos - Villarrica Tours S.A.')
@section('description', 'Política de protección de datos personales de Villarrica Tours S.A. conforme a la Ley N° 29733 y su reglamento.')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-4 text-white" data-aos="fade-up">
                    Política de Protección de Datos
                </h1>
                <p class="lead text-white" data-aos="fade-up" data-aos-delay="200">
                    Cumpliendo con la Ley N° 29733 - Ley de Protección de Datos Personales
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

                    <h2 class="section-title mt-5">1. Objetivo</h2>
                    <p>
                        <strong>Villarrica Tours S.A.</strong> establece la presente Política de Protección de Datos Personales en cumplimiento de la Ley N° 29733 - Ley de Protección de Datos Personales y su Reglamento aprobado por Decreto Supremo N° 003-2013-JUS, con el objetivo de garantizar el derecho fundamental a la protección de datos personales de nuestros clientes, proveedores, trabajadores y cualquier persona cuyos datos sean tratados por nuestra empresa.
                    </p>

                    <h2 class="section-title">2. Alcance</h2>
                    <p>
                        Esta política aplica a todos los tratamientos de datos personales realizados por Villarrica Tours S.A. en el desarrollo de sus actividades de transporte de personal y turístico, incluyendo:
                    </p>
                    <ul class="legal-list">
                        <li>Datos de clientes (personas naturales y representantes de personas jurídicas)</li>
                        <li>Datos de trabajadores y colaboradores</li>
                        <li>Datos de proveedores</li>
                        <li>Datos de usuarios del sitio web</li>
                        <li>Datos captados por sistemas de videovigilancia en nuestras unidades</li>
                    </ul>

                    <h2 class="section-title">3. Principios Rectores</h2>
                    <p>El tratamiento de datos personales se rige por los siguientes principios:</p>
                    
                    <div class="principle-card">
                        <h4><i class="fas fa-check-circle text-primary me-2"></i>Principio de Legalidad</h4>
                        <p>El tratamiento de datos personales se realiza conforme a lo establecido en la ley.</p>
                    </div>

                    <div class="principle-card">
                        <h4><i class="fas fa-check-circle text-primary me-2"></i>Principio de Consentimiento</h4>
                        <p>Todo tratamiento requiere el consentimiento previo, informado, expreso e inequívoco del titular.</p>
                    </div>

                    <div class="principle-card">
                        <h4><i class="fas fa-check-circle text-primary me-2"></i>Principio de Finalidad</h4>
                        <p>Los datos se recopilan para finalidades determinadas, explícitas y lícitas.</p>
                    </div>

                    <div class="principle-card">
                        <h4><i class="fas fa-check-circle text-primary me-2"></i>Principio de Proporcionalidad</h4>
                        <p>El tratamiento es adecuado, relevante y no excesivo en relación con la finalidad.</p>
                    </div>

                    <div class="principle-card">
                        <h4><i class="fas fa-check-circle text-primary me-2"></i>Principio de Calidad</h4>
                        <p>Los datos deben ser veraces, exactos y actualizados.</p>
                    </div>

                    <div class="principle-card">
                        <h4><i class="fas fa-check-circle text-primary me-2"></i>Principio de Seguridad</h4>
                        <p>Se adoptan medidas técnicas, organizativas y legales necesarias para garantizar la seguridad.</p>
                    </div>

                    <div class="principle-card">
                        <h4><i class="fas fa-check-circle text-primary me-2"></i>Principio de Disposición de Recurso</h4>
                        <p>El titular tiene derecho a recurrir ante la autoridad de control.</p>
                    </div>

                    <div class="principle-card">
                        <h4><i class="fas fa-check-circle text-primary me-2"></i>Principio de Nivel de Protección Adecuado</h4>
                        <p>Garantizamos niveles adecuados de protección para el flujo transfronterizo de datos.</p>
                    </div>

                    <h2 class="section-title">4. Banco de Datos Personales</h2>
                    <p>
                        Villarrica Tours S.A. ha inscrito sus bancos de datos personales ante la Autoridad Nacional de Protección de Datos Personales, conforme a la normativa vigente:
                    </p>
                    <ul class="legal-list">
                        <li><strong>Banco de Datos de Clientes:</strong> Contiene información de personas naturales y jurídicas que contratan nuestros servicios</li>
                        <li><strong>Banco de Datos de Trabajadores:</strong> Información de empleados y colaboradores</li>
                        <li><strong>Banco de Datos de Proveedores:</strong> Datos de personas que nos proveen bienes y servicios</li>
                        <li><strong>Banco de Datos de Videovigilancia:</strong> Imágenes captadas por cámaras de seguridad</li>
                    </ul>

                    <h2 class="section-title">5. Tratamiento de Datos Sensibles</h2>
                    <p>
                        En caso de requerir datos sensibles (datos biométricos, de salud, entre otros), solicitaremos su consentimiento expreso y por escrito, informando claramente:
                    </p>
                    <ul class="legal-list">
                        <li>La finalidad específica del tratamiento</li>
                        <li>Quiénes serán los destinatarios de la información</li>
                        <li>El carácter facultativo de la respuesta</li>
                        <li>Las consecuencias de proporcionar o no los datos</li>
                    </ul>

                    <h2 class="section-title">6. Medidas de Seguridad</h2>
                    <p>Implementamos medidas de seguridad apropiadas según el tipo de datos:</p>
                    
                    <h3 class="subsection-title">Medidas Organizativas</h3>
                    <ul class="legal-list">
                        <li>Designación de un responsable de protección de datos</li>
                        <li>Capacitación periódica del personal</li>
                        <li>Procedimientos de gestión de incidentes</li>
                        <li>Auditorías internas regulares</li>
                    </ul>

                    <h3 class="subsection-title">Medidas Técnicas</h3>
                    <ul class="legal-list">
                        <li>Control de acceso mediante usuarios y contraseñas</li>
                        <li>Cifrado de datos sensibles</li>
                        <li>Copias de seguridad periódicas</li>
                        <li>Sistemas de detección de intrusos</li>
                        <li>Actualizaciones de seguridad regulares</li>
                    </ul>

                    <h3 class="subsection-title">Medidas Físicas</h3>
                    <ul class="legal-list">
                        <li>Acceso restringido a áreas con información sensible</li>
                        <li>Sistemas de videovigilancia</li>
                        <li>Destrucción segura de documentos</li>
                        <li>Almacenamiento seguro de medios físicos</li>
                    </ul>

                    <h2 class="section-title">7. Transferencia de Datos</h2>
                    <p>
                        En caso de transferir datos personales a terceros, garantizamos que:
                    </p>
                    <ul class="legal-list">
                        <li>El receptor asuma las mismas obligaciones de protección</li>
                        <li>Se firmen acuerdos de confidencialidad y protección de datos</li>
                        <li>La transferencia sea necesaria para la prestación del servicio</li>
                        <li>Se informe al titular cuando corresponda</li>
                    </ul>

                    <h2 class="section-title">8. Derechos ARCO</h2>
                    <p>
                        Los titulares de datos personales pueden ejercer los derechos de Acceso, Rectificación, Cancelación y Oposición (ARCO):
                    </p>
                    <ul class="legal-list">
                        <li><strong>Acceso:</strong> Obtener información sobre sus datos personales</li>
                        <li><strong>Rectificación:</strong> Actualizar o corregir datos inexactos</li>
                        <li><strong>Cancelación:</strong> Suprimir datos cuando no sean necesarios</li>
                        <li><strong>Oposición:</strong> Oponerse al tratamiento en situaciones específicas</li>
                    </ul>

                    <h3 class="subsection-title">Procedimiento para ejercer derechos ARCO:</h3>
                    <ol class="legal-list">
                        <li>Presentar solicitud escrita en mesa de partes o al correo [email]</li>
                        <li>Adjuntar copia del DNI o documento de identidad</li>
                        <li>Describir claramente el derecho que desea ejercer</li>
                        <li>Indicar domicilio o correo para notificaciones</li>
                        <li>Plazo de respuesta: 20 días hábiles</li>
                    </ol>

                    <h2 class="section-title">9. Responsabilidades</h2>
                    <p>Todo el personal de Villarrica Tours S.A. está obligado a:</p>
                    <ul class="legal-list">
                        <li>Mantener la confidencialidad de los datos personales</li>
                        <li>Utilizar los datos solo para los fines autorizados</li>
                        <li>Reportar cualquier incidente de seguridad</li>
                        <li>Cumplir con los procedimientos establecidos</li>
                        <li>No divulgar información sin autorización</li>
                    </ul>

                    <h2 class="section-title">10. Sanciones</h2>
                    <p>
                        El incumplimiento de esta política puede resultar en:
                    </p>
                    <ul class="legal-list">
                        <li>Sanciones disciplinarias según el reglamento interno</li>
                        <li>Acciones legales civiles o penales</li>
                        <li>Multas administrativas impuestas por la autoridad</li>
                        <li>Responsabilidad por daños y perjuicios</li>
                    </ul>

                    <h2 class="section-title">11. Vigencia y Actualización</h2>
                    <p>
                        Esta política entra en vigencia desde su publicación y será revisada anualmente o cuando:
                    </p>
                    <ul class="legal-list">
                        <li>Cambien las normas aplicables</li>
                        <li>Se modifiquen los procesos de tratamiento</li>
                        <li>Se identifiquen nuevos riesgos</li>
                        <li>La autoridad lo requiera</li>
                    </ul>

                    <h2 class="section-title">12. Contacto</h2>
                    <p>
                        Para consultas sobre protección de datos personales:
                    </p>
                    <ul class="legal-list">
                        <li><strong>Responsable:</strong> Villarrica Tours S.A.</li>
                        <li><strong>Correo:</strong> turismo@transvillarrica.com</li>
                        <li><strong>Teléfono:</strong> (01) 567-9670</li>
                        <li><strong>Dirección:</strong> Av. Carlos Alberto Izaguirre Mza. C Lote. 7 a.V. Casuarinas de Santa Rosa - San Martin de Porres</li>
                    </ul>

                    <div class="legal-notice">
                        <p class="text-center">
                            <strong>Autoridad Nacional de Protección de Datos Personales</strong><br>
                            www.minjus.gob.pe/proteccion-de-datos-personales/<br>
                            Teléfono: (01) 204-8020
                        </p>
                    </div>

                    <div class="legal-footer">
                        <p class="text-center">
                            <strong>Villarrica Tours S.A.</strong><br>
                            Comprometidos con la protección de sus datos personales
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection