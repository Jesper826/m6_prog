<?php
header('Content-Type: text/plain; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(500);
    echo 'Alleen POST verzoeken toegestaan';
    exit;
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data || !isset($data['username']) || !isset($data['password'])) {
    http_response_code(400);
    echo 'Ongeldige aanvraag';
    exit;
}

$username = $data['username'];
$passwordHash = $data['password'];

require_once('../source/config.php');
require_once('../source/database.php');
require_once('../source/dataclasses/User.php');

try {
    $user = User::GetUserByName($username, $connection);
    
    if (!$user) {
        http_response_code(404);
        echo 'Gebruiker niet gevonden';
        exit;
    }
    
    if (password_verify($passwordHash, $user->passwordhash)) {
        echo $user->displayname;
    } else {
        http_response_code(404);
        echo 'Wachtwoord onjuist';
    }
} catch (Exception $e) {
    http_response_code(500);
    echo 'Database fout: ' . $e->getMessage();
}
?>
