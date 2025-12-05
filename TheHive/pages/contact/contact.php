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

    <main class="fondhalveola flex flex-col items-center justify-center w-full min-h-screen px-2 py-10">
        <div class="bg-[#1e1e1e] text-[#e0e0e0] rounded-xl shadow-2xl border border-[#333] max-w-lg w-full p-10">
            <h1 class="text-center text-3xl font-semibold mb-2 text-[#F5C857]">Contactez The Hive</h1>
            <p class="text-center mb-8 text-[#a0a0a0] text-base">Envoyez-nous un message pour toute question sur nos projets, la réutilisation ou Linux.</p>

            <form action="#" method="POST" class="space-y-5">
                <div>
                    <label for="nom" class="block mb-1 text-sm font-medium text-[#c0c0c0]">Nom / Organisation</label>
                    <input type="text" id="nom" name="nom" required
                        placeholder="Votre nom ou le nom de votre organisation"
                        class="w-full px-3 py-3 border border-[#444] rounded-md bg-[#2a2a2a] text-white focus:border-[#E2852E] focus:ring-2 focus:ring-[#E2852E]/30 outline-none transition duration-300" />
                </div>

                <div>
                    <label for="email" class="block mb-1 text-sm font-medium text-[#c0c0c0]">Adresse E-mail</label>
                    <input type="email" id="email" name="email" required
                        placeholder="example@domaine.com"
                        class="w-full px-3 py-3 border border-[#444] rounded-md bg-[#2a2a2a] text-white focus:border-[#E2852E] focus:ring-2 focus:ring-[#E2852E]/30 outline-none transition duration-300" />
                </div>

                <div>
                    <label for="sujet" class="block mb-1 text-sm font-medium text-[#c0c0c0]">Sujet du Message</label>
                    <input type="text" id="sujet" name="sujet" required
                        placeholder="Exemple : Demande de partenariat"
                        class="w-full px-3 py-3 border border-[#444] rounded-md bg-[#2a2a2a] text-white focus:border-[#E2852E] focus:ring-2 focus:ring-[#E2852E]/30 outline-none transition duration-300" />
                </div>

                <div>
                    <label for="message" class="block mb-1 text-sm font-medium text-[#c0c0c0]">Votre Message</label>
                    <textarea id="message" name="message" rows="6" required
                        placeholder="Écrivez votre message ici..."
                        class="w-full px-3 py-3 border border-[#444] rounded-md bg-[#2a2a2a] text-white focus:border-[#E2852E] focus:ring-2 focus:ring-[#E2852E]/30 outline-none transition duration-300 resize-y min-h-[100px]"></textarea>
                </div>

                <button type="submit"
                    class="block w-full mt-8 py-4 bg-[#F5C857] text-[#1e1e1e] font-bold rounded-md text-lg transition-all duration-300 hover:bg-[#E2852E] hover:-translate-y-0.5 hover:shadow-lg">Envoyer</button>
            </form>
        </div>
    </main>

</body>

</html>

<?php
require_once "../../php/footer.php";
?>