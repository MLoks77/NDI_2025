<?php
header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        
        $to = "reine@votre-domaine.com";
        $email_subject = "🐝 [RUCHE] Nouveau Nectar de : " . $name;

        $email_body = "
        <html>
        <head>
            <title>Nouveau Message de la Ruche</title>
        </head>
        <body style='background-color: #141204; color: #FFEE91; font-family: sans-serif; padding: 20px;'>
            <div style='border: 4px solid #E2852E; padding: 20px; border-radius: 10px; max-width: 600px; margin: 0 auto;'>
                <h2 style='color: #F5C857; text-align: center; border-bottom: 2px solid #514231; padding-bottom: 10px;'>
                    🍯 Une abeille a parlé !
                </h2>
                <p><strong>Abeille :</strong> $name</p>
                <p><strong>Fréquence (Email) :</strong> $email</p>
                <p><strong>Type de fleur (Sujet) :</strong> $subject</p>
                
                <div style='background-color: #514231; padding: 15px; border-radius: 5px; margin-top: 20px; color: #fff;'>
                    <p style='margin: 0;'>$message</p>
                </div>
                
                <p style='font-size: 10px; color: #999; text-align: center; margin-top: 20px;'>
                    Message transmis via le Formulaire de la Gloire.
                </p>
            </div>
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: $name <$email>" . "\r\n";

        $mailSent = @mail($to, $email_subject, $email_body, $headers);


        $logEntry = "[" . date('Y-m-d H:i:s') . "] De: $name ($email) - Sujet: $subject - Message: $message" . PHP_EOL;
        file_put_contents('recolte_miel.txt', $logEntry, FILE_APPEND);

        $response['success'] = true;
        $response['message'] = "Le nectar a été livré à la Reine !";

    } else {
        $response['message'] = "L'abeille a oublié de remplir une alvéole (champs invalides) !";
    }
} else {
    $response['message'] = "Méthode non autorisée. Les guêpes sont interdites.";
}

echo json_encode($response);
?>