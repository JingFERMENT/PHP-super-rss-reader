<section id="main__pic">
    <div id="overlay">
        <h2 class="text-center">VOS DERNIÈRES ACTUALITÉS MONDIALES</h2>
    </div>
</section>
<section>
    <div class="container py-5">
        <?php if ($popup) { ?>
            <div class="alert alert-light alert-dismissible fade show popup shadow-lg" role="alert">
                <div class="p-5 text-center">
                    <h3 class="fw-bold">Bienvenue sur votre espace RSS</h3>
                    <h3 class="fw-bold mb-4">CKJN global news</h3>
                    <h5 class="mb-4">Pour personnaliser les thèmes liés à l'actualité mondiale,<br> cliquez sur le bouton "Parametre"</h5>
                    <a class="btn btn-primary mb-4" href="/parametre.html">Paramètres<i class="fa-solid fa-gears text-light pe-0"></i></a>
                    <p class="fw-bold">Enregistrez jusqu'à 3 thèmes dans votre espace.</p>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="alert" aria-label="Close">Fermer</button>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <div class="row justify-content-center">

            <?php
            foreach ($urlsRss as $key => $value) {
                $rss = simplexml_load_file($key);
                if (in_array($value, $selectedTopics)) { ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="text-center mb-4">
                            <h3><a id="continent-title" class="text-decoration-none text-uppercase" href="/theme-<?= $value ?>.html"><?= $value ?></a></h3>
                            <a class="btn btn-secondary btn-sm" href="/theme-<?= $value ?>.html" role="button">En savoir plus</a>
                        </div>
                        <?php
                        $items = $rss->channel->item;


                        for ($i = 0; $i < $numberItems && $i < count($items); $i++) {
                            $item = $items[$i];
                            $link = $item->link;
                            // Récupération et affichage de l'image (si présente)
                            $imageUrl = $item->children($item->getNameSpaces(true)['media'])->content->attributes()->url; ?>

                            <div class="card mb-3">
                                <a href="<?= $link ?>" target="_blank">
                                    <img src="<?= $imageUrl ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-truncate fw-bold"><?= $item->title ?></h5>
                                </div>
                            </div>

                        <?php }
                        ?>
                        <div class="text-center">
                            <a class="btn btn-secondary btn-sm" href="/theme-<?= $value ?>.html" role="button">En savoir plus sur l'actu <?= $value ?></a>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>