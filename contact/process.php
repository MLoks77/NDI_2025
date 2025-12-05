<?php
header('Content-Type: application/json');

$response = [
    'success' => false,
    'errors' => []
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $sujet = filter_input(INPUT_POST, 'sujet', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if (empty($nom)) { $response['errors'][] = 'nom'; }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { $response['errors'][] = 'email'; }
    if (empty($sujet)) { $response['errors'][] = 'sujet'; }
    if (empty($message)) { $response['errors'][] = 'message'; }

    if (empty($response['errors'])) {

        sleep(1); 

        $response['success'] = true;
        $response['message'] = "Buzz envoyé avec succès !";
    } else {
        $response['message'] = "Il manque du miel dans certains champs !";
    }

} else {
    http_response_code(405);
    $response['message'] = "Méthode non autorisée, petit frelon !";
}

echo json_encode($response);
?>