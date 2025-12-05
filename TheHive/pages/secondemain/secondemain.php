<?php
session_start();
require_once "../../php/navbar.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>The Hive - A propos</title>
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
    <div class="container mx-auto mt-10 px-4 max-w-3xl">
        <!-- Fil d'Ariane -->
        <nav class="text-sm mb-6" aria-label="breadcrumb">
            <ol class="list-reset flex text-gray-700">
                <li>
                    <a href="../../index.php" class="text-blue-600 hover:underline">Accueil</a>
                </li>
                <li><span class="mx-2"> &gt; </span></li>
                <li class="text-black font-semibold">Seconde main</li>
            </ol>
        </nav>

        <div class="bg-white rounded-xl shadow-md p-8 mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-yellow-700 mb-6">Pourquoi Recycler vos Vieux PC avec Linux ?</h1>
            <p class="text-gray-700 text-lg mb-5 text-center">
                <span class="font-semibold">Le remplacement systématique des équipements électroniques crée un impact environnemental désastreux</span>, notamment à cause de l'extraction des métaux rares et de la gestion des Déchets d'Équipements Électriques et Électroniques (DEEE).
            </p>
            <div class="border-l-4 border-yellow-500 bg-yellow-50 p-4 mb-6">
                <p class="text-yellow-800 font-medium">
                    En optant pour la réutilisation, vous participez activement à l'écologie numérique :
                </p>
            </div>
            <ul class="space-y-5 text-gray-800">
                <li>
                    <span class="font-semibold text-yellow-700">Prolongation de la Durée de Vie du Matériel (Lutte contre l’Obsolescence)</span><br>
                    <span class="ml-4">
                        Vos anciens PC sont souvent mis au rebut non pas parce que leur matériel est défaillant, mais parce que les systèmes d'exploitation modernes (Windows, macOS) sont trop gourmands en ressources. <span class="text-yellow-800 font-semibold">Linux est léger et efficace</span>, permettant à une machine de 10 ans de retrouver une vitesse et une utilité optimales.
                    </span>
                </li>
                <li>
                    <span class="font-semibold text-yellow-700">Réduction de l’Empreinte Carbone</span><br>
                    <span class="ml-4">
                        La phase de fabrication d’un nouvel ordinateur est, de loin, la plus coûteuse en énergie et en ressources. En prolongeant la vie de votre équipement de quelques années supplémentaires, <span class="text-yellow-800 font-semibold">vous réduisez immédiatement votre contribution aux émissions de CO₂ liées à la production</span>.
                    </span>
                </li>
                <li>
                    <span class="font-semibold text-yellow-700">Zéro Coût de Licence et Sécurité</span><br>
                    <span class="ml-4">
                        <span class="text-yellow-800 font-semibold">Linux est libre et gratuit.</span> Sans frais de licence, cette réutilisation est économique. Sa structure et sa communauté active en font une solution extrêmement stable et sécurisée.
                    </span>
                </li>
            </ul>
        </div>

        <div class="bg-yellow-50 rounded-lg shadow p-6 mb-10">
            <h2 class="text-2xl font-bold text-yellow-900 mb-2">Le Choix de Linux : Le Logiciel au Service du Matériel Faible</h2>
            <p class="mb-5">
                <span class="text-yellow-800">Linux est la solution idéale pour le matériel faible ou vieillissant</span> grâce à :
            </p>
            <ul class="list-disc pl-6 space-y-2 text-gray-800">
                <li>
                    <span class="font-semibold text-yellow-800">Sa Légèreté :</span>
                    Linux offre des distributions légères (<span class="italic">Xubuntu, Lubuntu, Mint</span>) pouvant fonctionner sans effort avec seulement 2 Go de RAM et un processeur modeste.
                </li>
                <li>
                    <span class="font-semibold text-yellow-800">Sa Flexibilité :</span>
                    Il s’adapte à des usages spécifiques (serveur domestique, borne de consultation, bureautique simple) sans le poids des logiciels inutiles.
                </li>
                <li>
                    <span class="font-semibold text-yellow-800">Son Efficacité :</span>
                    Linux évite les processus d’arrière-plan superflus et garantit une performance stable, même sur un matériel jugé obsolète ailleurs.
                </li>
            </ul>
        </div>

        <div class="text-center my-10">
            <span class="inline-block bg-yellow-100 border border-yellow-300 rounded px-5 py-4">
                <span class="text-lg font-semibold text-yellow-900">The Hive vous encourage :</span><br>
                <span class="text-yellow-800 font-medium">Avant de jeter, installez Linux.<br>
                Faites de l’obsolescence programmée une histoire ancienne !</span>
            </span>
        </div>
    </div>
</body>


<?php
require_once "../../php/footer.php";
?>