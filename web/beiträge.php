<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Beispiel-Daten für Beiträge
$beitraege = [
    [
        'titel' => 'Die besten Musik-Tipps',
        'autor' => 'Max Mustermann',
        'datum' => '2024-10-01',
        'inhalt' => 'Hier sind die besten Musik-Tipps für den Herbst 2024. Von klassischen Hits bis zu neuen Entdeckungen ist für jeden etwas dabei!',
        'bild' => '/assets/img/beitrag1.jpg'
    ],
    [
        'titel' => 'Campus Radio Aktuell',
        'autor' => 'Julia Schmidt',
        'datum' => '2024-09-20',
        'inhalt' => 'Alle Neuigkeiten rund um das Campus Radio und unsere kommenden Events.',
        'bild' => '/assets/img/beitrag2.jpg'
    ],
    [
        'titel' => 'Interviews mit unseren Moderatoren',
        'autor' => 'Lukas Becker',
        'datum' => '2024-09-15',
        'inhalt' => 'In dieser Serie sprechen wir mit unseren Moderatoren über ihre Lieblingsmusik und ihre Erfahrungen beim Radio.',
        'bild' => '/assets/img/beitrag3.jpg'
    ],
];

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader);

// Rendern der Seite
echo $twig->render('beitraege.twig', ['beitraege' => $beitraege]);
