<?php
// L'URL du flux RSS à lire
$url = 'https://www.lemonde.fr/europe/rss_full.xml';
// Chargement du flux RSS avec SimpleXML
// simplexml_load_file — Convertit un fichier XML en objet
$rss = simplexml_load_file($url);
$items = $rss->channel->item;
// Variable pour le réglage de l'affichage
$maxArticles = 6;

require_once __DIR__ . '/../views/pages.php';
// $title - $formattedDate - $description - $link - $imageUrl