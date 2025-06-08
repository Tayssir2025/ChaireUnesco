<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>À Propos - Chaire UNESCO UMA</title>

    <!-- Bootstrap 5 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
       <style>
        :root {
            --primary: #0069B4;
            --secondary: #71BCEA;
            --dark: #212529;
            --light: #F8F9FA;
            --accent: #34A853;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
                /* Ouvre le menu déroulant au survol */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        body {
            font-family: 'Avenir', sans-serif;
            overflow-x: hidden;
            line-height: 1.6;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            background-color: #ffffff;
        }

        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.98) !important;
            
            padding: 1rem 0;
        }

        .navbar-brand img {
            height: 65px;
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
            padding: 12px 25px;
            transition: 0.3s ease;
            background: #71BCEA;;
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
            background: #0069B4;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 105, 180, 0.3);
        }

        /* Hero Section */
        .hero-section {
           
            color: white;
            padding: 150px 0 100px;
            text-align: center;
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
            background: url('data:image/svg+xml,<svg xmlns="https://via.placeholder.com/150x55/0069B4/FFFFFF?text=UNESCO+UMA"');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
           font-size: 3rem;
            color: #0069B4;;
            margin-bottom: 2rem;
            position: relative;
        }

        .breadcrumb-nav {
            background: none;
            padding: 0;
            margin: 0;
        }

        .breadcrumb-item a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: white;
        }

        .breadcrumb-item.active {
            color: white;
        }

        /* Content Sections */
        .content-section {
            padding: 100px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 2rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--secondary);
            border-radius: 2px;
        }

    

        .highlight-box {
            background: rgba(113, 188, 234, 0.1);
            border-left: 4px solid var(--secondary);
            padding: 2rem;
            border-radius: 8px;
            margin: 2rem 0;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Footer */

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

        /* Responsive */
        @media (max-width: 768px) {
            

            .section-title {
                font-size: 2rem;
            }

            .nav-link {
                margin: 0 5px;
            }

            .content-section {
                padding: 60px 0;
            }
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }



        /* Hero Section */
        .hero {
            padding: 60px 0 0px;
            background: white;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 80px;
            align-items: start;
        }

        .hero-content h1 {
           font-size: 3rem;
            color: #0069B4;;
            margin-bottom: 2rem;
            position: relative;
            
        }

        .hero-content p {
            font-size: 18px;
            color:#17478B;
            line-height: 1.6;
            max-width: 400px;
        }

        .hero-images {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            height: 400px;
        }

        .hero-img-1 {
            background: url('./LandingPage/images/2.jpeg') center/cover;
            border-radius: 8px;
            grid-column: span 2;
            height: 180px;
        }

        .hero-img-2 {
            background: url('./LandingPage/images/1.jpeg') center/cover;
            border-radius: 8px;
            height: 200px;
        }

        /* Mission Section */
        .mission {
            padding: 120px 0;
            background: white;
        }

        

        .mission-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 120px;
            align-items: start;
        }

        .mission-grid h1 {
           font-size: 3rem;
            color: #0069B4;;
            margin-bottom: 2rem;
            position: relative;
            
        }


        .mission-text p {
            font-size: 18px;
            color:#17478B;
            line-height: 1.6;
            max-width: 400px;


        }
        




        /* Responsive */
        @media (max-width: 1024px) {
            .container {
                padding: 0 24px;
            }

            
            

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero {
                padding: 60px 0 80px;
            }

            .hero-content h1 {
                font-size: 36px;
            }

    

            .hero-images,
            .team-images {
                height: auto;
            }

            .hero-img-1,
            .team-img-1,
            .team-img-2 {
                height: 160px;
            }

            .hero-img-2 {
                height: 160px;
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
.nav-link.active {
    color: #17478B !important;
    font-weight: bold;
}

.nav-link.active::after {
    width: 100%;
    background: #17478B; /* ou var(--primary) */
}
.styled-list {
    list-style-type: disc; /* ou 'none' si tu veux personnaliser avec un ::before */
    padding-left: 1.5rem;
    margin-top: 1rem;
    color: #17478B;
    font-size: 18px;
    line-height: 1.8;
}

.styled-list li {
    margin-bottom: 0.8rem;
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
    <section class="hero-section" style="background-image: url('LandingPage/images/image1.jpg'); background-size: cover; background-position: center; padding: 200px 0;">
        <div class="container">
            <div class="hero-content">
               <h1 style="color: #F8F9FA; font-size: 4rem;" class="fw-bold  fade-in">La Recherche Et Le Progrès Scientifique</h1>
            </div>
        </div>
    </section>

     <main>
        <section class="hero">
            <div class="container">
                <div class="hero-grid ">
                    <div class="hero-content fade-in">
                        <h1>Un Réseau D’Excellence Entre Universités Africaines Et Européennes</h1>
                    
                        <p>La Chaire UNESCO de l’UMA favorise la coopération scientifique en créant un réseau d’excellence régional et sous-régional. Ce réseau permet de :</p>
                        <ul class="styled-list">
                            <li>Partager expériences, méthodologies et expertises pour une gestion responsable des universités.</li>
                            <li>Renforcer la collaboration entre chercheurs pour relever ensemble les défis du développement durable en Afrique.</li>
                        
                     </ul>
                        
                    </div>
                    <div class="hero-images fade-in ">
                        <div class="hero-img-1  fade-in"></div>
                        <div class="hero-img-2  fade-in"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mission">
            <div class="container">
                <div class="mission-grid">
                    <div>
                        <h2 class="hero-title fade-in">Conférences, Publications Et Innovations
                        </h2>
                    </div>
                    <div class="mission-text">
                        <p>Pour stimuler la réflexion et l’action, la chaire organise :</p>
                        <ul class="styled-list">
                            <li>Des conférences thématiques sur la durabilité des organisations en Afrique, mettant en lumière les leviers d’action efficaces.</li>
                            <li>La production scientifique avec la publication d’un ouvrage majeur sur la Responsabilité Sociétale des Universités (RSU) en Afrique.</li>
                            <li>L’innovation par la recherche, moteur clé pour générer des solutions nouvelles adaptées aux enjeux actuels.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <h4 class="footer-title">À propos</h4>
                    <p>La Chaire UNESCO sur l'enseignement supérieur pour le développement durable en Afrique, hébergée à l'Université de la Manouba.</p>
                    <div class="social-container">
                        <a href="https://www.linkedin.com/company/unesco-chair-on-higher-education-for-sustainable-development-in-africa/posts/?feedView=all" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61568069037666" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <h4 class="footer-title">Liens rapides</h4>
                    <ul class="footer-links">
                        <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a></li>
                        <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">À propos</a></li>
                        <li><a class="{{ request()->routeIs('actualites') ? 'active' : '' }}" href="{{ route('actualites') }}">Actualités</a></li>
                        <li><a class="{{ request()->routeIs('ressources') ? 'active' : '' }}"  href="{{ route('ressources') }}">Ressources</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h4 class="footer-title">Newsletter</h4>
                     <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Entrez votre email" required>
                    <button type="submit">S'abonner</button>
                    </form>
                    <div class="mt-4">
                        <small>© 2025 Chaire UNESCO UMA. Tous droits réservés.</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap JS and AOS for animations -->
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
        // Animation au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observer tous les éléments avec la classe fade-in
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Animation immédiate pour le titre hero
        setTimeout(() => {
            document.querySelector('.hero-title').classList.add('visible');
        }, 300);
    </script>

</body>
</html>
