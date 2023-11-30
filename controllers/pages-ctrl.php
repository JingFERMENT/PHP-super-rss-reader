<!-- ==================================================
================ pages branch =========================
======================================================= -->
<?php
require_once __DIR__ . '/../config/init.php';


$continent = "";
if (!empty($_GET['continent'])) {
    $continent = $_GET['continent'];
}

$fluxRssUrl = null;

foreach ($urlsRss as $url => $region) {
    if ($continent === $region) {
        $fluxRssUrl = $url;
        break;
    }
}
$counter = 0;

// L'URL du flux RSS à lire

// Chargement du flux RSS avec SimpleXML
// simplexml_load_file — Convertit un fichier XML en objet
$rss = simplexml_load_file($url);
$items = $rss->channel->item;
// Variable pour le réglage de l'affichage

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/pages.php';
include __DIR__ . '/../views/templates/footer.php';