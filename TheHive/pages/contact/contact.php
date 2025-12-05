<?php
session_start();
require_once "../../php/navbar.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>The Hive - contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

    <link rel="icon" type="image/png" href="../../images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../../images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="../../images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="THEHIVE" />
    <link rel="manifest" href="../../images/favicon/site.webmanifest" />

</head>

<body class="modern-contact-body">

    <main class="modern-contact-main">
        <div class="modern-contact-card">
            <h1 class="modern-title">Contactez The Hive</h1>
            <p class="modern-subtitle">Envoyez-nous un message pour toute question sur nos projets, la réutilisation ou
                Linux.</p>

            <form action="#" method="POST" class="modern-contact-form">

                <div class="form-group-modern">
                    <label for="nom">Nom / Organisation</label>
                    <input type="text" id="nom" name="nom" required
                        placeholder="Votre nom ou le nom de votre organisation">
                </div>

                <div class="form-group-modern">
                    <label for="email">Adresse E-mail</label>
                    <input type="email" id="email" name="email" required placeholder="example@domaine.com">
                </div>

                <div class="form-group-modern">
                    <label for="sujet">Sujet du Message</label>
                    <input type="text" id="sujet" name="sujet" required placeholder="Exemple : Demande de partenariat">
                </div>

                <div class="form-group-modern">
                    <label for="message">Votre Message</label>
                    <textarea id="message" name="message" rows="6" required
                        placeholder="Écrivez votre message ici..."></textarea>
                </div>

                <button type="submit" class="modern-submit-button">Envoyer</button>
            </form>
        </div>
    </main>

</body>

</html>

<?php
require_once "../../php/footer.php";
?>