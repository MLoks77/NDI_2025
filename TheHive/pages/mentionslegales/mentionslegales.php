<?php
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
            <div class="mb-8">
                <div class="flex border-b border-gray-200">
                    <button id="tab-mentions"
                        class="tab-btn px-4 py-2 text-gray-700 font-semibold border-b-2 border-yellow-600 hover:border-yellow-400 focus:outline-none"
                        >Mentions légales</button>
                </div>
            </div>
            <!-- Contenu des onglets -->
            <div id="content-mentions">
                <h1 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">Mentions légales</h1>
                <section class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">1. Éditeur du site</h2>
                    <p class="text-gray-600">
                        Le site www.THEHIVE.com est la propriété des étudiants de l'IUT de gustave Eiffel de meaux :
                            Maxime Derènes<br>
                            Témi Kergastel<br>
                            Sébastien Chisiu<br>
                            Axel Treffaut<br>
                            Timéo Da Costa<br>
                            Alexis Dumoulin<br>
                            Matt Rudman<br>
                            Abdelrahman Al-Khatib<br>
                    </p>
                </section>
                <section class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">2. Hébergeur du site</h2>
                    <p class="text-gray-600">
                        Nom de l'hébergeur : <strong>Alwaysdata</strong><br>
                        Adresse de l'hébergeur : <strong>91 rue du Faubourg Saint-Honoré, 75008 Paris,
                            France</strong><br>
                        Téléphone de l'hébergeur : <strong>01 84 16 23 40</strong>
                    </p>
                </section>
            </div>
        </div>
    </div>
</body>

<?php
require_once "../../php/footer.php";
?>