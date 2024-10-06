<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Funktion zum Generieren von Thumbnails
function generateThumbnail($videoPath, $thumbnailPath) {
    $command = "ffmpeg -i $videoPath -ss 00:00:01.000 -vframes 1 $thumbnailPath";
    exec($command, $output, $return_var);
    return $return_var === 0;
}

// Beispiel-Daten für Posts
$posts = [
    [
        'nickname' => 'Instagram',
        'avatar' => '/assets/img/Insta.jpg',
        'hashtags' => ['#festebeziehungen', '#podcast', '#interviews', '#studentenradio', '#campusradioaktiv'],
        'video' => '/assets/videos/src/Yannik.mp4',
        'thumbnail' => '/assets/videos/src/Silvester.mp4',
        'text' => '🎙️ Begleitet Jannik hinter die Kulissen von Campus Radio Aktiv und seinem Podcast Kielafornia. Hier ist ein kleiner Vorgeschmack auf seine nächsten Interviews bei „Janniks Straßenumfrage“ zum Thema feste Beziehung. Diese gibt es in der nächsten Donnerstag Morning Sendung zwischen 8-10 Uhr bei Kiel FM und in der nächsten Podcastfolge! 🙌🏼',
        'likes' => 23
    ],
    [
        'nickname' => 'Instagram',
        'avatar' => '/assets/img/Insta.jpg',
        'hashtags' => ['#schampusradioaktiv', '#Radio'],
        'video' => '/assets/videos/src/Silvester.mp4',
        'thumbnail' => '/assets/videos/thumb/1_event.jpg',
        'text' => 'BEHIND THE SCENES - unsere Schampusradio Aktiv Show 2023 🪩🎊🍾🪩🎊🍾🪩🎊🍾🪩🎊🍾 Was ging bei unserer letzten Show eigentlich hinter den Kulissen ab? Jetzt habt ihr eure Antwort. 🫣🥂 Wir hoffen ihr seid alle gut ins neue Jahr gerutscht. An alle Student:innen: Viel Erfolg bei der Klausurenphase. Ihr packt das!!! ✊🏼',
        'likes' => 18
    ],
    [
        'nickname' => 'Instagram',
        'avatar' => '/assets/img/Insta.jpg',
        'hashtags' => ['#oscar', '#oscars', '#oscars2024', '#fachhochschulekiel', '#fhkiel'],
        'video' => '/assets/videos/src/Oscar3.mp4',
        'thumbnail' => '/assets/videos/thumb/2_live.jpg',
        'text' => '🍿 Schaue den ganzen Stream als VOD jetzt auf Twitch!',
        'likes' => 30
    ],
    [
        'nickname' => 'Instagram',
        'avatar' => '/assets/img/Insta.jpg',
        'hashtags' => ['#oscar', '#oscars', '#oscars2024', '#fachhochschulekiel', '#fhkiel'],
        'video' => '/assets/videos/src/Oscar2.mp4',
        'thumbnail' => '/assets/videos/thumb/3_interview.jpg',
        'text' => '🍿 Schaue den ganzen Stream als VOD jetzt auf Twitch!',
        'likes' => 25
    ],
    [
        'nickname' => 'Instagram',
        'avatar' => '/assets/img/Insta.jpg',
        'hashtags' => ['#oscar', '#oscars', '#oscars2024', '#fachhochschulekiel', '#fhkiel'],
        'video' => '/assets/videos/src/Oscar1.mp4',
        'thumbnail' => '/assets/videos/thumb/4_community.jpg',
        'text' => '🍿 Schaue den ganzen Stream als VOD jetzt auf Twitch!',
        'likes' => 40
    ],
];

// Beispielhafte Verwendung in social.php

// Wenn der Parameter 'nickname' in der URL vorhanden ist
if (isset($_GET['nickname'])) {
        $nickname = htmlspecialchars($_GET['nickname']); // Sichere Ausgabe
        // Hier kannst du dann die Logik für den Nickname einfügen
        echo "Profil von " . $nickname;
    } 
    
    // Wenn der Parameter 'tag' in der URL vorhanden ist
    if (isset($_GET['tag'])) {
        $tag = htmlspecialchars($_GET['tag']); // Sichere Ausgabe
        // Hier kannst du dann die Logik für das Hashtag einfügen
        echo "Beiträge zu " . $tag;
    } 
// Generiere Thumbnails für jedes Video (optional)
foreach ($posts as $post) {
    if (!file_exists($post['thumbnail'])) { // Wenn das Thumbnail noch nicht existiert
        generateThumbnail($post['video'], $post['thumbnail']);
    }
}

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader);

// Rendern der Seite
echo $twig->render('social.twig', ['posts' => $posts]);
