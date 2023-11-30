<!-- ==================================================
================ pages branch =========================
======================================================= -->

<section id="pages__pic">
    <div id="pages__overlay">
        <h2 class="text-center">Zoom sur Continent 1</h2>
    </div>
</section>

<section>
    <div class="container">
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
                <div class="col col-lg-4 pt-5 d-flex justify-content-center">
                    <div class="card" >
                        <img src="<?= $imageUrl ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $title ?></h5>
                            <p class="card-text"><?= $description ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $formattedDate ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="<?= $link ?>" class="card-link" target="_blank">Lire l'article</a>
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