<!-- ==================================================
================ pages branch =========================
======================================================= -->

<section id="pages__pic">
    <div id="pages__overlay">
        <h2 class="text-center">Zoom sur <?= $continent ?></h2>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row">
            <?php
            for ($i = 0; $i < $numberItems && $i < count($items); $i++) {
                $item = $items[$i];
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
                // Affichage des informations
                // $title - $formattedDate - $description - $link - $imageUrl
            ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div class="card my-3" >
                        <img src="<?= $imageUrl ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-4"><?= $title ?></h5>
                            <p class="card-text"><?= $description ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $formattedDate ?></li>
                        </ul>
                        <div class="card-footer py-3">
                            <a class="btn btn-primary" href="<?= $link ?>" role="button" target="_blank">Lire plus</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- ==================================================
================ pages branch =========================
======================================================= -->