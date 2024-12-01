<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #333;
        }
        .content p {
            color: #333;
            line-height: 1.6;
        }
        .content p span {
            font-weight: bold;
        }
        .footer {
            text-align: center;
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nouveau message de {{ $details['name'] }}</h1>
        </div>
        <div class="content">
            <p><span>Email:</span> {{ $details['email'] }}</p>
            <p><span>Téléphone:</span> {{ $details['phone'] }}</p>
            <p><span>Objet:</span> {{ $details['subject'] }}</p>
            <p><span>Message:</span></p>
            <p>{{ $details['message'] }}</p>
        </div>
        <div class="footer">
            <p>Ce message a été envoyé depuis le formulaire de contact de votre site web.</p>
        </div>
    </div>
</body>
</html>
