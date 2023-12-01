
<?php

require_once __DIR__ . '/../config/init.php';

foreach ($urlsRss as $key => $value) {
    if (in_array($value, $selectedTopics)) {
        $rss = simplexml_load_file($key);
    }
}
$counter = 0;


session_start();

// Vérifie si la session "popupAffichee" existe
if (!isset($_SESSION['popup'])) {
    // Si la session n'existe pas, affiche la pop-up
    $_SESSION['popup'] = true;
    $popup = true;
} else {
    $popup = false;
}



include __DIR__.'/../views/templates/header.php';
include __DIR__.'/../views/home.php';
include __DIR__.'/../views/templates/footer.php';