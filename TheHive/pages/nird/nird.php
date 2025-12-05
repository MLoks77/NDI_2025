<?php
session_start();
require_once "../../php/navbar.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>The Hive - NIRD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
</head>



<body>
<div class="w-full h-screen relative">
    <img src="../../images/NIRD_wallpaper.png" 
         alt="Landing Background" 
         class="object-cover w-full h-full absolute inset-0 z-50" 
         style="width:100vw; height:100vh;">
    <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-40 z-10">
    </div>
    <!-- Divider montagne en bas -->
    <div class="custom-shape-divider-bottom-1764892962">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
</div>
</body>







<?php
require_once "../../php/footer.php";
?>