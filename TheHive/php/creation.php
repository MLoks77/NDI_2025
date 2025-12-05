<?php
// Le chemin a été ajusté en supposant que ce fichier est au même niveau que le dossier 'configdb'
require_once '../bdd/configdb.php';

// Vérifie si la méthode est POST et si le bouton "envoyer" a été cliqué
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    // Récupération et sécurisation des entrées
    // Notez l'utilisation de 'Nom', 'email' et 'MDP' (majuscules/minuscules importantes)
    $nom = htmlspecialchars($_POST['Nom']);
    $email = htmlspecialchars($_POST['email']);
    $mot_de_passe = htmlspecialchars($_POST['MDP']);

    // Hachage du mot de passe pour la sécurité
    $mot_de_passe_hashed = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    try { 
        // Requête SQL pour insérer un nouvel utilisateur
        $sql = "INSERT INTO utilisateur (nom, email, MDP)
        VALUES (:nom, :email, :MDP)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            // ATTENTION: Correction d'une faute de frappe dans votre script original
            // J'ai remplacé ':mail' par ':email'
            ':email' => $email,
            ':MDP' => $mot_de_passe_hashed,
        ]);

        // Redirection après succès
        header("Location: login.html"); // Redirection vers la page de login
        exit;
    } catch (PDOException $e) {
        // Gérer les erreurs, par exemple si l'email existe déjà
        echo "Erreur lors de l'inscription : " . $e->getMessage();
    }
} else {
    // Rediriger ou afficher une erreur si l'accès direct est tenté
    header("Location: login.html");
    exit;
}
?>