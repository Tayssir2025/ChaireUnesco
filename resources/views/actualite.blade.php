<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Principales activités de la chaire UNESCO de l'UMA</title>

    <!-- Bootstrap CSS & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
 <!-- Bootstrap JS -->
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
          .navbar-brand img {
            height: 65px;
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

        /* Styles spécifiques pour le lien "Activités" */
        .nav-link.dropdown-toggle::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-link.dropdown-toggle:hover::after {
            width: 100%;
        }

        .nav-link.dropdown-toggle:hover {
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
          background: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.1);
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

    <!-- Contenu exemple -->
    <div class="container mt-5">
        <h1></h1>
    </div>

    <main>
  <section id="activites" class="py-5 bg-light">
    <div class="container">

      <h2 class="text-center mb-5" data-aos="fade-up" style="color:#0069B4;" data-translate="news_title">Actualité : {{ $actualite->titre }}</h2>

      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="fade-up">
          
          <div class="mb-5 pb-5 border-bottom">
            <div 
              class="w-100 mb-3" 
              style="height: 400px; background-size: cover; background-position: center; background-image: url('{{ $actualite->image ? asset('storage/' . $actualite->image) : 'https://source.unsplash.com/random/1200x600?news' }}')">
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2 text-muted small">
              <span class="text-uppercase" style="color:#0069B4;">{{ ucfirst($actualite->categorie ?? 'Actualité') }}</span>
              <span style="color:#0069B4;">{{ \Carbon\Carbon::parse($actualite->created_at)->format('d M Y') }}</span>
            </div>

            <div class="fs-5" style="line-height: 1.8;">
              
                <a style="color:#0069B4;">{{$actualite->contenu}} </a>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 text-start">
                    <a href="{{$actualite->lien_linkedin}}" target="_blank" style="color:#0069B4;" class="btn btn-outline-primary d-inline-flex align-items-center">
                        <i class="bi bi-linkedin me-2 fs-5"></i> Voir Sur LinkedIn
                    </a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('actualites') }}" style="color:#0069B4;" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left"></i> Retour à la liste des actualités
                    </a>
                </div>
            </div>
        </div>

        </div>
      </div>

    </div>
  </section>
</main>



    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 reveal-item">
                    <h4 class="footer-title">À propos</h4>
                    <p class="footer-description">Engagés dans la création de solutions innovantes pour des échanges professionnels de qualité.</p>
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
                    <form class="newsletter-form">
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
