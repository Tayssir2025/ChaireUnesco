<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Principales activités de la chaire UNESCO de l'UMA</title>

    <!-- Bootstrap CSS & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

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
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            overflow-x: hidden;
            padding-top: 80px;
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
            font-size: 1.04rem; 
            
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
            padding: 8px 25px;
            transition: 0.3s ease;
            background: var(--primary);
            color: white;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            min-width: 120px;
            justify-content: center;
            text-decoration: none;
        }

        .bouton:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.1);
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .content-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .content-section {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            transition: box-shadow 0.3s ease;
        }

        .content-section:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        h1, h2 {
            color: var(--primary);
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        ul.activity-list {
            list-style-type: disc;
            padding-left: 20px;
            margin-top: 10px;
        }

        .reveal-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
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
            text-decoration: none;
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
.nav-link.dropdown-toggle.active {
    color: #17478B !important;
    font-weight: bold;
}

.nav-link.dropdown-toggle.active::after {
    width: 100%;
    background: #17478B;
}
.footer-links a.active {
    color:  #FFFFFF;
    font-weight: bold;
}

.footer-links a.active::after {
    width: 100%;
    background:  #FFFFFF;
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

    <!-- Contenu principal -->
    <div class="container mt-5">
        <header class="content-header">
            <h1>Principales activités prévues de la chaire UNESCO de l'UMA</h1>
            <p>Découvrez nos missions et actions dans plusieurs domaines clés.</p>
        </header>

        <section id="pour-etudiants" class="content-section">
            <h2>Pour les étudiants</h2>
            <ul class="activity-list">
                <li>Organisation d'universités d'été afin de sensibiliser et de former des étudiants issus des différentes universités partenaires, notamment africaines, autour des Objectifs du Développement Durable (ODD).</li>
                <li>Appui à la mobilité internationale des doctorants et des chercheurs Nord-Sud-Sud pour familiariser les nouvelles générations avec les pays africains.</li>
                <li>Création et animation de clubs ODD au sein des universités.</li>
                <li>Mise en place de nouvelles initiatives pédagogiques et contribution à l'enrichissement des programmes universitaires existants, tout en favorisant la diversité culturelle.</li>
            </ul>
        </section>

        <section id="pour-socioeco" class="content-section">
            <h2>Pour le monde socio-économique</h2>
            <ul class="activity-list">
                <li>Création d'un parcours de formation continue en matière de RSO prenant appui sur le numérique au profit du monde socio-économique africain.</li>
                <li>Constitution de base de données de diplômés et de recherches dans le domaine de la RSO et mise en réseau avec le monde socio-économique.</li>
                <li>Renforcement des capacités dans le domaine de l'implémentation de la RSO et ses enjeux.</li>
            </ul>
        </section>

        <section id="pour-universitaires" class="content-section">
            <h2>Pour les responsables universitaires</h2>
            <ul class="activity-list">
                <li>Mise en œuvre d'actions de dialogue avec la communauté locale pour améliorer les espaces publics et la mobilité douce à l'UMA.</li>
                <li>Organisation d'ateliers de formation et de renforcement des capacités institutionnelles dans le domaine de la RSU et de la structuration de l'engagement sociétal des universités africaines.</li>
                <li>Édition d'un livre blanc présentant les bonnes pratiques de RSU.</li>
            </ul>
        </section>

        <section id="pour-recherche" class="content-section">
            <h2>Pour la recherche et le progrès scientifique</h2>
            <ul class="activity-list">
                <li>Création d'un réseau d'excellence et d'innovation aux niveaux régional et sous-régional entre les universités africaines et européennes, favorisant le partage d'expériences, de méthodologies et d'expertises en matière de gestion responsable.</li>
                <li>Organisation de conférences sur la durabilité des organisations en Afrique et ses leviers d'actions.</li>
                <li>Production scientifique incluant la publication d'un ouvrage sur la Responsabilité Sociétale des Universités (RSU) en Afrique.</li>
                <li>Génération de l'innovation par la recherche.</li>
            </ul>
        </section>

        <section id="pour-politiques" class="content-section">
            <h2>Pour les politiques publiques et la société</h2>
            <ul class="activity-list">
                <li>Organisation d'événements de vulgarisation et création de circuits de valorisation et développement de nouveaux formats de diffusion des connaissances en Afrique.</li>
                <li>Organisation de manifestations avec les institutions et univers culturels pour renforcer les liens entre littératures, humanités, arts et techniques en Afrique.</li>
                <li>Plaidoyers et accompagnement des politiques publiques pour un enseignement supérieur de qualité et une atteinte des ODD en Afrique.</li>
            </ul>
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
                    <div class="footer-copyright text-center">
                        <small>© 2024 Chaire UNESCO UMA. Tous droits réservés.</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
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
