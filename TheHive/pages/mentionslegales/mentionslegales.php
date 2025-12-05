<?php
session_start();
require_once "../../php/navbar.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>The Hive - Mentions légales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

    <link rel="icon" type="image/png" href="../../images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../../images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="../../images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="THEHIVE" />
    <link rel="manifest" href="../../images/favicon/site.webmanifest" />
</head>

<body>
    <div class="container mx-auto mt-8 px-4 max-w-3xl">
        <!-- Fil d'Ariane -->
        <nav class="text-sm mb-6" aria-label="breadcrumb">
            <ol class="list-reset flex text-gray-700">
                <li>
                    <a href="../../index.php" class="text-blue-600 hover:underline">Accueil</a>
                </li>
                <li><span class="mx-2"> &gt; </span></li>
                <li class="text-black font-semibold">Mentions légales</li>
            </ol>
        </nav>

        <div>
            <!-- Mettez ici votre texte pour les mentions légales -->
        </div>
    </div>
</body>

<?php
require_once "../../php/footer.php";
?>