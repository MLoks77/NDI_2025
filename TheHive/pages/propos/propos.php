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
    <div class="container mx-auto mt-8 px-4 max-w-5xl">
        <!-- Fil d'Ariane -->
        <nav class="text-sm mb-6" aria-label="breadcrumb">
            <ol class="list-reset flex text-gray-700">
                <li>
                    <a href="../../index.php" class="text-blue-600 hover:underline">Accueil</a>
                </li>
                <li><span class="mx-2"> &gt; </span></li>
                <li class="text-black font-semibold">À propos</li>
            </ol>
        </nav>

        <!-- Présentation de la DA -->
        <section class="mb-10">
            <h1 class="text-3xl font-bold mb-4">Direction Artistique</h1>
            <p class="text-lg text-gray-800 mb-2">
                The Hive est un site imaginé pour soutenir les valeurs portées par NIRD : la
                durabilité, l’inclusion et la responsabilité dans le numérique.
                Nous avons choisi la ruche comme métaphore centrale : un écosystème où chaque abeille joue un rôle
                essentiel,
                où chaque action compte, et où l’équilibre collectif repose sur la contribution de chacun.

                À travers une expérience immersive et visuelle, The Hive invite l’utilisateur à découvrir comment
                naviguer de manière responsable,
                respecter l’environnement numérique, et construire un web plus durable relève du même soin minutieux que
                celui apporté par les abeilles à leur ruche.
                Comme elles, nous sommes tous acteurs du monde numérique, et nos choix – petits ou grands – participent
                à la qualité de l’ensemble.

                L’objectif : sensibiliser, éduquer et engager autour des enjeux du numérique responsable, en rendant ces
                notions accessibles, vivantes et inspirantes.

                Parce qu’un web respecté et respectueux est aussi précieux que le travail d’une abeille pour sa ruche :
                chaque geste compte, chaque clic construit.

                Join the glory Hive.
            </p>
        </section>

        <!-- Grille des membres -->
        <section>
            <h2 class="text-2xl font-semibold mb-6">Les membres du groupe MMI</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Membre 1 -->
                <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center">
                    <div
                        class="w-20 h-20 bg-yellow-100 rounded-full mb-2 flex items-center justify-center text-2xl font-bold text-yellow-700">
                        AM</div>
                    <div class="font-semibold">Alice Martin</div>
                    <p class="text-sm text-gray-600 text-center">Développeuse Front-end</p>
                </div>
                <!-- Membre 2 -->
                <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center">
                    <div
                        class="w-20 h-20 bg-yellow-100 rounded-full mb-2 flex items-center justify-center text-2xl font-bold text-yellow-700">
                        BJ</div>
                    <div class="font-semibold">Benjamin Jean</div>
                    <p class="text-sm text-gray-600 text-center">UI/UX Designer</p>
                </div>
                <!-- Membre 3 -->
                <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center">
                    <div
                        class="w-20 h-20 bg-yellow-100 rounded-full mb-2 flex items-center justify-center text-2xl font-bold text-yellow-700">
                        CL</div>
                    <div class="font-semibold">Claire Leroy</div>
                    <p class="text-sm text-gray-600 text-center">Chef·fe de projet</p>
                </div>
                <!-- Membre 4 -->
                <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center">
                    <div
                        class="w-20 h-20 bg-yellow-100 rounded-full mb-2 flex items-center justify-center text-2xl font-bold text-yellow-700">
                        DS</div>
                    <div class="font-semibold">David Simo</div>
                    <p class="text-sm text-gray-600 text-center">Développeur Back-end</p>
                </div>
                <!-- Membre 5 -->
                <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center">
                    <div
                        class="w-20 h-20 bg-yellow-100 rounded-full mb-2 flex items-center justify-center text-2xl font-bold text-yellow-700">
                        EM</div>
                    <div class="font-semibold">Emma Marchal</div>
                    <p class="text-sm text-gray-600 text-center">Rédactrice & Communication</p>
                </div>
                <!-- Membre 6 -->
                <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center">
                    <div
                        class="w-20 h-20 bg-yellow-100 rounded-full mb-2 flex items-center justify-center text-2xl font-bold text-yellow-700">
                        FL</div>
                    <div class="font-semibold">François Leroy</div>
                    <p class="text-sm text-gray-600 text-center">Intégrateur Web</p>
                </div>
                <!-- Membre 7 -->
                <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center">
                    <div
                        class="w-20 h-20 bg-yellow-100 rounded-full mb-2 flex items-center justify-center text-2xl font-bold text-yellow-700">
                        GS</div>
                    <div class="font-semibold">Gabriel Sauvage</div>
                    <p class="text-sm text-gray-600 text-center">Designer Graphique</p>
                </div>
                <!-- Membre 8 -->
                <div class="bg-white shadow rounded-lg p-4 flex flex-col items-center">
                    <div
                        class="w-20 h-20 bg-yellow-100 rounded-full mb-2 flex items-center justify-center text-2xl font-bold text-yellow-700">
                        HR</div>
                    <div class="font-semibold">Helena Rousseau</div>
                    <p class="text-sm text-gray-600 text-center">Développeuse Fullstack</p>
                </div>
            </div>
        </section>
    </div>
</body>


<?php
require_once "../../php/footer.php";
?>