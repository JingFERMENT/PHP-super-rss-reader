<!-- ==================================================
================ pages branch =========================
======================================================= -->
<?php

require_once __DIR__ . '/../config/init.php';

foreach ($urlsRss as $key => $value) {
    if (in_array($value, $selectedTopics)) {
        $rss = simplexml_load_file($key);
    }
}
$counter = 0;

// L'URL du flux RSS à lire
$url = 'https://www.lemonde.fr/europe/rss_full.xml';
// Chargement du flux RSS avec SimpleXML
// simplexml_load_file — Convertit un fichier XML en objet
$rss = simplexml_load_file($url);
$items = $rss->channel->item;
// Variable pour le réglage de l'affichage
$maxArticles = 6;
include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/pages.php';
include __DIR__ . '/../views/templates/footer.php';
?>
<!-- ==================================================
================ pages branch =========================
======================================================= -->
<!-- ----------------------------------- -->
<!-- ------------BRANCH HOME------------ -->
<!-- ----------------------------------- -->





