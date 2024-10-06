<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../path/to/post_data.php'; // Stelle sicher, dass der Pfad korrekt ist

// Funktion zum Generieren von Thumbnails
function generateThumbnail($videoPath, $thumbnailPath) {
    $command = "ffmpeg -i $videoPath -ss 00:00:01.000 -vframes 1 $thumbnailPath";
    exec($command, $output, $return_var);
    return $return_var === 0;
}

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
    // Setze den Thumbnail-Pfad basierend auf dem Benutzernamen und der Videonummer
    $thumbnailPath = '/assets/videos/thumb/' . basename($post['post_video_file'], '.mp4') . '_thumbnail.jpg';
    if (!file_exists($thumbnailPath)) { // Wenn das Thumbnail noch nicht existiert
        generateThumbnail($post['post_video_file'], $thumbnailPath);
    }
}

// Initialisiere Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader);

// Rendern der Seite
echo $twig->render('social.twig', ['posts' => $posts]);
