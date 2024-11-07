<!DOCTYPE html>
<html>
<head>
    <title>Réception de prise de rendez-vous - ASP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-top: 6px solid #0056b3;
        }

        h1 {
            font-size: 24px;
            color: #0056b3;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin: 10px 0;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            font-size: 16px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f1f1f1;
            color: #0056b3;
            font-weight: bold;
            width: 35%;
        }

        td {
            background-color: #fafafa;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Réception de prise de rendez-vous</h1>
        <p>Bonjour {{ $data['administration'] }},</p>
        <p>Vous avez reçu une demande de rendez-vous depuis votre site ASP. Veuillez confirmer cette demande par courriel ou par SMS.</p>

        <table>
            <tr><th>Nom :</th><td>{{ $data['nom'] }}</td></tr>
            <tr><th>Email :</th><td>{{ $data['email'] }}</td></tr>
            <tr><th>Numéro de téléphone :</th><td>{{ $data['telephone'] }}</td></tr>
            <tr><th>Motif du rendez-vous :</th><td>{{ $data['motif'] }}</td></tr>
            <tr><th>Date souhaitée :</th><td>{{ $data['date_rendez_vous'] }}</td></tr>
            <tr><th>Heure souhaitée :</th><td>{{ $data['heure'] }}</td></tr>
            <tr><th>Message :</th><td>{{ $data['message'] }}</td></tr>
        </table>

        <div class="footer">
            <p>Cordialement,</p>
            <p>L'équipe de Garage ASP</p>
        </div>
    </div>
</body>
</html>
