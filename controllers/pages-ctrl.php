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

    // Affichage des informations
    echo "<h2>$title</h2><br>";
    echo $description."<br>";

    // Gestion des erreurs, variable pour le tableau des erreurs?
    // Récupération et affichage de l'image (si présente)
    $namespaces = $item->getNameSpaces(true);
    $media = $item->children($namespaces['media']);
    if (!empty($media->content)) {
        $imageUrl = $media->content->attributes()->url;
        //regex à revoir si il faut contrôler le type MIME
        if (filter_var($imageUrl, FILTER_VALIDATE_URL) && preg_match('/\.(jpg|jpeg|png)$/', $imageUrl)) {
            // Nettoyage de l'URL pour éviter les injections de code
            $cleanImageUrl = htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8');
            echo "<img src='$cleanImageUrl' alt='Image'><br>";
        } else {
            echo "<p>Image non valide ou format non supporté.</p>";
        }
    }
}
?>