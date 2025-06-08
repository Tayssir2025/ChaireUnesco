<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Principales activités de la chaire UNESCO de l'UMA</title>

    <!-- Bootstrap CSS & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
 <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
       :root {
            --primary: #0069B4;
            --secondary: #71BCEA;
            --dark: #212529;
            --light: #F8F9FA;
            --accent: #34A853;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            font-family:  'Poppins', sans-serif;
            overflow-x: hidden;
            padding-top: 80px; /* pour ne pas cacher le contenu sous la navbar */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background-color: #ffffff;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            margin: 0 15px;
            transition: 0.3s ease;
             color:#0069B4 ;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--primary) !important;
            transform: translateY(-2px);
        }

        /* Styles spécifiques pour le lien "Activités" */
        .navbar {
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .navbar-brand img {
            height: 60px;
        }

        .nav-link {
            margin: 0 15px;
            transition: 0.3s ease;
            color:#0069B4 ;
            position: relative;
             font-size: 1.03rem; 
            
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;

        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--primary) !important;
            transform: translateY(-2px);
        }

        .bouton {
            border-radius: 30px;
            padding: 12px 25px;
            transition: 0.3s ease;
            background: var(--secondary);
            color: white;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-width: 120px;
            justify-content: center;
            text-decoration: none;
            font-weight: 500;
            border: none;
        }

        .bouton:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 105, 180, 0.3);
        }


        /* Ouvre le menu déroulant au survol */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .reveal-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            color: var(--primary);
            border-left: 4px solid var(--secondary);
            padding-left: 1rem;
            margin: 2rem 0 1.5rem;
            font-size: 1.75rem;
        }

        .ressources-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .download-item {
            padding: 1rem;
            border-bottom: 1px solid #eee;
            transition: background 0.3s ease;
        }

        .download-item:hover {
            background: #f8f9fa;
        }

        .download-link {
            display: flex;
            align-items: center;
            color: var(--dark);
            text-decoration: none;
            gap: 1rem;
        }

        .download-link i {
            color: var(--primary);
            font-size: 1.5rem;
        }

        .file-details {
            margin-left: auto;
            display: flex;
            gap: 1rem;
            color: var(--secondary);
            font-size: 0.9rem;
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

        .footer-section {
            background: #0069B4;
            color: white;
            padding: 4rem 0;
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .footer-title {
            font-weight: 600;
            margin-bottom: 2rem;
            position: relative;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 40px;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        .footer-description {
            opacity: 0.9;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            position: relative;
            transition: 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0%;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        .footer-links a:hover::after {
            width: 100%;
        }

        .social-container {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration:none;
        }

        .social-icon:hover {
            background: white;
            color: #0069B4 !important;
            transform: translateY(-3px) scale(1.1);
        }

        .footer-copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
        }

        .newsletter-form input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 30px;
            width: 100%;
            margin-bottom: 1rem;
        }

        .newsletter-form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .newsletter-form button {
            background: white;
            color: #0069B4;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 30px;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .newsletter-form button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        @media (max-width: 992px) {
            .footer-section {
                text-align: center;
            }

            .footer-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .social-container {
                justify-content: center;
            }

            .footer-links a {
                justify-content: center;
            }
        }

        .footer-links a.active {
    color:  #FFFFFF;
    font-weight: bold;
}

.footer-links a.active::after {
    width: 100%;
    background:  #FFFFFF;
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
    <div class="main-container">
    <header class="text-center mb-5 reveal-item">
        <h1 style="color:#0069B4;" class="display-5 fw-bold mb-3">Ressources</h1>

    </header>

    <!-- Section Unique -->
<section class="ressources-container reveal-item" id="ressources">
    <h2 class="section-title">
        <i class="bi bi-file-earmark-pdf"></i>
        Tous les documents
    </h2>

    <!-- Liste des PDF dynamiques -->
    @foreach ($ressource as $item)
        <div class="download-item">
            <a href="{{ asset('storage/' . $item->type) }}" class="download-link" download>
                <i class="bi bi-download"></i>
                <span>{{ $item->titre }}</span>
                <span class="file-details">
                    <span>PDF</span>
                    <span>
                        @php
                            $fileSize = 0;
                            $path = public_path('storage/' . $item->type);
                            if (file_exists($path)) {
                                $fileSize = round(filesize($path) / 1048576, 1); // Mo
                            }
                        @endphp
                        {{ $fileSize > 0 ? $fileSize . ' Mo' : 'Taille inconnue' }}
                    </span>
                </span>
            </a>
        </div>
    @endforeach
</section>

</div>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 reveal-item">
                    <h4 class="footer-title">À propos</h4>
                    <p class="footer-description">La Chaire UNESCO sur l’enseignement supérieur pour le développement durable en Afrique, hébergée à l’Université de la Manouba.</p>
                    <div class="social-container">
                        <a href="https://www.linkedin.com/company/unesco-chair-on-higher-education-for-sustainable-development-in-africa/posts/?feedView=all" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61568069037666" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 reveal-item" style="transition-delay: 0.2s;">
                    <h4 class="footer-title">Liens rapides</h4>
                    <ul class="footer-links">
                        <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a></li>
                        <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">À propos</a></li>
                        <li><a class="{{ request()->routeIs('actualites') ? 'active' : '' }}" href="{{ route('actualites') }}">Actualités</a></li>
                        <li><a class="{{ request()->routeIs('ressources') ? 'active' : '' }}"  href="{{ route('ressources') }}">Ressources</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 reveal-item" style="transition-delay: 0.4s;">
                    <h4 class="footer-title">Newsletter</h4>
                    <form class="newsletter-form" method="POST" action="{{ route('newsletter.subscribe') }}">
@csrf
                        <input type="email" placeholder="Entrez votre email" required>
                        <button type="submit">S’abonner</button>
                    </form>
                    <div class="footer-copyright">
                        <small>© 2024 Chaire UNESCO UMA. Tous droits réservés.</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

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
    <script>
        // Animation au défilement
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.reveal-item').forEach(item => observer.observe(item));
        });
    </script>
<!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animation au défilement
        document.addEventListener('DOMContentLoaded', function() {
            const revealItems = document.querySelectorAll('.reveal-item');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                    }
                });
            }, { threshold: 0.1 });

            revealItems.forEach(item => observer.observe(item));
        });
    </script>

</body>
</html>
