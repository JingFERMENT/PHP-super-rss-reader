<?php
require_once __DIR__ . '/../controllers/pages-ctrl.php';
// $title - $formattedDate - $description - $link - $imageUrl
$count = 0;
foreach ($rss->channel->item as $item) {
    if ($count >= 6) {
        break;
    }
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
    // $title - $formattedDate - $description - $link - $imageUrl
?>
    <div class="card" style="width: 18rem;">
        <img src="<?= $imageUrl ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $title ?></h5>
            <p><?= $formattedDate ?></p>
            <p class="card-text"><?= $description ?></p>
            <a href="<?= $link ?>" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
<?php
    $count++;
}
?>