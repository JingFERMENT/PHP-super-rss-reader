<?php
// L'URL du flux RSS à lire
$url = 'https://www.lemonde.fr/europe/rss_full.xml';
// Création d'un objet DOM à partir du flux RSS
$dom = new DOMDocument();
$dom->load($url);
// Récupération de la liste des éléments du flux
$items = $dom->getElementsByTagName('item');
// Parcours de la liste des éléments
foreach ($items as $item) {
    // Récupération de l'élément title
    $title = $item->getElementsByTagName('title')[0]->nodeValue;
    // Récupération de l'élément link
    $link = $item->getElementsByTagName('link')[0]->nodeValue;
    // Récupération de l'élément description
    $description = $item->getElementsByTagName('description')[0]->nodeValue;
    // Récupération de l'élément media:content ou media:thumbnail
    // Utilisez l'URI correct de l'espace de noms pour 'media'
    $mediaContents = $item->getElementsByTagNameNS('http://search.yahoo.com/mrss/', 'content');
    $imageUrl = null;
    if ($mediaContents->length > 0) {
        $imageUrl = $mediaContents[0]->getAttribute('url');
    }
    // Affichage des informations
    echo "<h2>$title</h2><br>";
    echo $description."<br>";
    if ($imageUrl) {
        echo "<img src='$imageUrl' alt='Image'><br>";
    }
}
?>