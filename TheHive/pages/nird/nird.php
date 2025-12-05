<?php
require_once "../../php/navbar.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>The Hive - NIRD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

    <link rel="icon" type="image/png" href="../../images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../../images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="../../images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="THEHIVE" />
    <link rel="manifest" href="../../images/favicon/site.webmanifest" />
</head>

<body class=" text-gray-800 font-sans">
    
    <div class="w-full h-screen relative">
        <img src="../../images/NIRD_wallpaper.png" alt="Landing Background"
            class="object-cover w-full h-full absolute inset-0 z-30" style="width:100vw; height:100vh;">
        
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-40 z-10">
            </div>

        <div class="custom-shape-divider-bottom-1764892962 z-20 absolute bottom-0 w-full">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none" class="fill-gray-50"> <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <section class="py-20 px-4 md:px-8 bg-gray-50 relative z-30">
        <div class="max-w-7xl mx-auto">

        <!-- input snake -->
        <div class="mb-16 bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto">
            <div class="text-center mb-6">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Accès Secret</h3>
                <p class="text-gray-600 mb-4">Entrez le mot de passe pour accéder au jeu</p>
                <p class="text-gray-600 mb-4">Ex: mot1 mot2 mot3</p>
                <p class="text-gray-600 mb-4">aucun accent, aucune majuscule</p>
                <p class="text-gray-600 mb-4">attention pas de exit</p>    
                
                <!-- Indice avec ronds colorés -->
                <div class="flex justify-center items-center gap-3 mb-6">
                    <div class="w-8 h-8 rounded-full bg-blue-500 shadow-md"></div>
                    <div class="w-8 h-8 rounded-full bg-red-500 shadow-md"></div>
                    <div class="w-8 h-8 rounded-full bg-orange-500 shadow-md"></div>
                </div>
                
                <form id="snakeForm" class="space-y-4">
                    <input 
                        type="text" 
                        id="snakePassword" 
                        placeholder="3 mots"
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-yellow-500 transition duration-200 text-center text-lg"
                        autocomplete="off"
                    >
                    <button 
                        type="submit"
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-6 rounded-lg shadow transition duration-200"
                    >
                        Accéder au jeu
                    </button>
                </form>
                
                <p id="errorMessage" class="text-red-500 text-sm mt-4 hidden"></p>
            </div>
        </div>
            
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Les Trois Piliers NIRD</h2>
                <h3 class="text-xl md:text-2xl font-semibold text-yellow-600 mb-6 uppercase tracking-widest">Le Manifeste de The Hive</h3>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    La démarche NIRD incarne une philosophie du numérique où l'humain et la planète sont au centre des choix technologiques. 
                    The Hive, en s'alignant sur ces principes, propose une approche à la fois éthique, collaborative et durable de la technologie.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <div class="p-8 flex-grow">
                        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Inclusion</h4>
                        <h5 class="text-sm font-semibold text-gray-500 uppercase mb-4">L'Accès Équitable au Numérique</h5>
                        <p class="text-gray-600 mb-6">
                            Le pilier de l'Inclusion vise à réduire la fracture numérique en garantissant un accès équitable aux outils informatiques pour tous. Pour les établissements et les élèves, cela signifie dépasser les barrières socio-économiques.
                        </p>
                    </div>
                    <div class="bg-gray-100 p-8 border-t-4 border-yellow-500">
                        <h5 class="font-bold text-gray-800 mb-2 flex items-center">
                            <span class="mr-2">🐝</span> Lien avec The Hive
                        </h5>
                        <p class="text-sm text-gray-700 italic">
                            Notre mission de <span class="text-blue-600 font-semibold">reconditionnement</span> de PC obsolètes et l'intégration de Linux sont au cœur de l'Inclusion. En redonnant une seconde vie à du matériel de faible coût, The Hive permet d'équiper des personnes et des structures qui n'auraient pas les moyens d'acquérir du neuf. L'accès à une machine performante et sécurisée devient une réalité pour tous.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <div class="p-8 flex-grow">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Durabilité</h4>
                        <h5 class="text-sm font-semibold text-gray-500 uppercase mb-4">Lutter Contre l'Obsolescence</h5>
                        <p class="text-gray-600 mb-6">
                            La <span style="color: #dc2626; font-weight: bold;">Durabilité</span> est le combat contre l'obsolescence programmée et l'allongement du cycle de vie des équipements. C'est un engagement pour l'environnement, mais aussi pour la maîtrise des coûts.
                        </p>
                    </div>
                    <div class="bg-gray-100 p-8 border-t-4 border-green-500">
                        <h5 class="font-bold text-gray-800 mb-2 flex items-center">
                            <span class="mr-2">🌱</span> Lien avec The Hive
                        </h5>
                        <p class="text-sm text-gray-700 italic">
                            Ce pilier est notre fondation. En standardisant l'installation de Linux, un système d'exploitation léger par nature, The Hive permet de transformer des "déchets" en ressources utilisables pour 5 à 10 ans de plus. Nous transformons ainsi l'inertie du gaspillage en une économie circulaire active et locale.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                    <div class="p-8 flex-grow">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Responsabilité</h4>
                        <h5 class="text-sm font-semibold text-gray-500 uppercase mb-4">Usage Réfléchi et Souverain</h5>
                        <p class="text-gray-600 mb-6">
                            La Responsabilité encourage l'usage raisonné du numérique et la préférence pour des technologies souveraines (logiciels libres, hébergement local) qui respectent les données personnelles et l'environnement.
                        </p>
                    </div>
                    <div class="bg-gray-100 p-8 border-t-4 border-blue-500">
                        <h5 class="font-bold text-gray-800 mb-2 flex items-center">
                            <span class="mr-2">🛡️</span> Lien avec The Hive
                        </h5>
                        <p class="text-sm text-gray-700 italic">
                            The Hive promet activement le logiciel libre. Utiliser <span style="color: orange; font-weight: bold;">Linux</span>, c'est choisir un environnement où l'utilisateur est maître de sa machine, garantissant la souveraineté des données et la transparence. C'est également un acte pédagogique : former les citoyens de demain à un numérique critique et écocitoyen.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="flex justify-center my-8">
        <a href="https://nird.forge.apps.education.fr" target="_blank" rel="noopener noreferrer" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-full shadow transition duration-200">
            Découvrir le site NIRD
        </a>
    </div>
    
    <?php
    require_once "../../php/footer.php";
    ?>
    
    <script>
        document.getElementById('snakeForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('snakePassword').value.trim().toLowerCase();
            // Accepter les 3 mots ensemble (avec ou sans accents, avec espaces)
            const validPasswords = [
                'reconditionnement durabilité linux',
                'reconditionnement durabilite linux',
                'reconditionnement durabilité linux',
                'reconditionnement durabilite linux',
                'linux reconditionnement durabilité',
                'linux reconditionnement durabilite',
                'durabilité reconditionnement linux',
                'durabilite reconditionnement linux'
            ];
            const errorMessage = document.getElementById('errorMessage');
            
            // Normaliser l'entrée : supprimer les accents et espaces multiples
            const normalizedPassword = password
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '') // Supprimer les accents
                .replace(/\s+/g, ' ') // Remplacer les espaces multiples par un seul
                .trim();
            
            // Vérifier si les 3 mots sont présents (dans n'importe quel ordre)
            const hasReconditionnement = normalizedPassword.includes('reconditionnement');
            const hasDurabilite = normalizedPassword.includes('durabilite') || normalizedPassword.includes('durabilité');
            const hasLinux = normalizedPassword.includes('linux');
            
            if (hasReconditionnement && hasDurabilite && hasLinux) {
                // Redirection vers le jeu snake
                window.location.href = '../../hidden_snake/abeille.html';
            } else {
                errorMessage.textContent = 'Mot de passe incorrect. Essayez encore !';
                errorMessage.classList.remove('hidden');
                document.getElementById('snakePassword').value = '';
                
                // Masquer le message d'erreur après 3 secondes
                setTimeout(() => {
                    errorMessage.classList.add('hidden');
                }, 3000);
            }
        });
    </script>
</body>
</html> 