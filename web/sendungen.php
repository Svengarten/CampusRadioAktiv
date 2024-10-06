<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Beispiel-Daten für alte Sendungen
$sendungen = [
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#sendung', '#campusradio'],
        'audio' => '/assets/audio/sendung1.mp3',
        'description' => 'Diese Sendung behandelt spannende Themen rund um das Campus Leben.',
        'likes' => 12
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#interview', '#podcast'],
        'audio' => '/assets/audio/sendung2.mp3',
        'description' => 'Ein interessantes Interview mit einem Gast über aktuelle Themen.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Aktiv',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#musik', '#kultur'],
        'audio' => '/assets/audio/sendung3.mp3',
        'description' => 'Ein Rückblick auf die besten Musikstücke des Jahres.',
        'likes' => 35
    ],
    [
        'nickname' => 'Campus Radio Live',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#news', '#aktuell'],
        'audio' => '/assets/audio/sendung4.mp3',
        'description' => 'Aktuelle Nachrichten und Trends aus der Welt.',
        'likes' => 25
    ],
    [
        'nickname' => 'Campus Radio Talk',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#diskussion', '#meinung'],
        'audio' => '/assets/audio/sendung5.mp3',
        'description' => 'Eine Diskussion über gesellschaftliche Themen.',
        'likes' => 15
    ],
    [
        'nickname' => 'Campus Radio Mix',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#musik', '#mixe'],
        'audio' => '/assets/audio/sendung6.mp3',
        'description' => 'Die besten Musikmixe für jede Gelegenheit.',
        'likes' => 30
    ],
    [
        'nickname' => 'Campus Radio News',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#topnews', '#scoop'],
        'audio' => '/assets/audio/sendung7.mp3',
        'description' => 'Die wichtigsten Nachrichten des Tages.',
        'likes' => 40
    ],
    [
        'nickname' => 'Campus Radio Spotlight',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#highlight', '#featured'],
        'audio' => '/assets/audio/sendung8.mp3',
        'description' => 'Ein Blick auf die besten Künstler und ihre Geschichten.',
        'likes' => 22
    ],
    [
        'nickname' => 'Campus Radio Retro',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#retro', '#nostalgie'],
        'audio' => '/assets/audio/sendung9.mp3',
        'description' => 'Eine Reise in die Vergangenheit mit klassischen Hits.',
        'likes' => 50
    ],
    [
        'nickname' => 'Campus Radio Experiment',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#experiment', '#neuentdeckungen'],
        'audio' => '/assets/audio/sendung10.mp3',
        'description' => 'Neue Musikstile und Künstler im Fokus.',
        'likes' => 28
    ],
    [
        'nickname' => 'Campus Radio Mix',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#live', '#djs'],
        'audio' => '/assets/audio/sendung11.mp3',
        'description' => 'Live-Mixes von unseren DJs.',
        'likes' => 60
    ],
    [
        'nickname' => 'Campus Radio Interview',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#interview', '#persönlichkeiten'],
        'audio' => '/assets/audio/sendung12.mp3',
        'description' => 'Interviews mit interessanten Persönlichkeiten.',
        'likes' => 18
    ],
    [
        'nickname' => 'Campus Radio Culture',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#kultur', '#kunst'],
        'audio' => '/assets/audio/sendung13.mp3',
        'description' => 'Kulturelle Highlights und Veranstaltungen.',
        'likes' => 26
    ],
    [
        'nickname' => 'Campus Radio Academy',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#bildung', '#studium'],
        'audio' => '/assets/audio/sendung14.mp3',
        'description' => 'Bildungsthemen und Tipps für Studierende.',
        'likes' => 34
    ],
    [
        'nickname' => 'Campus Radio Local',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#lokal', '#community'],
        'audio' => '/assets/audio/sendung15.mp3',
        'description' => 'Neuigkeiten aus der Region und lokale Veranstaltungen.',
        'likes' => 17
    ],
    [
        'nickname' => 'Campus Radio Special',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#special', '#eurovision'],
        'audio' => '/assets/audio/sendung16.mp3',
        'description' => 'Spezialsendungen zu besonderen Anlässen.',
        'likes' => 45
    ],
    [
        'nickname' => 'Campus Radio Throwback',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#throwback', '#90s'],
        'audio' => '/assets/audio/sendung17.mp3',
        'description' => 'Die besten Hits aus den 90ern.',
        'likes' => 29
    ],
    [
        'nickname' => 'Campus Radio Sounds',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#sounds', '#musikgenuss'],
        'audio' => '/assets/audio/sendung18.mp3',
        'description' => 'Eine klangliche Reise durch verschiedene Genres.',
        'likes' => 31
    ],
    [
        'nickname' => 'Campus Radio Insight',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#einsichten', '#analysen'],
        'audio' => '/assets/audio/sendung19.mp3',
        'description' => 'Tiefere Einblicke in aktuelle Themen.',
        'likes' => 23
    ],
    [
        'nickname' => 'Campus Radio Forum',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#forum', '#diskussion'],
        'audio' => '/assets/audio/sendung20.mp3',
        'description' => 'Offene Foren zu wichtigen gesellschaftlichen Fragen.',
        'likes' => 14
    ],
    [
        'nickname' => 'Campus Radio Trend',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#trend', '#innovation'],
        'audio' => '/assets/audio/sendung21.mp3',
        'description' => 'Die neuesten Trends in Musik und Kultur.',
        'likes' => 33
    ],
    [
        'nickname' => 'Campus Radio Highlights',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#highlights', '#events'],
        'audio' => '/assets/audio/sendung22.mp3',
        'description' => 'Die besten Highlights der Woche.',
        'likes' => 39
    ],
    [
        'nickname' => 'Campus Radio Focus',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#fokus', '#schwerpunkt'],
        'audio' => '/assets/audio/sendung23.mp3',
        'description' => 'Ein Fokus auf spezielle Themen und Persönlichkeiten.',
        'likes' => 20
    ],
    [
        'nickname' => 'Campus Radio Story',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#story', '#erzählungen'],
        'audio' => '/assets/audio/sendung24.mp3',
        'description' => 'Erzählungen und Geschichten von verschiedenen Gästen.',
        'likes' => 30
    ],
    [
        'nickname' => 'Campus Radio Journey',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#reise', '#abenteuer'],
        'audio' => '/assets/audio/sendung25.mp3',
        'description' => 'Abenteuer und Reisen rund um die Welt.',
        'likes' => 42
    ],
    [
        'nickname' => 'Campus Radio Inspirations',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#inspiration', '#motivation'],
        'audio' => '/assets/audio/sendung26.mp3',
        'description' => 'Inspirierende Geschichten von Menschen.',
        'likes' => 27
    ],
    [
        'nickname' => 'Campus Radio Insights',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#einsichten', '#analysen'],
        'audio' => '/assets/audio/sendung27.mp3',
        'description' => 'Einblicke in verschiedene Kulturen und Traditionen.',
        'likes' => 36
    ],
    [
        'nickname' => 'Campus Radio Voices',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#stimmen', '#geschichten'],
        'audio' => '/assets/audio/sendung28.mp3',
        'description' => 'Die Stimmen verschiedener Gäste im Radio.',
        'likes' => 48
    ],
    [
        'nickname' => 'Campus Radio Connections',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#verbindungen', '#netzwerke'],
        'audio' => '/assets/audio/sendung29.mp3',
        'description' => 'Verbindungen zwischen Menschen und Ideen.',
        'likes' => 38
    ],
    [
        'nickname' => 'Campus Radio Exchange',
        'avatar' => '/assets/img/CRA_Logo.svg',
        'hashtags' => ['#austausch', '#netzwerk'],
        'audio' => '/assets/audio/sendung30.mp3',
        'description' => 'Ein Austausch über wichtige Themen in der Gesellschaft.',
        'likes' => 49
    ]
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
