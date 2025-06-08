<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <link rel="stylesheet" href="{{ asset('LandingPage/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaire UNESCO ES&DD</title>

    <!-- Preconnect for Faster CDN Loading -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Bootstrap CSS & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            overflow-x: hidden;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background-color: #ffffff;

        }

        .contact-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
            position: relative;
            color: #0069B4;
        }

        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .contact-form {
            padding: 3rem;
            background: white;
        }

        .contact-info {
            padding: 3rem;
            background: #0069B4;
            color: white;
        }

        h1 {
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
            color: #FFFFFF;
        }

        h1:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 50px;
            height: 3px;
            background: #0069B4;
        }

        .contact-info h1:after {
            background: white;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #e1e1e1;
            transition: all 0.3s;
            color: #17478B;

        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0069B4;
        }

        .btn-submit {
            background: #0069B4;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
            display: block;



        }

        .btn-submit:hover {
            background: #0069B4;
            border-color: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.1);
            color: white;

        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 20px;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .info-detail h5 {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .info-detail p {
            margin: 0;
            opacity: 0.8;
        }

        .social-links {
            margin-top: 40px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 10px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: white;
            color: #0069B4;
            transform: translateY(-5px);
        }

        /* Animation des bulles flottantes */
        .floating-bubble {
            position: absolute;
            background: rgba(108, 99, 255, 0.1);
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
            animation: float-bubble 15s infinite linear;
        }



        .reveal-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .reveal-item.revealed {
            opacity: 1;
            transform: translateY(0);
        }
       
.footer-links a.active {
    color:  #FFFFFF;
    font-weight: bold;
}

.footer-links a.active::after {
    width: 100%;
    background:  #FFFFFF;
}

.nav-link.active {
    color: #17478B !important;
    font-weight: bold;
}

.nav-link.active::after {
    width: 100%;
    background: #17478B; /* ou var(--primary) */
}
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('LandingPage/images/Fichier 3.png') }}" alt="Logo" height="55" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Center-aligned navigation links -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}" data-translate="home">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link  {{ request()->routeIs('about') ? 'active' : '' }} "href="{{ route('about') }}" data-translate="about">À propos</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('activites*') ? 'active' : '' }}" href="{{ route('activites') }}" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Activités
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item {{ request()->routeIs('activitesetudiants') ? 'active' : '' }}"href="{{ route('activitesetudiants') }}">les Étudiants</a>
                            </li>
                            <li><a class="dropdown-item  {{ request()->routeIs('activitesrecherches') ? 'active' : '' }}"href="{{ route('activitesrecherches') }}"> La Recherche Et Le Progrès Scientifique</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('activitesmondesocieconomique') ? 'active' : '' }}" href="{{ route('activitesmondesocieconomique') }}"> Le Monde Socio-Économique</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('activitesresponsablesunis') ? 'active' : '' }}" href="{{ route('activitesresponsablesunis') }}">Les Responsables Universitaires</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('activitespolitiquespubliques') ? 'active' : '' }}" href="{{ route('activitespolitiquespubliques') }}"> Les Politiques Publiques Et Les Sociétés</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('actualites') ? 'active' : '' }}"href="{{ route('actualites') }}"
                            data-translate="Actualités">Actualités</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('ressources') ? 'active' : '' }}" href="{{ route('ressources') }}"
                            data-translate="Ressources " >Ressources</a></li>
                </ul>

                <!-- Right-aligned elements -->
                <ul class="navbar-nav ms-auto align-items-center">

                    <li class="nav-item dropdown">
                        <a class="nav-link lang-dropdown dropdown-toggle d-flex align-items-center" href="#"
                            role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-globe me-2"></i>
                            <span class="lang-code">FR</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="#" data-lang="fr">
                                    <img src="https://flagcdn.com/fr.svg" width="20" class="me-2"> Français</a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#" data-lang="en">
                                    <img src="https://flagcdn.com/gb.svg" width="20" class="me-2"> English</a>
                            </li>
                        </ul>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            <li class="getstarted scrollto">

                                <a href="{{ route('dashboard') }}" class="nav-link" role="button">
                                    Tableau de bord
                                </a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">@csrf</form>
                                <a class="bouton px-4" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ url('/authentification') }}" class="bouton px-4o" role="button">
                                    Connexion
                                </a>
                            </li>
                        @endauth
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="hero-header">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ asset('LandingPage/images/image1.jpg') }}" class="d-block w-100" alt="...">
                </div>


            </div>
        </div>
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <h1 class="hero-title">
                <h1>Chaire UNESCO</h1>
                <h2>Sur l'Enseignement Supérieur Pour le Développement Durable En Afrique</span><br>
                    <span class="line3">Université De la Manouba</span>
            </h1>
        </div>


        <a href="#" class="bouton">
            Explorer <span class="arrow">↓</span>
        </a>
        </div>
    </header>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main Content -->
    <main>


        <!-- Objectives Section -->
        <section id="objectives" class="about-section">
            <div class="container">
                <h2 class="section-title text-center" data-aos="fade-up">Objectifs</h2>

                <div class="row g-4">
                    <!-- Objectif 01 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-card">
                            <div class="about-icon float-element">
                                <span class="objective-number"><i class="bi bi-broadcast"></i></span>
                            </div>
                            <div class="objective-content">
                                <p>Renforcer la diffusion des concepts de la responsabilité sociétale des organisations
                                    (RSO) dans les institutions d'enseignement supérieur et de la recherche en Afrique.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Objectif 02 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-card">
                            <div class="about-icon float-element">
                                <span class="objective-number"><i class="bi bi-mortarboard-fill"></i></span>
                            </div>
                            <div class="objective-content">
                                <p>Contribuer à la formation d'une nouvelle génération de managers responsables dans les
                                    institutions d'enseignement supérieur et de la recherche en Afrique.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Objectif 03 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-card">
                            <div class="about-icon float-element">
                                <span class="objective-number"><i class="bi bi-diagram-3"></i></span>
                            </div>
                            <div class="objective-content">
                                <p>Appuyer la responsabilité sociétale des universités (RSU) en les accompagnant à
                                    fédérer toutes les parties prenantes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Objectif 04 -->
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="about-card">
                            <div class="about-icon float-element">
                                <span class="objective-number"><i class="bi bi-lightbulb-fill"></i></span>
                            </div>
                            <div class="objective-content">
                                <p>Produire et diffuser de nouvelles connaissances dans le domaine de la RSO et coopérer
                                    étroitement avec l'UNESCO, les autres Chaires UNESCO et les réseaux UNITWIN sur les
                                    programmes et activités pertinents.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Section -->
        <section id="news" class="news-section">
            <div class="container">
                <h2 class="section-title text-center" data-aos="fade-up" data-translate="news_title">Actualités</h2>

                <!-- Lien ajouté -->
                <div class="text-end mb-4 mt-md-4 mt-3" data-aos="fade-left" data-aos-delay="250">
                    <a href="{{ route('actualites') }}" class="news-link">Voir plus d’actualités →</a>
                </div>

                <div class="row">
                    @foreach ($news as $index => $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 + $index * 100 }}">
                        <div class="news-card">
                            <div class="news-img animate-border" style="height: 250px; background-size: cover; background-image: url('{{ $item->image ? asset('storage/' . $item->image) : 'https://source.unsplash.com/random/600x400?conference' }}')">
                                <div class="news-date">
                                   {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</div>
                            </div>
                            <div class="news-content">
                                <span class="news-tag" data-translate="news_event">{{ ucfirst($item->categorie ?? 'Actualité') }}</span>
                                <h3 class="news-title" data-translate="news_title_1">{{ $item->titre }}</h3>
                                <p class="news-preview" data-translate="news_preview_1">{{ \Illuminate\Support\Str::words(strip_tags($item->contenu), 7, '...') }}</p>
                                <a href="{{ route('actualite', $item->id) }}" class="news-link" data-translate="read_more">
                                    Lire plus <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-----partie partenainre -->

        <section class="partners-section">
            <div class="container">
                <h2 class="section-title">Nos Partenaires</h2>
            </div>

            <div class="logo-slider">
                <div class="logo-slide-track">
                    <!-- Original set of logos -->
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo1.png') }}" alt="Logo Partenaire 1">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo2.png') }}" alt="Logo Partenaire 2">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo3.png') }}" alt="Logo Partenaire 3">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo4.png') }}" alt="Logo Partenaire 4">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo5.png') }}" alt="Logo Partenaire 5">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo6.png') }}" alt="Logo Partenaire 6">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo7.png') }}" alt="Logo Partenaire 7">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo8.png') }}" alt="Logo Partenaire 8">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo9.png') }}" alt="Logo Partenaire 9">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo10.png') }}" alt="Logo Partenaire 10">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo11.png') }}" alt="Logo Partenaire 11">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo12.png') }}" alt="Logo Partenaire 12">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo13.png') }}" alt="Logo Partenaire 13">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo14.png') }}" alt="Logo Partenaire 14">
                    </div>

                    <!-- Duplicate set of logos for seamless looping -->
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo1.png') }}" alt="Logo Partenaire 1">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo2.png') }}" alt="Logo Partenaire 2">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo3.png') }}" alt="Logo Partenaire 3">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo4.png') }}" alt="Logo Partenaire 4">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo5.png') }}" alt="Logo Partenaire 5">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo6.png') }}" alt="Logo Partenaire 6">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo7.png') }}" alt="Logo Partenaire 7">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo8.png') }}" alt="Logo Partenaire 8">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo9.png') }}" alt="Logo Partenaire 9">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo10.pn') }}" alt="Logo Partenaire 10">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo11.pn') }}" alt="Logo Partenaire 11">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo12.pn') }}" alt="Logo Partenaire 12">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo13.pn') }}" alt="Logo Partenaire 13">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo14.pn') }}" alt="Logo Partenaire 14">
                    </div>
                </div>
            </div>

            <!-- Deuxième bande dans le sens inverse (optionnel) -->
            <div class="logo-slider" style="margin-top: 30px;">
                <div class="logo-slide-track logo-slide-track-reverse">
                    <!-- Original set of logos -->
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo1.png') }}" alt="Logo Partenaire 1">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo2.png') }}" alt="Logo Partenaire 2">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo3.png') }}" alt="Logo Partenaire 3">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo4.png') }}" alt="Logo Partenaire 4">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo5.png') }}" alt="Logo Partenaire 5">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo6.png') }}" alt="Logo Partenaire 6">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo7.png') }}" alt="Logo Partenaire 7">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo8.png') }}" alt="Logo Partenaire 8">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo9.png') }}" alt="Logo Partenaire 9">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo10.pn') }}g" alt="Logo Partenaire 10">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo11.pn') }}g" alt="Logo Partenaire 11">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo12.pn') }}g" alt="Logo Partenaire 12">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo13.pn') }}g" alt="Logo Partenaire 13">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo14.pn') }}g" alt="Logo Partenaire 14">
                    </div>

                    <!-- Duplicate set of logos for seamless looping -->
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo1.png') }}" alt="Logo Partenaire 1">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo2.png') }}" alt="Logo Partenaire 2">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo3.png') }}" alt="Logo Partenaire 3">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo4.png') }}" alt="Logo Partenaire 4">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo5.png') }}" alt="Logo Partenaire 5">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo6.png') }}" alt="Logo Partenaire 6">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo7.png') }}" alt="Logo Partenaire 7">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo8.png') }}" alt="Logo Partenaire 8">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo9.png') }}" alt="Logo Partenaire 9">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo10.pn') }}g" alt="Logo Partenaire 10">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo11.pn') }}g" alt="Logo Partenaire 11">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo12.pn') }}g" alt="Logo Partenaire 12">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo13.pn') }}g" alt="Logo Partenaire 13">
                    </div>
                    <div class="logo-slide">
                        <img src="{{ asset('LandingPage/images/logo14.pn') }}g" alt="Logo Partenaire 14">
                    </div>
                </div>
            </div>
        </section>
        <!----- fin partie partenanre -->
        <!--partie contact debut-->
        <div class="contact-wrapper" id="Contact">
            <h2 class="section-title">Contact</h2>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 reveal-item ">
                        <div class="card h-100 contact-form">
                            <h1 style="color: #0069B4;">Rejoignez-nous</h1>
                            <p class="mb-4"style="color:  #17478B;" >Nous serions ravis d'échanger avec vous. Remplissez ce formulaire et nous
                                vous répondrons dans les plus brefs délais.</p>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="nom" class="form-control"
                                            placeholder="Votre nom" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Votre email" required>
                                    </div>
                                </div>
                                <input type="text" name="titre" class="form-control mt-3" placeholder="Sujet">
                                <textarea name="message" class="form-control mt-3" rows="5" placeholder="Votre message" required></textarea>
                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-submit">
                                        Envoyer votre message
                                    </button>
                                </div>
                            </form>
                           

                        </div>
                    </div>
                    <div class="col-lg-6 reveal-item" style="transition-delay: 0.3s;">
                        <div class="card h-100 contact-info">
                            <h1> <span style="color: white;">Nos coordonnées </span></h1>
                            <p class="mb-4">N'hésitez pas à nous contacter directement en utilisant les informations
                                ci-dessous.</p>

                            <div class="info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-detail">
                                    <h5>Notre adresse</h5>
                                    <p>Université de la Manouba (UMA), Tunis, Tunisie .</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="info-detail">
                                    <h5>Téléphone</h5>
                                    <p>(216) 71 602 404</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-detail">
                                    <h5>Email</h5>
                                    <p>chaireunesco@iscae.uma.tn</p>
                                </div>
                            </div>

                            <div class="social-links">
                                <a href="https://www.linkedin.com/company/unesco-chair-on-higher-education-for-sustainable-development-in-africa/posts/?feedView=all" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=61568069037666" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fin partie contact-->


    </main>

    <!-- Bootstrap JS and AOS for animations -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Bootstrap JS and Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

    <script>
        // Initialize AOS animation library
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });

            // Handle smooth scrolling for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop -
                                80, // Accounting for navbar height
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Language switcher
            const savedLang = localStorage.getItem('lang') || 'fr';
            changeLanguage(savedLang);

            document.querySelectorAll('.dropdown-item[data-lang]').forEach(item => {
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    changeLanguage(item.dataset.lang);
                });
            });
        });



        /* script partie contact */
        // Animation au défilement
        document.addEventListener('DOMContentLoaded', function() {
            // Révéler les éléments au chargement initial
            revealItems();

            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach((input, index) => {
                input.style.transitionDelay = `${index * 0.1}s`;
                setTimeout(() => {
                    input.classList.add('revealed');
                }, 500 + (index * 100));
            });
        });

        // Fonction pour révéler les éléments
        function revealItems() {
            const revealItems = document.querySelectorAll('.reveal-item');
            revealItems.forEach(item => {
                item.classList.add('revealed');
            });
        }
    </script>
    <footer class="footer-section">
        <div class="container">
            <div class="row g-5">
                <!-- Colonne À propos -->
                <div class="col-lg-4 reveal-item">
                    <h4 class="footer-title">À propos</h4>
                    <p class="footer-description">La Chaire UNESCO sur l’enseignement supérieur pour le développement
                        durable en Afrique, hébergée à l’Université de la Manouba..</p>

                    <!-- Icônes sociales déplacées ici -->
                    <div class="social-container">
                       <a href="https://www.linkedin.com/company/unesco-chair-on-higher-education-for-sustainable-development-in-africa/posts/?feedView=all" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61568069037666" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Liens rapides -->
                <div class="col-lg-4 reveal-item" style="transition-delay: 0.2s;">
                    @if (session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                    <h4 class="footer-title">Liens rapides</h4>
                    <ul class="footer-links">
                       <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a></li>
                        <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">À propos</a></li>
                        <li><a class="{{ request()->routeIs('actualites') ? 'active' : '' }}" href="{{ route('actualites') }}">Actualités</a></li>
                        <li><a class="{{ request()->routeIs('ressources') ? 'active' : '' }}"  href="{{ route('ressources') }}">Ressources</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                  
                <div class="col-lg-4 reveal-item" style="transition-delay: 0.4s;">
                    <h4 class="footer-title">Newsletter</h4>
                   <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Entrez votre email" required>
                    <button type="submit">S'abonner</button>
                    </form>
                    <div class="footer-copyright">
                        <small> © 2025 Chaire UNESCO UMA. Tous droits réservés.</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
