<?php
session_start();
// Le chemin a été ajusté en supposant que ce fichier est au même niveau que le dossier 'configdb'
require_once '../bdd/configdb.php';

// Vérifie si la méthode est POST et si le bouton "envoyer" a été cliqué
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    // Récupération des entrées
    // Notez l'utilisation de 'email' et 'MDP' (majuscules/minuscules importantes)
    $email = $_POST['email'];
    $mot_de_passe = $_POST['MDP'];

    // Requête pour trouver l'utilisateur par email
    $sql = "SELECT nom, email, MDP FROM utilisateur WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    $utilisateur = $stmt->fetch();

    // Vérification de l'utilisateur et du mot de passe
    if ($utilisateur && password_verify($mot_de_passe, $utilisateur['MDP'])) {
        // Connexion réussie
        $_SESSION['nom'] = $utilisateur['nom'];
        $_SESSION['email'] = $utilisateur['email'];

        // Redirection vers une page protégée
        header("Location: accueil.php"); 
        exit;
    } else {
        // Échec de la connexion (utilisateur non trouvé ou mot de passe incorrect)
        // Redirection vers la page de login avec un indicateur d'erreur
        header("Location: login.html?erreur=1"); 
        exit;
    }
} else {
    // Rediriger ou afficher une erreur si l'accès direct est tenté
    header("Location: login.html");
    exit;
}
?>