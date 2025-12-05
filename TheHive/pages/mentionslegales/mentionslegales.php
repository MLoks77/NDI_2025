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
                        class="tab-btn px-4 py-2 text-gray-700 font-semibold border-b-2 border-pink-600 hover:border-pink-400 focus:outline-none"
                        onclick="showTab('mentions')">Mentions légales</button>
                    <button id="tab-rgpd"
                        class="tab-btn px-4 py-2 text-gray-700 font-semibold border-b-2 border-transparent hover:border-pink-400 focus:outline-none"
                        onclick="showTab('rgpd')">RGPD</button>
                </div>
            </div>
            <!-- Contenu des onglets -->
            <div id="content-mentions">
                <h1 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">Mentions légales</h1>
                <section class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">1. Éditeur du site</h2>
                    <p class="text-gray-600">
                        Le site www.THEHIVE.com est la propriété des étudiants de l'IUT de gustave Eiffel de meaux

                        Nom de l'association : <strong>Yakadanse</strong><br>
                        Adresse du siège social : <strong>RUE SAINT-ANTOINE 77178 SAINT-PATHUS
                        </strong><br>
                        Téléphone : <strong>06 09 99 84 14</strong><br>
                        Adresse e-mail : <strong>associationyakadanse@gmail.com</strong><br><br>
                        Responsables de la publication :<br>

                        Numéro SIREN : <strong>813872405</strong><br>
                        Numéro SIRET : <strong>81387240500010</strong><br>
                        Numéro RNA : <strong>W771009805</strong><br>


                        <br>
                        Fiche entreprise : <a
                            href="https://annuaire-entreprises.data.gouv.fr/entreprise/yakadanse-813872405"
                            target="_blank"
                            class="text-blue-600 underline">https://annuaire-entreprises.data.gouv.fr/entreprise/yakadanse-813872405</a>
                        <br>
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
                <section class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">3. Propriété intellectuelle</h2>
                    <p class="text-gray-600">
                        L'ensemble des contenus présents sur ce site (textes, images, logos, etc.) sont la propriété de
                        l'association Yakadanse ou de leurs auteurs respectifs.<br>
                        Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des
                        éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation
                        écrite préalable de l'association Yakadanse.<br>
                        Pour toute demande d'utilisation, merci de contacter : <a
                            href="mailto:associationyakadanse@gmail.com"
                            class="text-blue-600 underline">associationyakadanse@gmail.com</a>
                    </p>
                </section>
                <section class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">4. Données personnelles et cookies</h2>
                    <p class="text-gray-600">
                        Les informations recueillies via les formulaires sont enregistrées par l'association Yakadanse
                        pour
                        la gestion des inscriptions et l'organisation du Gala Yakadanse.<br>
                        Conformément à la réglementation en vigueur (RGPD), vous disposez d'un droit d'accès, de
                        rectification, d'opposition, de suppression et de portabilité de vos données personnelles.<br>
                        Pour exercer vos droits, contactez : <a href="mailto:associationyakadanse@gmail.com"
                            class="text-blue-600 underline">associationyakadanse@gmail.com</a><br><br>
                        Utilisation de cookies : <strong>Ce site n'utilise pas de cookies.</strong>
                    </p>
                </section>
                <section class="mb-8">
                    <h2 class="text-xl font-semibold text-gray-700 mb-2">5. Limitation de responsabilité</h2>
                    <p class="text-gray-600">
                        L'association Yakadanse s'efforce de fournir des informations aussi précises que possible.
                        Toutefois, elle ne pourra être tenue responsable des omissions, des inexactitudes et des
                        carences
                        dans la mise à jour, qu'elles soient de son fait ou du fait des tiers partenaires qui lui
                        fournissent ces informations.<br>
                    </p>
                </section>
            </div>
        </div>
    </div>
</body>

<?php
require_once "../../php/footer.php";
?>