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
        
        /* Enhanced Feature Cards */
        .feature-card-enhanced {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }
        
        .feature-card-enhanced.premium {
            border: 2px solid rgba(50, 205, 50, 0.3);
            background: linear-gradient(135deg, #ffffff 0%, #f8fff8 100%);
        }
        
        .feature-card-enhanced:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .feature-card-enhanced.premium:hover {
            border-color: var(--secondary-color);
            box-shadow: 0 25px 50px rgba(50, 205, 50, 0.2);
        }
        
        .feature-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 2;
        }
        
        .feature-badge.guaranteed {
            background: linear-gradient(135deg, #28a745, var(--secondary-color));
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
        }
        
        .feature-badge.tech {
            background: linear-gradient(135deg, #007bff, #0056b3);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        }
        
        .feature-badge.always-on {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            box-shadow: 0 4px 12px rgba(255, 107, 53, 0.3);
        }
        
        .feature-icon-enhanced {
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
            transition: all 0.4s ease;
            position: relative;
        }
        
        .feature-card-enhanced:hover .feature-icon-enhanced {
            transform: scale(1.15) rotateY(360deg);
            box-shadow: 0 15px 30px rgba(50, 205, 50, 0.4);
        }
        
        .feature-icon-enhanced.gps-pulse {
            animation: gps-signal 2s infinite;
        }
        
        @keyframes gps-signal {
            0%, 100% { box-shadow: 0 0 0 0 rgba(50, 205, 50, 0.7); }
            50% { box-shadow: 0 0 0 15px rgba(50, 205, 50, 0); }
        }
        
        .pulse-number {
            animation: pulse-text 2s infinite;
        }
        
        @keyframes pulse-text {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .feature-cta-hover {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
            margin-top: 15px;
        }
        
        .feature-card-enhanced:hover .feature-cta-hover {
            opacity: 1;
            transform: translateY(0);
        }
        
        .btn-feature-sm {
            background: linear-gradient(135deg, var(--secondary-color), #28a745);
            border: none;
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.85rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .btn-feature-sm:hover {
            background: linear-gradient(135deg, #28a745, var(--secondary-color));
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(50, 205, 50, 0.3);
            color: white;
            text-decoration: none;
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
            padding: 2.5rem 0 1rem;
            position: relative;
            overflow: hidden;
            font-family: 'Signika Negative', sans-serif;
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
            margin-bottom: 1rem;
            font-size: 1.1rem;
            font-weight: 600;
            font-family: 'Signika Negative', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .footer p {
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 0.75rem;
            line-height: 1.6;
            font-family: 'Signika Negative', sans-serif;
            font-size: 0.95rem;
        }
        
        .footer a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none !important;
            transition: all 0.3s ease;
            font-family: 'Signika Negative', sans-serif;
        }
        
        .footer a:hover {
            color: var(--secondary-color);
            text-decoration: none !important;
        }
        
        .footer ul {
            padding-left: 0;
        }
        
        .footer ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer ul li a {
            display: inline-block;
            padding: 0.15rem 0;
            position: relative;
            font-size: 0.95rem;
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
            margin: 1.5rem 0 1rem;
        }
        
        .social-links {
            margin-top: 0.75rem;
        }
        
        .social-links a {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.3rem;
            margin-right: 0.75rem;
            transition: all 0.3s ease;
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            text-decoration: none !important;
        }
        
        .social-links a:hover {
            color: var(--white);
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(50, 205, 50, 0.3);
        }
        
        .social-links a:last-child {
            margin-right: 0;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .footer-logo img {
            height: 42px;
            margin-right: 12px;
            filter: brightness(1.2);
            transition: transform 0.3s ease;
        }
        
        .footer-logo:hover img {
            transform: scale(1.05);
        }
        
        .footer-logo h5 {
            margin-bottom: 0;
            font-size: 1.3rem;
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: var(--secondary-color);
        }
        
        .footer-copyright {
            background: rgba(0, 0, 0, 0.2);
            padding: 1rem 0 0.75rem;
            margin-top: 1.5rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .footer-copyright p {
            font-family: 'Signika Negative', sans-serif;
            font-size: 0.85rem;
            margin-bottom: 0.25rem;
            letter-spacing: 0;
        }
        
        /* Homologación logos en footer */
        .homologation-logos {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .homologation-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .homologation-item img {
            max-width: 80px;
            max-height: 50px;
            object-fit: contain;
            margin-bottom: 0.5rem;
            filter: brightness(1.2);
            transition: all 0.3s ease;
        }
        
        .homologation-item:hover img {
            transform: scale(1.1);
            filter: brightness(1.4);
        }
        
        .homologation-item small {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.75rem;
            line-height: 1.2;
        }
        
        /* Certificaciones en la sección principal */
        .certifications-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
            margin-top: 1rem;
        }
        
        .certification-item {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem;
            background: rgba(0, 0, 0, 0.02);
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .certification-item:hover {
            background: rgba(50, 205, 50, 0.1);
            transform: translateY(-2px);
        }
        
        .certification-item img {
            max-width: 60px;
            max-height: 40px;
            object-fit: contain;
            transition: all 0.3s ease;
        }
        
        .certification-item:hover img {
            transform: scale(1.1);
        }
        
        /* Nueva sección de certificaciones global */
        .certifications-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .certifications-title {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 2rem;
        }
        
        .certifications-logos-container {
            display: flex;
            justify-content: center;
            align-items: stretch;
            gap: 2rem;
            flex-wrap: wrap;
        }
        
        .certification-logo-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: all 0.3s ease;
            padding: 1.5rem 1rem;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.7);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            width: 200px;
            height: 160px;
            flex: 0 0 200px;
        }
        
        .certification-logo-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.9);
        }
        
        .certification-logo-item img {
            max-width: 120px;
            max-height: 80px;
            object-fit: contain;
            margin-bottom: 0.75rem;
            transition: all 0.3s ease;
        }
        
        .certification-logo-item:hover img {
            transform: scale(1.05);
        }
        
        .certification-logo-item span {
            font-family: 'Signika Negative', sans-serif;
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-dark);
            line-height: 1.3;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        
        .certification-logo-item:hover span {
            opacity: 1;
        }
        
        /* Información de contacto en footer */
        .contact-info-footer p {
            font-family: 'Signika Negative', sans-serif;
            font-size: 0.9rem;
            margin-bottom: 0.4rem;
            color: rgba(255, 255, 255, 0.85);
        }
        
        .contact-info-footer i {
            color: var(--secondary-color);
            width: 18px;
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
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .fleet-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .fleet-card h4 {
            font-family: 'Signika Negative', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 600;
        }
        
        .fleet-card h5 {
            font-family: 'Signika Negative', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 500;
        }
        
        .fleet-card h6 {
            font-family: 'Signika Negative', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 500;
        }
        
        .fleet-card p {
            font-family: 'Signika Negative', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .fleet-card .fw-bold {
            font-family: var(--font-mono);
            letter-spacing: -0.5px;
        }
        
        .fleet-card .text-muted {
            font-family: 'Signika Negative', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .fleet-card .text-muted strong {
            font-family: 'Signika Negative', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-weight: 600;
        }
        
        .capacity-diagram {
            background: rgba(0, 123, 255, 0.05);
            border-radius: 8px;
            padding: 8px;
            margin-top: 8px;
            border: 1px solid rgba(0, 123, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .capacity-diagram:hover {
            background: rgba(0, 123, 255, 0.1);
            transform: scale(1.05);
        }
        
        .capacity-diagram img {
            transition: all 0.3s ease;
        }
        
        /* Diseño Comercial de Tarjetas de Flota */
        .fleet-card-commercial {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .fleet-card-commercial:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .fleet-header {
            position: relative;
            overflow: hidden;
            border-radius: 20px 20px 0 0;
        }
        
        .fleet-header img {
            height: 180px;
            width: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        
        .fleet-card-commercial:hover .fleet-header img {
            transform: scale(1.08);
        }
        
        .fleet-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--secondary-color), #28a745);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(50, 205, 50, 0.3);
        }
        
        .fleet-badge.popular {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
        }
        
        .fleet-badge.compact {
            background: linear-gradient(135deg, #667eea, #764ba2);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }
        
        .fleet-title {
            padding: 18px 20px 12px;
            text-align: center;
        }
        
        .fleet-title h3 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 700;
            font-size: 1.6rem;
            color: var(--primary-color);
            margin-bottom: 6px;
        }
        
        .fleet-subtitle {
            color: var(--text-light);
            font-size: 0.95rem;
            margin: 0;
            font-style: italic;
        }
        
        .fleet-capacity-highlight {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            margin: 0 18px 16px;
            padding: 16px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 2px solid var(--primary-color);
            position: relative;
            overflow: hidden;
        }
        
        .fleet-capacity-highlight::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
        }
        
        .capacity-main {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .capacity-number {
            font-family: var(--font-mono);
            font-size: 1.9rem;
            font-weight: 900;
            color: var(--primary-color);
            line-height: 1;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .capacity-label {
            font-weight: 600;
            color: var(--secondary-color);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 4px;
        }
        
        .capacity-visual {
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }
        
        .capacity-img {
            max-height: 42px;
            width: auto;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.15));
        }
        
        .fleet-specs {
            padding: 0 20px 12px;
        }
        
        .spec-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px 0;
        }
        
        .spec-label {
            color: var(--text-muted);
            font-weight: 500;
        }
        
        .spec-value {
            font-family: var(--font-mono);
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .fleet-brands {
            padding: 0 20px 16px;
            flex-grow: 1;
        }
        
        .fleet-brands h6 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 0.85rem;
        }
        
        .brands-list {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }
        
        .brand-tag {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            color: var(--primary-color);
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            border: 1px solid rgba(25, 118, 210, 0.2);
            transition: all 0.3s ease;
        }
        
        .brand-tag:hover {
            background: linear-gradient(135deg, #bbdefb, #90caf9);
            transform: translateY(-1px);
        }
        
        .fleet-cta {
            padding: 0 20px 20px;
            margin-top: auto;
        }
        
        .btn-fleet-primary {
            background: linear-gradient(135deg, var(--secondary-color), #28a745);
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            width: 100%;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 6px 20px rgba(50, 205, 50, 0.3);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        
        .btn-fleet-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }
        
        .btn-fleet-primary:hover {
            background: linear-gradient(135deg, #28a745, var(--secondary-color));
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 35px rgba(50, 205, 50, 0.4);
        }
        
        .btn-fleet-primary:hover::before {
            left: 100%;
        }
        
        .btn-fleet-primary:active {
            transform: translateY(-1px) scale(1.01);
        }
        
        /* Professional Fleet Showcase */
        .professional-fleet-showcase {
            position: relative;
            margin-bottom: 2rem;
        }
        
        .professional-fleet-showcase img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
        }
        
        .fleet-overlay {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        
        .fleet-badge {
            background: linear-gradient(135deg, rgba(25, 118, 210, 0.95), rgba(21, 101, 192, 0.95));
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 8px 25px rgba(25, 118, 210, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        @media (max-width: 768px) {
            .professional-fleet-showcase img {
                height: 250px;
            }
            
            .fleet-badge {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
        }
        
        /* Location Navigation Options */
        .location-info-card {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 20px;
        }
        
        .location-header {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .location-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), #1565c0);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: white;
            font-size: 24px;
        }
        
        .navigation-options {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .nav-option-card {
            background: var(--white);
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 15px;
            transition: all 0.3s ease;
        }
        
        .nav-option-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(25, 118, 210, 0.15);
        }
        
        .nav-option-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }
        
        .nav-option-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: white;
        }
        
        .nav-option-card.waze .nav-option-icon {
            background: linear-gradient(135deg, #33ccff, #0099cc);
        }
        
        .nav-option-card.google-maps .nav-option-icon {
            background: linear-gradient(135deg, #4285f4, #1a73e8);
        }
        
        .nav-option-card.apple-maps .nav-option-icon {
            background: linear-gradient(135deg, #007aff, #0056cc);
        }
        
        .nav-option-info h6 {
            margin: 0;
            font-weight: 600;
            color: var(--dark);
        }
        
        .nav-option-info small {
            color: #6c757d;
            font-size: 0.8rem;
        }
        
        .btn-nav-waze,
        .btn-nav-google,
        .btn-nav-apple {
            width: 100%;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        
        .btn-nav-waze {
            background: linear-gradient(135deg, #33ccff, #0099cc);
            color: white;
        }
        
        .btn-nav-google {
            background: linear-gradient(135deg, #4285f4, #1a73e8);
            color: white;
        }
        
        .btn-nav-apple {
            background: linear-gradient(135deg, #007aff, #0056cc);
            color: white;
        }
        
        .btn-nav-waze:hover,
        .btn-nav-google:hover,
        .btn-nav-apple:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: white;
        }
        
        .location-details {
            border-top: 1px solid #e9ecef;
            padding-top: 20px;
        }
        
        .address-info {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid var(--primary-color);
        }
        
        .schedule-compact {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .schedule-item-compact {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 4px solid var(--primary-color);
            position: relative;
        }
        
        .schedule-item-compact.highlight {
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            border-left-color: #28a745;
        }
        
        .schedule-day {
            display: flex;
            align-items: center;
            font-weight: 600;
        }
        
        .schedule-time {
            text-align: right;
            font-size: 0.85rem;
            color: #495057;
        }
        
        .always-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: linear-gradient(135deg, #28a745, #1e7e34);
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.65rem;
            font-weight: 700;
            box-shadow: 0 2px 8px rgba(40, 167, 69, 0.3);
        }
        
        .quick-contact-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .quick-contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: #f8f9fa;
            border-radius: 10px;
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }
        
        .quick-contact-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
            text-decoration: none;
            color: inherit;
        }
        
        .quick-contact-icon {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
        }
        
        .quick-contact-icon.phone {
            background: linear-gradient(135deg, var(--primary-color), #1565c0);
        }
        
        .quick-contact-icon.mobile {
            background: linear-gradient(135deg, #ff6b6b, #ee5a6f);
        }
        
        .quick-contact-icon.whatsapp {
            background: linear-gradient(135deg, #25d366, #128c7e);
        }
        
        .quick-contact-icon.email {
            background: linear-gradient(135deg, #6c757d, #495057);
        }
        
        .quick-contact-info {
            flex: 1;
        }
        
        .quick-contact-info small {
            display: block;
            color: #6c757d;
            font-size: 0.75rem;
        }
        
        .quick-contact-info strong {
            display: block;
            color: var(--dark);
            font-size: 0.9rem;
        }
        
        .social-quick-links {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }
        
        .social-quick-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 8px;
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .social-quick-item:hover {
            transform: translateY(-2px);
            text-decoration: none;
            color: white;
        }
        
        .social-quick-item.facebook:hover {
            background: #1877f2;
        }
        
        .social-quick-item.instagram:hover {
            background: linear-gradient(135deg, #f58529, #dd2a7b, #8134af);
        }
        
        .social-quick-item.whatsapp:hover {
            background: #25d366;
        }
        
        .social-quick-item.email:hover {
            background: #6c757d;
        }
        
        @media (max-width: 768px) {
            .location-info-card {
                margin-top: 20px;
                position: static;
            }
        }
        
        /* Diseño Comercial de Tarjetas de Servicios */
        .service-card-commercial {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .service-card-commercial:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .service-header {
            position: relative;
            overflow: hidden;
            border-radius: 20px 20px 0 0;
        }
        
        .service-image-container {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .service-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: all 0.6s ease;
        }
        
        .service-image.active {
            opacity: 1;
        }
        
        .service-card-commercial:hover .service-image.active {
            transform: scale(1.08);
        }
        
        .service-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 2;
        }
        
        .service-badge.professional {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
        }
        
        .service-badge.premium {
            background: linear-gradient(135deg, #7c2d12, #ea580c);
            box-shadow: 0 4px 15px rgba(124, 45, 18, 0.3);
        }
        
        .service-content {
            padding: 24px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .service-icon-wrapper {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .service-icon-modern {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--secondary-color), #28a745);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            box-shadow: 0 8px 25px rgba(50, 205, 50, 0.3);
            transition: all 0.3s ease;
        }
        
        .service-card-commercial:hover .service-icon-modern {
            transform: scale(1.1) rotateY(360deg);
            box-shadow: 0 12px 35px rgba(50, 205, 50, 0.4);
        }
        
        .service-title-section {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .service-title-main {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 700;
            font-size: 1.7rem;
            color: var(--primary-color);
            margin-bottom: 8px;
        }
        
        .service-level {
            display: inline-block;
        }
        
        .level-indicator {
            background: linear-gradient(135deg, var(--primary-color), #1976d2);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: lowercase;
            font-style: italic;
            box-shadow: 0 4px 12px rgba(25, 118, 210, 0.3);
        }
        
        .service-description {
            text-align: center;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .service-description p {
            color: var(--text-muted);
            line-height: 1.6;
            font-size: 0.95rem;
        }
        
        .service-features {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }
        
        .feature-tag {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            color: var(--primary-color);
            padding: 8px 14px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            border: 1px solid rgba(25, 118, 210, 0.1);
            transition: all 0.3s ease;
        }
        
        .feature-tag:hover {
            background: linear-gradient(135deg, #e0f2fe, #b3e5fc);
            transform: translateY(-2px);
        }
        
        .feature-tag i {
            font-size: 0.75rem;
        }
        
        .service-cta {
            text-align: center;
        }
        
        .btn-service-primary {
            background: linear-gradient(135deg, var(--secondary-color), #28a745);
            border: none;
            color: white;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 6px 20px rgba(50, 205, 50, 0.3);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        
        .btn-service-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }
        
        .btn-service-primary:hover {
            background: linear-gradient(135deg, #28a745, var(--secondary-color));
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 35px rgba(50, 205, 50, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .btn-service-primary:hover::before {
            left: 100%;
        }
        
        .btn-service-primary:active {
            transform: translateY(-1px) scale(1.02);
        }
        
        /* Diseño Comercial de Sección About */
        .about-section-commercial {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }
        
        .about-section-commercial::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="%23007bff" opacity="0.03"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }
        
        .about-content-commercial {
            position: relative;
            z-index: 2;
        }
        
        .about-badge {
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .about-badge .badge-text {
            background: linear-gradient(135deg, var(--secondary-color), #28a745);
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(50, 205, 50, 0.3);
        }
        
        .about-title-main {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 16px;
            line-height: 1.2;
        }
        
        .about-subtitle-highlight {
            margin-bottom: 24px;
        }
        
        .highlight-text {
            background: linear-gradient(135deg, var(--primary-color), #1976d2);
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            font-size: 1.3rem;
            font-weight: 700;
            display: inline-block;
            box-shadow: 0 6px 20px rgba(25, 118, 210, 0.3);
            position: relative;
        }
        
        .about-story {
            margin-bottom: 32px;
        }
        
        .story-lead {
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--text-dark);
            line-height: 1.7;
            margin-bottom: 20px;
        }
        
        .story-detail {
            font-size: 1rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 0;
        }
        
        .btn-about-primary {
            background: linear-gradient(135deg, var(--secondary-color), #28a745);
            border: none;
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 8px 25px rgba(50, 205, 50, 0.3);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
        }
        
        .btn-about-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }
        
        .btn-about-primary:hover {
            background: linear-gradient(135deg, #28a745, var(--secondary-color));
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 15px 35px rgba(50, 205, 50, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .btn-about-primary:hover::before {
            left: 100%;
        }
        
        .about-visual-section {
            position: relative;
        }
        
        .trajectory-card-commercial {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 24px;
            transition: all 0.3s ease;
        }
        
        .trajectory-card-commercial:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }
        
        .trajectory-header {
            position: relative;
            overflow: hidden;
        }
        
        .trajectory-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        
        .trajectory-card-commercial:hover .trajectory-img {
            transform: scale(1.05);
        }
        
        .trajectory-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.7) 100%);
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }
        
        .trajectory-badge .badge-text {
            background: linear-gradient(135deg, var(--primary-color), #1976d2);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 4px 12px rgba(25, 118, 210, 0.4);
        }
        
        .trajectory-content {
            padding: 20px;
        }
        
        .trajectory-text {
            color: var(--text-muted);
            margin: 0;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .about-stats-commercial {
            background: linear-gradient(135deg, var(--primary-color), #1565c0);
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 15px 35px rgba(25, 118, 210, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .about-stats-commercial::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--secondary-color), #28a745);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .stat-item-commercial {
            text-align: center;
            padding: 16px 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .stat-item-commercial:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-3px);
        }
        
        .stat-number-about {
            font-family: var(--font-mono);
            font-size: 2.2rem;
            font-weight: 900;
            color: var(--secondary-color);
            line-height: 1;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 8px;
        }
        
        .stat-label-about {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .about-title-main {
                font-size: 2rem;
            }
            
            .highlight-text {
                font-size: 1.1rem;
                padding: 10px 20px;
            }
            
            .stat-number-about {
                font-size: 1.8rem;
            }
        }
        
        /* Legal Content Styles */
        .legal-content {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .update-date {
            background: linear-gradient(135deg, #f0f4f8, #e2e8f0);
            padding: 12px 20px;
            border-radius: 10px;
            display: inline-block;
            font-size: 0.9rem;
            color: var(--text-muted);
            font-weight: 500;
        }
        
        .legal-content .section-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-top: 40px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }
        
        .legal-content .subsection-title {
            color: var(--secondary-color);
            font-weight: 600;
            margin-top: 25px;
            margin-bottom: 15px;
        }
        
        .legal-list {
            list-style: none;
            padding-left: 0;
        }
        
        .legal-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
            line-height: 1.6;
        }
        
        .legal-list li::before {
            content: "▸";
            position: absolute;
            left: 0;
            color: var(--secondary-color);
            font-weight: bold;
        }
        
        .principle-card {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .principle-card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .principle-card h4 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .principle-card p {
            margin-bottom: 0;
            color: var(--text-muted);
        }
        
        .legal-notice {
            background: #e3f2fd;
            padding: 20px;
            border-radius: 10px;
            margin: 30px 0;
            border: 1px solid #90caf9;
        }
        
        .legal-footer {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 2px solid #e9ecef;
        }
        
        .cookie-type-card {
            background: white;
            border: 1px solid #e9ecef;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .cookie-type-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transform: translateY(-3px);
        }
        
        .cookie-type-title {
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .cookie-settings-box {
            background: linear-gradient(135deg, var(--primary-color), #1976d2);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin: 40px 0;
            text-align: center;
        }
        
        .cookie-settings-box h3 {
            color: white;
        }
        
        .cookie-settings-box p {
            color: rgba(255, 255, 255, 0.9);
        }
        
        @media (max-width: 768px) {
            .legal-content {
                padding: 20px;
            }
        }
        
        /* Powered by styling */
        .powered-by {
            font-family: 'Signika Negative', sans-serif;
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 6px;
        }
        
        .powered-link {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            transition: all 0.3s ease;
            font-family: 'Signika Negative', sans-serif;
        }
        
        .powered-link:hover {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
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
        }
        
        /* Advantage Cards - Comercial Design */
        .advantage-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            padding: 2rem 1.5rem;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }
        
        .advantage-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }
        
        .advantage-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
            border-color: rgba(50, 205, 50, 0.2);
        }
        
        .advantage-card:hover::before {
            transform: scaleX(1);
        }
        
        .advantage-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .advantage-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .advantage-icon.certified {
            background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
            color: #b8860b;
        }
        
        .advantage-icon.experience {
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            color: #d63031;
        }
        
        .advantage-icon.technology {
            background: linear-gradient(135deg, #4ecdc4 0%, #6eddd6 100%);
            color: #00b894;
        }
        
        .advantage-card:hover .advantage-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        .advantage-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }
        
        .advantage-badge .badge-text {
            color: white;
        }
        
        .advantage-badge {
            background: linear-gradient(135deg, #32cd32 0%, #228b22 100%);
        }
        
        .advantage-badge.popular {
            background: linear-gradient(135deg, #ff6b6b 0%, #e74c3c 100%);
        }
        
        .advantage-badge.tech {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
        }
        
        .advantage-content h5 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }
        
        .advantage-content p {
            font-family: 'Signika Negative', sans-serif;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.25rem;
        }
        
        .advantage-benefit {
            display: flex;
            align-items: center;
            font-family: 'Signika Negative', sans-serif;
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--text-dark);
            padding: 0.5rem 0;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .advantage-benefit i {
            font-size: 1rem;
        }
        
        /* Contact Page Commercial Styles */
        .hero-benefits {
            margin-top: 2rem;
        }
        
        .hero-benefit-item {
            background: rgba(255, 255, 255, 0.15);
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            color: white;
            font-family: 'Signika Negative', sans-serif;
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .hero-benefit-item:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }
        
        /* Trust Cards */
        .trust-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2rem 1.5rem;
            height: 100%;
            text-align: center;
            position: relative;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .trust-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        .trust-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .trust-icon.guarantee {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
            color: white;
        }
        
        .trust-icon.experience {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
        }
        
        .trust-icon.safety {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
        }
        
        .trust-card:hover .trust-icon {
            transform: scale(1.1) rotate(10deg);
        }
        
        .trust-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
        }
        
        .trust-badge.popular {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
        }
        
        .trust-badge.safe {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        }
        
        .trust-badge .badge-text {
            color: white;
        }
        
        .trust-card h5 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }
        
        /* Legal Compliance Cards */
        .legal-compliance-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .legal-compliance-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        
        .compliance-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .compliance-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }
        
        .compliance-icon.vehicle-insurance {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
        }
        
        .compliance-icon.personnel-benefits {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
        }
        
        .compliance-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .compliance-badge.certified {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
            color: white;
        }
        
        .compliance-badge.premium {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
        }
        
        .compliance-content h4 {
            font-family: 'Signika Negative', sans-serif;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }
        
        .compliance-description {
            color: #6c757d;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }
        
        .compliance-features {
            margin-bottom: 1.5rem;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0.75rem;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }
        
        .feature-item i {
            font-size: 1.2rem;
            margin-right: 1rem;
            width: 24px;
        }
        
        .feature-info h6 {
            margin: 0;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.9rem;
        }
        
        .feature-info small {
            color: #6c757d;
            font-size: 0.8rem;
        }
        
        .compliance-guarantee {
            padding: 0.75rem 1rem;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            color: var(--text-dark);
        }
        
        /* Trust Indicators */
        .trust-indicators {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
            padding: 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }
        
        .trust-item {
            text-align: center;
            padding: 1rem;
        }
        
        .trust-number {
            font-family: 'Libertinus Mono', monospace;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1;
            margin-bottom: 0.5rem;
        }
        
        .trust-label {
            font-family: 'Signika Negative', sans-serif;
            font-size: 0.9rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .trust-indicators {
                gap: 1rem;
            }
            
            .trust-number {
                font-size: 2rem;
            }
            
            .feature-item {
                flex-direction: column;
                text-align: center;
            }
            
            .feature-item i {
                margin-right: 0;
                margin-bottom: 0.5rem;
            }
        }

        /* Compliance Trust Message */
        .compliance-trust-message {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            border-radius: 25px;
            padding: 3rem 2rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .compliance-trust-message::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 1;
        }
        
        .trust-message-content {
            display: flex;
            align-items: center;
            gap: 2rem;
            position: relative;
            z-index: 2;
        }
        
        .trust-message-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            flex-shrink: 0;
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.3);
            position: relative;
        }
        
        .trust-message-icon::before {
            content: '';
            position: absolute;
            inset: -3px;
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.3), rgba(40, 167, 69, 0.3));
            border-radius: 50%;
            z-index: -1;
            animation: pulse-trust 2s ease-in-out infinite;
        }
        
        @keyframes pulse-trust {
            0%, 100% {
                transform: scale(1);
                opacity: 0.7;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.3;
            }
        }
        
        .trust-message-text {
            flex: 1;
        }
        
        .trust-message-text h4 {
            font-family: 'Signika Negative', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: white;
        }
        
        .trust-message-text p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            line-height: 1.6;
        }
        
        .trust-message-cta {
            flex-shrink: 0;
        }
        
        .btn-trust-cta {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        
        .btn-trust-cta:hover {
            background: linear-gradient(135deg, #28a745 0%, var(--secondary-color) 100%);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.4);
        }
        
        @media (max-width: 768px) {
            .trust-message-content {
                flex-direction: column;
                text-align: center;
                gap: 1.5rem;
            }
            
            .trust-message-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .trust-message-text h4 {
                font-size: 1.25rem;
            }
            
            .compliance-trust-message {
                padding: 2rem 1.5rem;
            }
        }

        /* About Page Commercial Styles */
        .about-hero-commercial {
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .min-vh-75 {
            min-height: 75vh;
        }
        
        .hero-trust-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            backdrop-filter: blur(10px);
            margin-bottom: 1rem;
        }
        
        .trust-years {
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .hero-title-impact {
            font-size: 3.5rem;
            line-height: 1.2;
        }
        
        .hero-subtitle-commercial {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-stats-commercial {
            margin-top: 3rem;
        }
        
        .hero-stat-commercial {
            background: rgba(255, 255, 255, 0.15);
            padding: 1.5rem 1rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .hero-stat-commercial:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.25);
        }
        
        .hero-stat-number-big {
            font-family: 'Libertinus Mono', monospace;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            line-height: 1;
        }
        
        .hero-stat-label-commercial {
            color: white;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            font-weight: 500;
        }
        
        .hero-cta-section {
            margin-top: 2rem;
        }
        
        .btn-hero-primary {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        
        .btn-hero-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.4);
            color: white;
        }
        
        .btn-hero-secondary {
            background: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .btn-hero-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Story Commercial Section */
        .story-commercial-section {
            padding: 2rem 0;
        }
        
        .story-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        
        .story-title-commercial {
            font-family: 'Signika Negative', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1.5rem;
        }
        
        .story-lead-commercial {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            color: #495057;
        }
        
        .story-highlight-box {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            padding: 2rem;
            border-radius: 15px;
            border-left: 4px solid var(--secondary-color);
            margin-bottom: 2rem;
            position: relative;
            box-shadow: 0 8px 25px rgba(25, 101, 192, 0.2);
        }
        
        .highlight-icon {
            position: absolute;
            top: -10px;
            left: 20px;
            background: var(--secondary-color);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        
        .highlight-text {
            font-style: italic;
            font-size: 1rem;
            margin: 0;
            color: white;
        }
        
        .btn-story-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(25, 101, 192, 0.3);
        }
        
        .btn-story-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(25, 101, 192, 0.4);
            color: white;
        }
        
        /* Timeline Commercial */
        .timeline-commercial {
            position: relative;
            padding-left: 3rem;
        }
        
        .timeline-commercial::before {
            content: '';
            position: absolute;
            left: 45px;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border-radius: 2px;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            display: flex;
            align-items: flex-start;
            gap: 2rem;
        }
        
        .timeline-year {
            background: linear-gradient(135deg, white 0%, #f8f9fa 100%);
            color: var(--primary-color);
            font-weight: 800;
            font-size: 1rem;
            padding: 0.75rem 1.25rem;
            border-radius: 25px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            min-width: 100px;
            text-align: center;
            border: 3px solid var(--primary-color);
            flex-shrink: 0;
            z-index: 3;
            position: relative;
        }
        
        .timeline-content {
            flex: 1;
            background: linear-gradient(135deg, white 0%, #fafbfc 100%);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
            border-left: 5px solid var(--primary-color);
            position: relative;
        }
        
        .timeline-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-color), transparent);
            border-radius: 20px 20px 0 0;
        }
        
        .timeline-content h5 {
            margin: 0 0 0.75rem 0;
            color: var(--text-dark);
            font-weight: 700;
            font-size: 1.1rem;
            font-family: 'Signika Negative', sans-serif;
        }
        
        .timeline-content p {
            margin: 0;
            color: #495057;
            font-size: 0.95rem;
            font-weight: 500;
            line-height: 1.4;
        }
        
        .timeline-icon {
            position: absolute;
            left: 28px;
            top: 50%;
            transform: translateY(-50%);
            width: 35px;
            height: 35px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.9rem;
            z-index: 4;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .timeline-icon.success {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
        }
        
        .timeline-icon.warning {
            background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        }
        
        .timeline-icon.primary {
            background: linear-gradient(135deg, #6f42c1 0%, #5a32a3 100%);
        }
        
        .timeline-icon.current {
            background: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
            width: 45px;
            height: 45px;
            font-size: 1.1rem;
            animation: pulse-gold 2s ease-in-out infinite;
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.4);
            left: 25px;
        }
        
        .timeline-item.current .timeline-year {
            background: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
            color: #333;
            border-color: #ffd700;
            font-weight: 800;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            border-width: 4px;
        }
        
        .timeline-item.current .timeline-content {
            border-left-color: #ffd700;
            background: linear-gradient(135deg, #fffbf0 0%, #fff8e1 100%);
        }
        
        .timeline-item.current .timeline-content::before {
            background: linear-gradient(90deg, #ffd700, transparent);
        }
        
        @keyframes pulse-gold {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(255, 215, 0, 0.7);
            }
            50% {
                box-shadow: 0 0 0 10px rgba(255, 215, 0, 0);
            }
        }
        
        /* Why Choose Commercial Section */
        .why-choose-commercial {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        
        .choose-us-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        
        .section-title-commercial {
            font-family: 'Signika Negative', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1rem;
        }
        
        .section-subtitle-commercial {
            font-size: 1.1rem;
            color: #6c757d;
            max-width: 800px;
            margin: 0 auto 3rem;
        }
        
        .advantage-card-commercial {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .advantage-card-commercial:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        .advantage-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .advantage-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }
        
        .advantage-icon.security {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
        }
        
        .advantage-icon.reliability {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
        }
        
        .advantage-icon.service {
            background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        }
        
        .advantage-icon.experience {
            background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
        }
        
        .advantage-icon.fleet {
            background: linear-gradient(135deg, #6f42c1 0%, #5a32a3 100%);
        }
        
        .advantage-icon.partnership {
            background: linear-gradient(135deg, #fd7e14 0%, #e55a00 100%);
        }
        
        .advantage-badge {
            padding: 0.4rem 0.8rem;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .advantage-badge.premium {
            background: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
            color: #333;
        }
        
        .advantage-badge.popular {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
        }
        
        .advantage-badge.service {
            background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
            color: white;
        }
        
        .advantage-badge.leader {
            background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
            color: #333;
        }
        
        .advantage-badge.modern {
            background: linear-gradient(135deg, #6f42c1 0%, #5a32a3 100%);
            color: white;
        }
        
        .advantage-badge.strategic {
            background: linear-gradient(135deg, #fd7e14 0%, #e55a00 100%);
            color: white;
        }
        
        .advantage-content h5 {
            font-family: 'Signika Negative', sans-serif;
            color: var(--text-dark);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .advantage-content p {
            color: #6c757d;
            margin-bottom: 1rem;
            line-height: 1.6;
        }
        
        .advantage-proof {
            background: #f8f9fa;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .why-choose-cta {
            background: white;
            padding: 3rem 2rem;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }
        
        .cta-title {
            font-family: 'Signika Negative', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }
        
        .cta-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 2rem;
        }
        
        .btn-cta-primary {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        
        .btn-cta-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.4);
            color: white;
        }
        
        .btn-cta-secondary {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-cta-secondary:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .hero-title-impact {
                font-size: 2.5rem;
            }
            
            .hero-stat-number-big {
                font-size: 2rem;
            }
            
            .story-title-commercial {
                font-size: 2rem;
            }
            
            .section-title-commercial {
                font-size: 2rem;
            }
            
            .timeline-commercial {
                padding-left: 1rem;
            }
            
            .timeline-item {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-icon {
                position: relative;
                left: auto;
            }
            
            .advantage-card-commercial {
                padding: 1.5rem;
            }
        }

        /* Equipment Cards Commercial */
        .equipment-card-commercial {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .equipment-card-commercial:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        .equipment-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .equipment-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }
        
        .equipment-icon.security {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
        }
        
        .equipment-icon.entertainment {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
        }
        
        .equipment-icon.tools {
            background: linear-gradient(135deg, #feca57 0%, #ff9ff3 100%);
        }
        
        .equipment-icon.navigation {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
        }
        
        .equipment-badge {
            padding: 0.4rem 0.8rem;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .equipment-badge.premium {
            background: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
            color: #333;
        }
        
        .equipment-badge.standard {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
            color: white;
        }
        
        .equipment-badge.safety {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            color: white;
        }
        
        .equipment-badge.tech {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
        }
        
        .equipment-content h5 {
            font-family: 'Signika Negative', sans-serif;
            color: var(--text-dark);
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        
        .equipment-features {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .equipment-feature {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            background: #f8f9fa;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .equipment-feature:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }
        
        .feature-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.9rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .feature-text {
            flex: 1;
        }
        
        .feature-text strong {
            font-size: 0.9rem;
            color: var(--text-dark);
            display: block;
            margin-bottom: 0.25rem;
        }
        
        .feature-text small {
            color: #6c757d;
            font-size: 0.8rem;
        }
        
        @media (max-width: 768px) {
            .equipment-card-commercial {
                padding: 1rem;
            }
            
            .equipment-header {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            
            .equipment-icon {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            
            .equipment-feature {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }
        }

        /* Quote Form Styles */
        .quote-form-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        
        .form-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
        }
        
        .form-header-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
        }
        
        .form-header h4 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .form-control-enhanced {
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 0.75rem 1rem;
            font-family: 'Signika Negative', sans-serif;
            transition: all 0.3s ease;
        }
        
        .form-control-enhanced:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(44, 123, 229, 0.25);
            transform: translateY(-2px);
        }
        
        .form-label {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }
        
        .urgency-box {
            background: linear-gradient(135deg, #fff8dc 0%, #ffeaa7 100%);
            border: 2px solid #fdcb6e;
            border-radius: 15px;
            padding: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .urgency-icon {
            width: 50px;
            height: 50px;
            background: #e17055;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .urgency-content h6 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: #2d3436;
            margin-bottom: 0.25rem;
        }
        
        .urgency-content p {
            font-family: 'Signika Negative', sans-serif;
            color: #636e72;
            font-size: 0.9rem;
        }
        
        .btn-quote-submit {
            background: linear-gradient(135deg, #00b894 0%, #00a085 100%);
            border: none;
            color: white;
            padding: 1rem 3rem;
            border-radius: 50px;
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 184, 148, 0.3);
        }
        
        .btn-quote-submit:hover {
            background: linear-gradient(135deg, #00a085 0%, #00b894 100%);
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0, 184, 148, 0.4);
            color: white;
        }
        
        .btn-shine {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }
        
        .btn-quote-submit:hover .btn-shine {
            left: 100%;
        }
        
        .form-disclaimer {
            font-family: 'Signika Negative', sans-serif;
        }
        
        .form-guarantee {
            margin-top: 1rem;
            padding: 1rem;
            background: rgba(34, 197, 94, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        /* Contact Method Cards */
        .contact-method-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            padding: 2rem 1.5rem;
            height: 100%;
            position: relative;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .contact-method-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        .contact-method-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .contact-method-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
        }
        
        .contact-method-icon.whatsapp {
            background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
        }
        
        .contact-method-icon.email {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        }
        
        .contact-method-card:hover .contact-method-icon {
            transform: scale(1.1) rotate(10deg);
        }
        
        .contact-method-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }
        
        .contact-method-badge.urgent {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
        }
        
        .contact-method-badge.popular {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #28a745 100%);
        }
        
        .contact-method-badge.formal {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        }
        
        .contact-method-badge .badge-text {
            color: white;
        }
        
        .contact-method-content h5 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
        }
        
        .contact-benefit {
            font-family: 'Signika Negative', sans-serif;
            color: #636e72;
            font-size: 0.9rem;
            margin-bottom: 1.25rem;
        }
        
        .contact-details {
            margin-bottom: 1.5rem;
        }
        
        .contact-number-main a,
        .whatsapp-number span,
        .email-address a {
            font-family: 'Signika Negative', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary-color);
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .contact-number-mobile a {
            font-family: 'Signika Negative', sans-serif;
            color: #636e72;
            text-decoration: none;
            font-size: 0.95rem;
        }
        
        .availability-tag,
        .response-time {
            display: flex;
            align-items: center;
            margin-top: 0.5rem;
        }
        
        .availability-tag small,
        .response-time small {
            font-family: 'Signika Negative', sans-serif;
            color: #00b894;
            font-weight: 500;
        }
        
        .btn-contact-primary,
        .btn-contact-whatsapp,
        .btn-contact-email {
            width: 100%;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        
        .btn-contact-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
        }
        
        .btn-contact-whatsapp {
            background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
            color: white;
        }
        
        .btn-contact-email {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
        }
        
        .btn-contact-primary:hover,
        .btn-contact-whatsapp:hover,
        .btn-contact-email:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            color: white;
        }
        
        /* Company Info Card */
        .company-info-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }
        
        .company-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .company-logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }
        
        .company-brand-logo {
            max-width: 220px;
            height: auto;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        
        .company-brand-logo:hover {
            opacity: 1;
        }
        
        .company-header h4 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }
        
        .company-tagline {
            font-family: 'Signika Negative', sans-serif;
            color: #636e72;
            font-style: italic;
            margin-top: 1.5rem;
        }
        
        .detail-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .detail-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        
        .detail-item i {
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-top: 0.2rem;
        }
        
        /* Schedule Info Card */
        .schedule-info-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }
        
        .schedule-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .schedule-header h4 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }
        
        .schedule-tagline {
            font-family: 'Signika Negative', sans-serif;
            color: #636e72;
            font-style: italic;
        }
        
        .schedule-grid {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .schedule-item {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            border-radius: 15px;
            background: rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            transition: all 0.3s ease;
        }
        
        .schedule-item.highlight {
            background: linear-gradient(135deg, #fff8dc 0%, #ffeaa7 100%);
            border: 2px solid #fdcb6e;
        }
        
        .schedule-item:hover {
            transform: translateX(5px);
        }
        
        .schedule-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-right: 1rem;
            flex-shrink: 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, #1565c0 100%);
            color: white;
        }
        
        .schedule-item.highlight .schedule-icon {
            background: linear-gradient(135deg, #e17055 0%, #d63031 100%);
        }
        
        .schedule-content h6 {
            font-family: 'Signika Negative', sans-serif;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }
        
        .schedule-time {
            font-family: 'Signika Negative', sans-serif;
            font-size: 0.9rem;
            margin-bottom: 0.25rem;
        }
        
        .schedule-time.featured {
            font-size: 1.1rem;
            color: #e17055;
        }
        
        .schedule-content small {
            font-family: 'Signika Negative', sans-serif;
            color: #636e72;
        }
        
        .always-on-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: linear-gradient(135deg, #e17055 0%, #d63031 100%);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
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
            padding: 1rem 0 3rem 0;
            margin: 0;
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
            
            /* Ajustes para homologaciones en móvil */
            .homologation-logos {
                grid-template-columns: 1fr 1fr;
                gap: 0.75rem;
            }
            
            .homologation-item img {
                max-width: 60px;
                max-height: 40px;
            }
            
            .certifications-grid {
                grid-template-columns: 1fr 1fr;
                gap: 0.5rem;
            }
            
            .certification-item img {
                max-width: 50px;
                max-height: 32px;
            }
            
            /* Ajustes para nueva sección de certificaciones en móvil */
            .certifications-logos-container {
                gap: 1rem;
                justify-content: center;
            }
            
            .certification-logo-item {
                padding: 1rem 0.5rem;
                width: 150px;
                height: 140px;
                flex: 0 0 150px;
            }
            
            .certification-logo-item img {
                max-width: 90px;
                max-height: 60px;
            }
            
            .certification-logo-item span {
                font-size: 0.75rem;
                margin-top: 0.5rem;
            }
            
            .certifications-title {
                font-size: 0.95rem;
                margin-bottom: 1.5rem;
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
                            <span>(01) 567-9670</span>
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

    <!-- Certifications Section -->
    <section class="certifications-section py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h6 class="certifications-title mb-4">Certificaciones y Homologaciones</h6>
                    <div class="certifications-logos-container">
                        <div class="certification-logo-item">
                            <img src="{{ asset('images/homologacion/BV_certification_9001.png') }}" alt="ISO 9001 Bureau Veritas Certification">
                            <span>ISO 9001<br>Bureau Veritas</span>
                        </div>
                        <div class="certification-logo-item">
                            <img src="{{ asset('images/homologacion/hodelpe-homologado.png') }}" alt="HODELPE Homologaciones Perú">
                            <span>HODELPE<br>Homologaciones Perú</span>
                        </div>
                        <div class="certification-logo-item">
                            <img src="{{ asset('images/homologacion/cial.png') }}" alt="CIAL Certification">
                            <span>CIAL<br>Certificación</span>
                        </div>
                        <div class="certification-logo-item">
                            <img src="{{ asset('images/homologacion/Mega-homologado.png') }}" alt="Mega Homologado">
                            <span>Mega<br>Homologado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="{{ route('politica-privacidad') }}" class="text-light">Política de Privacidad</a></li>
                        <li><a href="{{ route('politica-proteccion-datos') }}" class="text-light">Política de Protección de Datos</a></li>
                        <li><a href="{{ route('politica-cookies') }}" class="text-light">Política de Cookies</a></li>
                        <li><a href="{{ route('terminos-condiciones') }}" class="text-light">Términos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Contacto</h5>
                    <div class="contact-info-footer">
                        <p><i class="fas fa-phone me-2"></i> (511) 567-9670</p>
                        <p><i class="fas fa-envelope me-2"></i> turismo@transvillarrica.com</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i> Lima, Perú</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0">&copy; {{ date('Y') }} Villarrica Tours S.A. Todos los derechos reservados.</p>
                        <p class="powered-by mb-0">
                            Powered by <a href="https://adratechsystems.com" target="_blank" rel="noopener" class="powered-link">Adratech Systems</a>
                        </p>
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