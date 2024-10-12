<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../model/post_data.php'; 

// Thumbnail generierung
function generateThumbnail($videoPath, $thumbnailPath) {
    $command = "ffmpeg -i $videoPath -ss 00:00:01.000 -vframes 1 $thumbnailPath";
    exec($command, $output, $return_var);
    return $return_var === 0; 
}

// Wenn Nicname gesetzt ist
if (isset($_GET['nickname'])) {
    $nickname = htmlspecialchars($_GET['nickname']); 
    // Logic Nickname
    echo "Profil von " . $nickname;
} 
    
// Wenn Hastag gesetzt ist
if (isset($_GET['tag'])) {
    $tag = htmlspecialchars($_GET['tag']); // Sichere Ausgabe
    // Hier kannst du dann die Logik für das Hashtag einfügen
    echo "Beiträge zu " . $tag;
}

// Einbindung Thumbnail
foreach ($posts as $post) {
    $thumbnailPath = '/assets/videos/thumb/' . basename($post['post_video_file'], '.mp4') . '_thumbnail.jpg';
    if (!file_exists($thumbnailPath)) { // Wenn das Thumbnail nicht existiert
        generateThumbnail($post['post_video_file'], $thumbnailPath);
    }
}

// Twig ini
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader);

// Site rendern
echo $twig->render('social.twig', ['posts' => $posts]);
