<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Newsletter - Chaire UNESCO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f9ff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 20px auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #004080;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 30px;
            color: #333333;
            line-height: 1.6;
        }
        .footer {
            background-color: #e6f0ff;
            padding: 20px;
            text-align: center;
            font-size: 13px;
            color: #666666;
        }
        .btn {
            display: inline-block;
            background-color: #004080;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
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
        <h2>{{ $subject ?? 'Nouveautés & Annonces' }}</h2>
        <p>
            {{ $messageContent ?? 'Bienvenue dans notre dernière édition de la newsletter. Nous sommes heureux de partager avec vous les dernières nouvelles, événements et projets.' }}
        </p>

        <a href="{{ url('/') }}" class="btn">Visiter notre site</a>
    </div>
    <div class="footer">
        © {{ date('Y') }} Chaire UNESCO. Tous droits réservés.<br>
        Vous recevez ce mail car vous vous êtes inscrit à notre newsletter.
    </div>
</div>
</body>
</html>
