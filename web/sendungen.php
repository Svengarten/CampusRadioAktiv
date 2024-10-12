<?php
require_once __DIR__ . '/../vendor/autoload.php';

$sendungen = [
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#sendung', '#campusradio'],
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    // Weitere Sendungen...
];

// Funktion, um die Beschreibung zu kürzen
function truncateDescription($description, $length = 100) {
    if (strlen($description) > $length) {
        return substr($description, 0, $length) . '...';
    }
    return $description;
}

// Twig-Setup
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader);

// Vorbereiten der Sendungsdaten mit gekürzten Beschreibungen
foreach ($sendungen as &$sendung) {
    $sendung['description'] = truncateDescription($sendung['description'], 100);
}

// Rendern der Seite
echo $twig->render('sendungen.twig', ['sendungen' => $sendungen]);
?>
