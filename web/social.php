<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../model/post_data.php'; 

// Thumbnail generierung
function generateThumbnail($videoPath, $thumbnailPath) {
    $command = "ffmpeg -i $videoPath -ss 00:00:01.000 -vframes 1 $thumbnailPath";
    exec($command, $output, $return_var);
    return $return_var === 0; 
}

// Wenn Nickname gesetzt ist
if (isset($_GET['nickname'])) {
    $nickname = htmlspecialchars($_GET['nickname']); 
    echo "Profil von " . $nickname;
}

// Wenn Hashtag gesetzt ist
if (isset($_GET['tag'])) {
    $tag = htmlspecialchars($_GET['tag']);
    echo "Beiträge zu " . $tag;
}

// Einbindung Thumbnail
foreach ($posts as $post) {
    $thumbnailPath = '/assets/videos/thumb/' . basename($post['post_video_file'], '.mp4') . '_thumbnail.jpg';
    if (!file_exists($thumbnailPath)) {
        generateThumbnail($post['post_video_file'], $thumbnailPath);
    }
}

// Twig ini
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader);

// Site rendern
echo $twig->render('social.twig', ['posts' => $posts]);
