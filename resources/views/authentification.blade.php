<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Éducation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow-x: hidden;
        }

        .auth-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            padding: 3rem;
        }

        .auth-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        h1 {
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
            color:#0069B4;
        }

        h1:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: #0069B4;
        }

        .role-card {
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            color:#17478B;
        }

        .role-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .btn-outline-primary, .btn-outline-success, .btn-outline-warning {
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-outline-primary {
            border-color: #0069B4;
            color: #0069B4;
        }

        .btn-outline-primary:hover {
            background-color: #0069B4;
            color: white;
            transform: scale(1.05);
        }

        .btn-outline-success, .btn-outline-warning {
            border-color: #0069B4;
            color: #0069B4;
        }

        .btn-outline-success:hover, .btn-outline-warning:hover {
            background-color: #0069B4;
            border-color: #0069B4;
            color: white;
            transform: scale(1.05);
        }

        .btn-primary {
            background: #0069B4;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: #0069B4;
            transform: scale(1.05);
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #e1e1e1;
            transition: all 0.3s;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0069B4;
        }

        .hidden {
            display: none;
            opacity: 0;
            transform: translateY(20px);
        }

        .show {
            display: block;
            opacity: 1;
            transform: translateY(0);
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .floating-bubble {
            position: absolute;
            background: rgba(0, 105, 180, 0.1);
            border-radius: 50%;
            pointer-events: none;
            z-index: -1;
            animation: float-bubble 15s infinite linear;
        }

        @keyframes float-bubble {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(50px, -50px) rotate(90deg);
            }
            50% {
                transform: translate(0, -100px) rotate(180deg);
            }
            75% {
                transform: translate(-50px, -50px) rotate(270deg);
            }
            100% {
                transform: translate(0, 0) rotate(360deg);
            }
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

        .btn-outline-secondary {
            border-color: #cccccc;
            color: #cccccc;
            cursor: not-allowed;
        }
        .back-link {
  color: #0069B4;
  text-decoration: none;
  font-weight: 500;
  font-size: 18px;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  cursor: pointer;
  position: absolute;
  top: 30px;
  left: 30px;
  z-index: 10;
  transition: color 0.3s ease;
}

.back-link:hover {
  color: #004a86;          /* couleur plus foncée au hover */
  text-decoration: none;   /* pas de soulignement */
  filter: brightness(0.9); /* léger assombrissement */
  transform: translateX(-3px); /* petite translation vers la gauche */
  transition: color 0.3s ease, transform 0.3s ease, filter 0.3s ease;
  cursor: pointer;
}

.back-link i {
  font-size: 18px;
}
    </style>
</head>
<body>

<a href="javascript:history.back()" class="back-link">
    <i class="fas fa-arrow-left"></i> Retour
</a>
    <div class="floating-bubble" style="width: 120px; height: 120px; top: 15%; left: 10%;"></div>
    <div class="floating-bubble" style="width: 80px; height: 80px; top: 60%; left: 5%; animation-delay: 2s;"></div>
    <div class="floating-bubble" style="width: 150px; height: 150px; top: 30%; right: 8%; animation-delay: 1s;"></div>
    <div class="floating-bubble" style="width: 100px; height: 100px; bottom: 10%; right: 15%; animation-delay: 3s;"></div>

    <div class="container">
        <div class="auth-container mx-auto" style="max-width: 800px;">
            <h1 class="text-center mb-5">Bienvenue sur votre espace</h1>

            <div id="roleSelection">
                <div class="row g-4">
                    <!-- Admin -->
                    <div class="col-md-6 reveal-item">
                        <div class="role-card card h-100 p-4 text-center">
                            <i class="fas fa-chalkboard-teacher fa-3x mb-3" style="color: #0069B4 !important;"></i>
                            <h3>Admin</h3>
                            <button class="btn btn-outline-success mt-2" onclick="showLoginForm('teacher')">Accéder</button>
                        </div>
                    </div>
                    <!-- Enseignant -->
                    <div class="col-md-6 reveal-item">
                        <div class="role-card card h-100 p-4 text-center">
                            <i class="fas fa-chalkboard-teacher fa-3x mb-3" style="color: #0069B4 !important;"></i>
                            <h3>Enseignant</h3>
                            <button class="btn btn-outline-success mt-2" onclick="showLoginForm('teacher')">Accéder</button>
                        </div>
                    </div>

                    <!-- Étudiant désactivé -->
                    <div class="col-md-6 reveal-item" style="transition-delay: 0.2s;">
                        <div class="role-card card h-100 p-4 text-center">
                            <i class="fas fa-user-graduate fa-3x mb-3" style="color: #cccccc !important;"></i>
                            <h3 style="color: #cccccc;">Étudiant</h3>
                            <button class="btn btn-outline-secondary mt-2" disabled>Accéder</button>
                        </div>
                    </div>

                    <!-- Expert désactivé -->
                    <div class="col-md-6 reveal-item" style="transition-delay: 0.4s;">
                        <div class="role-card card h-100 p-4 text-center">
                            <i class="fas fa-user-tie fa-3x mb-3" style="color: #cccccc !important;"></i>
                            <h3 style="color: #cccccc;">Expert</h3>
                            <button class="btn btn-outline-secondary mt-2" disabled>Accéder</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire Login Enseignant -->
            <div id="teacherLogin" class="hidden">
                <h2 style="color:#17478B"class="text-center mb-4">Connexion </h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Adresse email" required autofocus>
                    </div>
                    <div class="mb-4 position-relative">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>
                        <i class="fa fa-eye" onclick="togglePassword()"></i>
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Se connecter </button>
                </form>
                
            </div>

        </div>
    </div>

    <script>
        function showLoginForm(role) {
            document.getElementById('roleSelection').classList.add('hidden');
            if(role === 'teacher') {
                document.getElementById('teacherLogin').classList.add('show');
            }
        }

        function showRoleSelection() {
            document.querySelectorAll('.hidden').forEach(el => {
                el.classList.remove('show');
                el.classList.add('hidden');
            });
            document.getElementById('roleSelection').classList.remove('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            revealItems();

            const bubbles = document.querySelectorAll('.floating-bubble');
            bubbles.forEach(bubble => {
                setInterval(() => {
                    const randomX = (Math.random() - 0.5) * 20;
                    const randomY = (Math.random() - 0.5) * 20;
                    bubble.style.transform = `translate(${randomX}px, ${randomY}px)`;
                }, 2000);
            });
        });

        function revealItems() {
            const revealItems = document.querySelectorAll('.reveal-item');
            revealItems.forEach(item => {
                setTimeout(() => {
                    item.classList.add('revealed');
                }, 300);
            });
        }
    </script>
    <script>
        function togglePassword() {
        const passwordField = document.getElementById("password");
        const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
        passwordField.setAttribute("type", type);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
