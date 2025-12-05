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

        <!-- Tab Switchers -->
        <div>
            <div class="flex border-b border-gray-200 mb-5">
                <button
                    class="tab-btn py-2 px-4 text-gray-700 border-b-2 border-transparent font-semibold focus:outline-none"
                    id="tab-ml"
                    onclick="switchTab('ml')"
                    type="button"
                >
                    Mentions légales
                </button>
                <button
                    class="tab-btn py-2 px-4 text-gray-700 border-b-2 border-transparent font-semibold focus:outline-none"
                    id="tab-rgpd"
                    onclick="switchTab('rgpd')"
                    type="button"
                >
                    RGPD
                </button>
            </div>

            <div id="content-ml" class="tab-content">
                <!-- Mettez ici votre texte pour les mentions légales -->
            </div>
            <div id="content-rgpd" class="tab-content hidden">
                <!-- Mettez ici votre texte pour le RGPD -->
            </div>
        </div>
    </div>
    <script>
        function switchTab(tab) {
            const tabs = ['ml', 'rgpd'];
            tabs.forEach(function(t) {
                document.getElementById('content-' + t).classList.add('hidden');
                document.getElementById('tab-' + t).classList.remove('border-blue-600', 'text-blue-600');
            });
            document.getElementById('content-' + tab).classList.remove('hidden');
            document.getElementById('tab-' + tab).classList.add('border-blue-600', 'text-blue-600');
        }
        switchTab('ml');
    </script>
    <style>

    </style>
</body>


<?php
require_once "../../php/footer.php";
?>