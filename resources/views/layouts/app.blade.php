<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Villarrica Tours S.A. - Transporte de Confianza')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="description" content="@yield('description', 'Transporte de personal y turístico a nivel nacional con {{ date("Y") - 1995 }} años de experiencia. Seguridad, comodidad y confort garantizados.')">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        @font-face {
            font-family: 'Libertinus Mono';
            src: url('{{ asset('fonts/LibertinusMono-Regular.ttf') }}') format('truetype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Signika Negative';
            src: url('{{ asset('fonts/SignikaNegative-VariableFont_wght.ttf') }}') format('truetype');
            font-weight: 300 700;
            font-style: normal;
            font-display: swap;
        }
        
        :root {
            --primary-color: #000000;
            --secondary-color: #32CD32;
            --accent-color: #dc2626;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --white: #ffffff;
            --light-bg: #f8fafc;
            --logo-green: #32CD32;
            --font-mono: 'Libertinus Mono', 'Courier New', monospace;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Signika Negative', 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
        }
        
        .card-title {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
        }
        
        .btn {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        
        .lead {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 400;
        }
        
        p {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 400;
        }
        
        .navbar {
            background: transparent !important;
            backdrop-filter: none;
            transition: all 0.4s ease;
            padding: 1rem 0;
        }
        
        .navbar.scrolled {
            background: rgba(0, 0, 0, 0.95) !important;
            backdrop-filter: blur(10px);
            padding: 0.5rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--white) !important;
            display: flex;
            align-items: center;
            opacity: 0;
            transform: translateX(-20px);
            transition: all 0.4s ease;
        }
        
        .navbar-brand span {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            letter-spacing: -0.5px;
        }
        
        /* En home page - solo aparece al hacer scroll */
        .navbar.scrolled .navbar-brand {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* En páginas interiores - siempre visible */
        .navbar:not(.home-navbar) .navbar-brand {
            opacity: 1;
            transform: translateX(0);
        }
        
        .navbar-brand img {
            height: 35px;
            margin-right: 8px;
        }
        
        .nav-link {
            color: var(--white) !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--secondary-color) !important;
            transform: translateY(-2px);
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #333333 100%);
            color: var(--white);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="white" opacity="0.1"><polygon points="0,100 1000,0 1000,100"/></svg>');
            background-size: cover;
        }
        
        .hero-section-fullscreen {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        
        .hero-image-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 1;
        }
        
        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            transform: none;
        }
        
        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right {
            opacity: 1;
        }
        
        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            opacity: 0;
        }
        
        .carousel-indicators {
            bottom: 20px;
            z-index: 3;
        }
        
        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 2px solid white;
            background: transparent;
            margin: 0 5px;
        }
        
        .carousel-indicators button.active {
            background: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            z-index: 3;
            width: 5%;
        }
        
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 20px 20px;
        }
        
        .hero-content-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 2;
            display: flex;
            align-items: center;
        }
        
        .hero-title {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            font-size: 4rem;
        }
        
        .hero-subtitle {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
            font-size: 1.3rem;
        }
        
        .hero-video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .hero-video-background iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100vw;
            height: 56.25vw; /* 16:9 Aspect Ratio */
            min-height: 100vh;
            min-width: 177.77vh; /* 16:9 Aspect Ratio */
            transform: translate(-50%, -50%);
            pointer-events: none;
        }
        
        .hero-scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
        }
        
        .scroll-arrow {
            color: var(--white);
            font-size: 2rem;
            animation: bounce 2s infinite;
            cursor: pointer;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .hero-logo {
            text-align: center;
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-subtitle {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
            letter-spacing: 1px;
            color: var(--secondary-color) !important;
            font-size: 2.5rem !important;
            animation: fadeInUp 1s ease-out 0.2s;
            animation-fill-mode: both;
        }
        
        .hero-feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(1px);
            border-radius: 15px;
            padding: 1.5rem 1rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: fadeInUp 1s ease-out;
            animation-fill-mode: both;
        }
        
        .hero-feature-card:nth-child(1) {
            animation-delay: 0.3s;
        }
        
        .hero-feature-card:nth-child(2) {
            animation-delay: 0.4s;
        }
        
        .hero-feature-card:nth-child(3) {
            animation-delay: 0.5s;
        }
        
        .hero-feature-card:nth-child(4) {
            animation-delay: 0.6s;
        }
        
        .hero-feature-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border-color: var(--secondary-color);
        }
        
        .hero-feature-icon {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.75rem;
            color: white;
            font-size: 1.25rem;
            transition: all 0.3s ease;
        }
        
        .hero-feature-card:hover .hero-feature-icon {
            background: var(--secondary-color);
            transform: rotateY(360deg);
        }
        
        .hero-cta-buttons {
            animation: fadeInUp 1s ease-out 0.7s;
            animation-fill-mode: both;
        }
        
        .hero-cta-buttons .btn-primary {
            background: var(--secondary-color);
            border: 2px solid var(--secondary-color);
            color: white;
            box-shadow: 0 4px 15px rgba(50, 205, 50, 0.4);
            position: relative;
            overflow: hidden;
        }
        
        .hero-cta-buttons .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }
        
        .hero-cta-buttons .btn-primary:hover::before {
            left: 100%;
        }
        
        .hero-stats {
            margin-top: 3rem;
            animation: fadeInUp 1s ease-out 0.8s;
            animation-fill-mode: both;
        }
        
        .hero-stat {
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .hero-stat:hover {
            transform: scale(1.1);
        }
        
        .hero-stat-number {
            font-family: var(--font-mono);
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary-color);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            line-height: 1;
            animation: pulse 2s infinite;
            letter-spacing: -2px;
        }
        
        .hero-scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
            animation: fadeInUp 1s ease-out 1s;
            animation-fill-mode: both;
        }
        
        .hero-content-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.7) 50%, rgba(0, 0, 0, 0.8) 100%);
            z-index: 2;
            display: flex;
            align-items: center;
        }
        
        .hero-video-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, transparent 0%, rgba(0, 0, 0, 0.2) 100%);
            z-index: 1;
            pointer-events: none;
        }
        
        .min-vh-100 {
            min-height: 100vh;
        }
        
        .feature-card {
            background: var(--white);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--secondary-color), #28a745);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            color: var(--white);
            font-size: 2rem;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.1);
        }
        
        .bg-dark {
            background: var(--primary-color) !important;
        }
        
        .breadcrumb-section {
            border-bottom: 1px solid #e9ecef;
        }
        
        .breadcrumb {
            background: transparent;
            padding: 0;
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
            color: var(--text-light);
            font-weight: bold;
        }
        
        .breadcrumb-item a {
            color: var(--primary-color);
            transition: color 0.3s ease;
        }
        
        .breadcrumb-item a:hover {
            color: var(--secondary-color);
        }
        
        .breadcrumb-item.active {
            color: var(--text-light);
            font-weight: 500;
        }
        
        .btn-primary {
            background: var(--secondary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: #28a745;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(50, 205, 50, 0.3);
        }
        
        .btn-outline-light {
            border: 2px solid var(--white);
            color: var(--white);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-outline-light:hover {
            background: var(--white);
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .section-title {
            font-family: 'Signika Negative', sans-serif;
            font-size: 2.5rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        .fleet-card img {
            transition: transform 0.3s ease;
        }
        
        .fleet-card:hover img {
            transform: scale(1.05);
        }
        
        .gallery-card {
            overflow: hidden;
            border-radius: 15px;
        }
        
        .gallery-card img {
            transition: transform 0.3s ease;
        }
        
        .gallery-card:hover img {
            transform: scale(1.1);
        }
        
        .stats-card {
            background: linear-gradient(135deg, var(--primary-color), #333333);
            color: var(--white);
            text-align: center;
            padding: 2rem;
            border-radius: 15px;
        }
        
        .stats-number {
            font-family: var(--font-mono);
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary-color);
            letter-spacing: -2px;
        }
        
        .footer {
            background: linear-gradient(180deg, #1f2937 0%, #111827 100%);
            color: var(--white);
            padding: 4rem 0 1.5rem;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--secondary-color), transparent);
        }
        
        .footer h5 {
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            font-size: 1.25rem;
            font-weight: 600;
        }
        
        .footer p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1rem;
            line-height: 1.8;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none !important;
            transition: all 0.3s ease;
        }
        
        .footer a:hover {
            color: var(--secondary-color);
            text-decoration: none !important;
        }
        
        .footer ul {
            padding-left: 0;
        }
        
        .footer ul li {
            margin-bottom: 0.75rem;
        }
        
        .footer ul li a {
            display: inline-block;
            padding: 0.25rem 0;
            position: relative;
        }
        
        .footer ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--secondary-color);
            transition: width 0.3s ease;
        }
        
        .footer ul li a:hover::after {
            width: 100%;
        }
        
        .footer hr {
            border-color: rgba(255, 255, 255, 0.1);
            margin: 2rem 0 1.5rem;
        }
        
        .social-links {
            margin-top: 1rem;
        }
        
        .social-links a {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.5rem;
            margin-right: 1rem;
            transition: all 0.3s ease;
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            text-decoration: none !important;
        }
        
        .social-links a:hover {
            color: var(--white);
            background: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(50, 205, 50, 0.3);
        }
        
        .social-links a:last-child {
            margin-right: 0;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .footer-logo img {
            height: 50px;
            margin-right: 15px;
            filter: brightness(1.2);
            transition: transform 0.3s ease;
        }
        
        .footer-logo:hover img {
            transform: scale(1.05);
        }
        
        .footer-logo h5 {
            margin-bottom: 0;
            font-size: 1.5rem;
        }
        
        .footer-copyright {
            background: rgba(0, 0, 0, 0.2);
            padding: 1.5rem 0;
            margin-top: 2rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .footer-copyright p {
            font-family: var(--font-mono);
            font-size: 0.9rem;
            letter-spacing: -0.5px;
        }
        
        .floating-whatsapp {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25d366;
            color: white;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
            animation: whatsappPulse 2s infinite;
            text-decoration: none !important;
        }
        
        .floating-whatsapp:hover {
            transform: scale(1.15);
            color: white;
            animation-play-state: paused;
            text-decoration: none !important;
        }
        
        @keyframes whatsappPulse {
            0% {
                transform: scale(1);
                box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
            }
            50% {
                transform: scale(1.1);
                box-shadow: 0 8px 25px rgba(37, 211, 102, 0.5);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
            }
        }
        
        .service-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        .fleet-card {
            background: var(--white);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .fleet-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .fleet-card .text-primary {
            font-family: var(--font-mono);
            letter-spacing: -0.5px;
        }
        
        .fleet-card .text-muted strong {
            font-family: var(--font-mono);
        }
        
        .contact-info {
            background: var(--light-bg);
            padding: 2rem;
            border-radius: 15px;
            border-left: 4px solid var(--secondary-color);
        }
        
        .contact-info p {
            font-family: var(--font-mono);
            letter-spacing: -0.5px;
        }
        
        /* Clase para counters y números animados */
        .counter {
            font-family: var(--font-mono);
            letter-spacing: -1px;
        }
        
        /* Años y fechas */
        .year-display {
            font-family: var(--font-mono);
            font-weight: 600;
            letter-spacing: -0.5px;
        }
        
        /* Badges con información técnica */
        .badge {
            font-family: var(--font-mono);
            letter-spacing: 0;
        }
        
        /* Carrusel de logos de clientes */
        .clients-carousel-container {
            overflow: hidden;
            width: 100%;
            position: relative;
            background: transparent;
            padding: 3rem 0;
            margin: 1rem 0;
        }
        
        .clients-carousel {
            display: flex;
            animation: scroll 80s linear infinite;
            width: calc(300px * 38); /* 19 logos × 2 copias × 300px ancho (incluye márgenes) */
        }
        
        .client-logo {
            flex: 0 0 280px;
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 30px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 12px;
            margin: 0 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .client-logo img {
            max-width: 220px;
            max-height: 120px;
            object-fit: contain;
            opacity: 0.8;
            transition: all 0.3s ease;
        }
        
        .client-logo:hover {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        
        .client-logo:hover img {
            opacity: 1;
            transform: scale(1.05);
        }
        
        .clients-carousel:hover {
            animation-play-state: paused;
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-300px * 19)); /* Mover el ancho de 19 logos */
            }
        }
        
        /* Gradientes laterales para efecto suave */
        .clients-carousel-container::before,
        .clients-carousel-container::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100px;
            z-index: 10;
            pointer-events: none;
        }
        
        .clients-carousel-container::before {
            left: 0;
            background: linear-gradient(to right, rgba(248, 250, 252, 1), rgba(248, 250, 252, 0));
        }
        
        .clients-carousel-container::after {
            right: 0;
            background: linear-gradient(to left, rgba(248, 250, 252, 1), rgba(248, 250, 252, 0));
        }
        
        /* Estilos para la nueva sección hero */
        .hero-badges .badge {
            font-size: 0.85rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hero-logo {
            text-align: center;
        }
        
        .hero-logo-img {
            max-height: 160px;
            width: auto;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.3));
            transition: transform 0.3s ease;
        }
        
        .hero-logo-img:hover {
            transform: scale(1.05);
        }
        
        .nav-phone {
            color: var(--secondary-color) !important;
            font-family: var(--font-mono);
            font-weight: 600;
            text-decoration: none !important;
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            margin: 0 10px;
            background: rgba(50, 205, 50, 0.1);
            border-radius: 25px;
            border: 1px solid var(--secondary-color);
            transition: all 0.3s ease;
            font-size: 0.9rem;
            letter-spacing: -0.5px;
        }
        
        .nav-phone:hover {
            color: white !important;
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(50, 205, 50, 0.3);
        }
        
        .nav-phone i {
            font-size: 0.8rem;
        }
        
        .hero-description {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
            font-weight: 400;
        }
        
        .hero-feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(1px);
            border-radius: 15px;
            padding: 1.5rem 1rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .hero-feature-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .hero-feature-icon {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0.75rem;
            color: white;
            font-size: 1.25rem;
        }
        
        .hero-cta-buttons .btn {
            padding: 0.75rem 2rem;
            font-weight: 500;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        
        .hero-cta-buttons .btn-primary {
            background: var(--secondary-color);
            border: 2px solid var(--secondary-color);
            color: white;
            box-shadow: 0 4px 15px rgba(50, 205, 50, 0.4);
        }
        
        .hero-cta-buttons .btn-primary:hover {
            background: #28a745;
            border: 2px solid #28a745;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(50, 205, 50, 0.6);
        }
        
        .hero-cta-buttons .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.9);
            color: white;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
        }
        
        .hero-cta-buttons .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.95);
            border: 2px solid white;
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
        }
        
        .hero-stats {
            margin-top: 3rem;
        }
        
        .hero-stat {
            text-align: center;
        }
        
        .hero-stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary-color);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            line-height: 1;
        }
        
        .hero-stat-label {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.8);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0.25rem;
        }
        
        /* Responsive para la nueva sección hero */
        @media (max-width: 768px) {
            .hero-logo-img {
                max-height: 100px;
            }
            
            .hero-subtitle {
                font-size: 1.75rem !important;
            }
            
            .nav-phone {
                font-size: 0.85rem;
                padding: 0.4rem 0.8rem;
                margin: 0.5rem 0;
                justify-content: center;
            }
            
            .hero-description {
                font-size: 1rem;
            }
            
            .hero-feature-card {
                padding: 1rem 0.75rem;
                margin-bottom: 1rem;
            }
            
            .hero-feature-icon {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .hero-cta-buttons .btn {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
                display: block;
                width: 100%;
                margin-bottom: 0.75rem !important;
            }
            
            .hero-stat-number {
                font-size: 2.25rem;
            }
            
            .hero-stat-label {
                font-size: 0.75rem;
            }
            
            .hero-badges .badge {
                font-size: 0.75rem;
                padding: 0.5rem 1rem !important;
                margin-bottom: 0.5rem;
                display: inline-block;
            }
            
            .floating-whatsapp {
                bottom: 20px;
                right: 20px;
                width: 55px;
                height: 55px;
                font-size: 1.4rem;
            }
        }
            background: var(--light-bg);
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 1rem;
        }
        
        .contact-info i {
            color: var(--secondary-color);
            font-size: 1.5rem;
            margin-right: 1rem;
        }
        
        /* Partículas animadas */
        .particles-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 2;
            pointer-events: none;
        }
        
        .particle {
            position: absolute;
            background: var(--secondary-color);
            width: 4px;
            height: 4px;
            border-radius: 50%;
            opacity: 0;
            animation: particleAnimation 10s infinite;
            box-shadow: 0 0 10px var(--secondary-color);
        }
        
        .particle:nth-child(1) {
            left: 10%;
            animation-delay: 0s;
            animation-duration: 8s;
        }
        
        .particle:nth-child(2) {
            left: 20%;
            animation-delay: 1s;
            animation-duration: 10s;
        }
        
        .particle:nth-child(3) {
            left: 30%;
            animation-delay: 2s;
            animation-duration: 12s;
        }
        
        .particle:nth-child(4) {
            left: 40%;
            animation-delay: 3s;
            animation-duration: 9s;
        }
        
        .particle:nth-child(5) {
            left: 50%;
            animation-delay: 4s;
            animation-duration: 11s;
        }
        
        .particle:nth-child(6) {
            left: 60%;
            animation-delay: 5s;
            animation-duration: 8s;
        }
        
        .particle:nth-child(7) {
            left: 70%;
            animation-delay: 6s;
            animation-duration: 10s;
        }
        
        .particle:nth-child(8) {
            left: 80%;
            animation-delay: 7s;
            animation-duration: 12s;
        }
        
        @keyframes particleAnimation {
            0% {
                bottom: -10px;
                opacity: 0;
                transform: translateX(0);
            }
            10% {
                opacity: 1;
            }
            50% {
                transform: translateX(100px);
            }
            90% {
                opacity: 1;
            }
            100% {
                bottom: 110%;
                opacity: 0;
                transform: translateX(-100px);
            }
        }
        
        /* Efecto de texto que aparece letra por letra */
        @keyframes typewriter {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }
        
        /* Efecto glow para elementos importantes */
        @keyframes glow {
            0% {
                box-shadow: 0 0 5px var(--secondary-color);
            }
            50% {
                box-shadow: 0 0 20px var(--secondary-color), 0 0 30px var(--secondary-color);
            }
            100% {
                box-shadow: 0 0 5px var(--secondary-color);
            }
        }
        
        .btn-primary:hover {
            animation: glow 1.5s ease-in-out infinite;
        }
        
        /* Efecto de líneas decorativas animadas */
        .hero-section-fullscreen::before {
            content: '';
            position: absolute;
            top: 50%;
            left: -100%;
            width: 200%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--secondary-color), transparent);
            animation: scanline 8s linear infinite;
            z-index: 2;
            opacity: 0.5;
        }
        
        @keyframes scanline {
            0% {
                left: -100%;
            }
            100% {
                left: 100%;
            }
        }
        
        /* Estilos para el carrusel de imágenes de servicios */
        .service-image-container {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            background: #f8f9fa;
        }
        
        .service-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        
        .service-image.active {
            opacity: 1;
            z-index: 2;
        }
        
        /* Efecto de superposición de gradiente para mejorar la legibilidad */
        .service-image-container::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 80px;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%);
            z-index: 5;
            opacity: 0.3;
            transition: opacity 0.3s ease;
        }
        
        .card:hover .service-image-container::after {
            opacity: 0.6;
        }
        
        /* Efecto parallax sutil al hacer hover */
        .card:hover .service-image.active {
            transform: scale(1.05);
            transition: transform 0.5s ease;
        }
        
        .service-image:not(.active) {
            transform: scale(1);
        }
        
        /* Indicadores de imagen */
        .service-image-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }
        
        .service-image-indicator {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .service-image-indicator.active {
            width: 24px;
            border-radius: 4px;
            background: var(--secondary-color);
        }
        
        /* Hover effect en la tarjeta */
        .card:hover .service-image.active {
            filter: brightness(1.1);
        }
        
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            
            .hero-section {
                padding: 80px 0 60px;
            }
            
            .hero-title {
                font-size: 2.5rem !important;
            }
            
            .hero-subtitle {
                font-size: 1.1rem !important;
            }
            
            .hero-video-background iframe {
                width: 100vw;
                height: 100vh;
                object-fit: cover;
            }
            
            /* Ajustes para carrusel en móvil */
            .client-logo {
                flex: 0 0 200px;
                height: 100px;
                padding: 0 20px;
                margin: 0 5px;
                background: rgba(255, 255, 255, 0.7);
                border-radius: 8px;
            }
            
            .client-logo img {
                max-width: 160px;
                max-height: 80px;
            }
            
            .clients-carousel {
                width: calc(210px * 38);
                animation: scroll 60s linear infinite;
            }
            
            @keyframes scroll {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-210px * 19));
                }
            }
            
            .clients-carousel-container::before,
            .clients-carousel-container::after {
                width: 50px;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Villarrica Tours S.A.">
                <span>Villarrica Tours</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('quienes-somos') }}">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nuestra-flota') }}">Nuestra Flota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="tel:+5115679670" class="nav-phone">
                            <i class="fas fa-phone me-1"></i>
                            <span>(511) 567-9670</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-logo">
                        <img src="{{ asset('images/logo.png') }}" alt="Villarrica Tours S.A.">
                        <h5>Villarrica Tours S.A.</h5>
                    </div>
                    <p>{{ date("Y") - 1995 }} años de confianza en el transporte de personal y turístico a nivel nacional.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100064287904488" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/villarrica_tours_sa/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/51954778370" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:turismo@transvillarrica.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Información Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Política de Privacidad</a></li>
                        <li><a href="#" class="text-light">Política de Protección de Datos</a></li>
                        <li><a href="#" class="text-light">Política de Cookies</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Homologaciones</h5>
                    <p>ISO9001 BUREAU VERITAS Certification</p>
                    <p>Corporación HODELPE – Homologaciones Perú</p>
                </div>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="mb-0">&copy; 2024 Villarrica Tours S.A. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/51954778370" class="floating-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });
        
        // Detect if we're on home page and add appropriate class
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            const currentPath = window.location.pathname;
            const isHomePage = currentPath === '/' || currentPath === '/home' || currentPath.includes('home');
            
            if (isHomePage) {
                navbar.classList.add('home-navbar');
            }
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scroll for hero arrow
        document.addEventListener('DOMContentLoaded', function() {
            const scrollArrow = document.querySelector('.scroll-arrow');
            if (scrollArrow) {
                scrollArrow.addEventListener('click', function() {
                    const statsSection = document.querySelector('.bg-dark');
                    if (statsSection) {
                        statsSection.scrollIntoView({ 
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            }
        });
        
        // Counter Animation for Hero Stats
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.getAttribute('data-count'));
                        const suffix = counter.getAttribute('data-suffix') || '';
                        const duration = 2000; // 2 seconds
                        const increment = target / (duration / 16); // 60 FPS
                        let current = 0;
                        
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            counter.textContent = Math.floor(current) + suffix;
                        }, 16);
                        
                        observer.unobserve(counter);
                    }
                });
            }, observerOptions);
            
            counters.forEach(counter => {
                observer.observe(counter);
            });
        }
        
        // Initialize counter animation when DOM is ready
        document.addEventListener('DOMContentLoaded', animateCounters);
    </script>
    
    @yield('scripts')
</body>
</html> 