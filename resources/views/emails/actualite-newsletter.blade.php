<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Actualité Newsletter - Chaire UNESCO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f9ff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            background-color: #ffffff;
            margin: 40px auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #004080;
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .content {
            padding: 40px;
            color: #333333;
            line-height: 1.8;
        }
        .footer {
            background-color: #e6f0ff;
            padding: 30px;
            text-align: center;
            font-size: 14px;
            color: #666666;
        }
        .btn {
            display: inline-block;
            background-color: #004080;
            color: #ffffff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Chaire UNESCO</h1>
            <p>Newsletter Officielle</p>
        </div>

        <div class="content">
            <h2>{{ $title ?? 'Dernières actualités' }}</h2>
            <p>
                {!! nl2br(e($body ?? 'Bienvenue sur notre page d’actualité. Retrouvez ici nos dernières nouvelles, événements, projets et annonces.')) !!}
            </p>

            <a href="{{ url('/') }}" class="btn">Retour à l’accueil</a>
        </div>

        <div class="footer">
            © {{ date('Y') }} Chaire UNESCO. Tous droits réservés.
        </div>
    </div>
</body>
</html>
