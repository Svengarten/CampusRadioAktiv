<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Beispiel-Daten für neue Sendungen
$sendungen = [
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    // ... weitere Sendungen
];

// Funktion, um die Beschreibung auf eine bestimmte Länge zu kürzen
function truncateDescription($description, $length = 100) {
    if (strlen($description) > $length) {
        return substr($description, 0, $length) . '...'; // Beschreibung kürzen und '...' hinzufügen
    }
    return $description; // Rückgabe der Originalbeschreibung, wenn die Länge in Ordnung ist
}

// Twig-Setup
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader);

// Vorbereiten der Sendungsdaten mit gekürzten Beschreibungen
foreach ($sendungen as &$sendung) {
    $sendung['description'] = truncateDescription($sendung['description'], 100); // Maximale Länge auf 100 Zeichen setzen
}

// Rendern der Seite
echo $twig->render('sendungen.twig', ['sendungen' => $sendungen]);
?>
