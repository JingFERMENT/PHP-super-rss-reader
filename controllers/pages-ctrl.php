<?php
// L'URL du flux RSS à lire
$url = 'https://www.lemonde.fr/europe/rss_full.xml';
// Chargement du flux RSS avec SimpleXML
// simplexml_load_file — Convertit un fichier XML en objet
$rss = simplexml_load_file($url);
// Parcours des éléments du flux
foreach ($rss->channel->item as $item) {
    // Récupération du titre, du lien et de la description
    $title = $item->title;
    $link = $item->link;
    $description = $item->description;
    // Gestion de la date
    $dateItem = $item->pubDate;
    $timestamp = strtotime($dateItem);
    $formatter = new IntlDateFormatter('fr_FR');
    $formatter->setPattern('EEEE dd MMMM YYYY H:mm');
    $formattedDate = $formatter->format($timestamp);
    // Récupération et affichage de l'image (si présente)
    $namespaces = $item->getNameSpaces(true);
    $media = $item->children($namespaces['media']);
    $imageUrl = $media->content->attributes()->url;
    // Affichage des informations Europe
    // $title - $formattedDate - $description - $link - $imageUrl;
}
