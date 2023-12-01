<!-- ----------------------------------- -->
<!-- ------------BRANCH HOME------------ -->
<!-- ----------------------------------- -->


<section id="main__pic">
    <div id="overlay">
        <h2 class="text-center">Vos dernières actus</h2>
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
                    <div class="col col-md-4 pt-5 d-flex flex-wrap justify-content-center">
                        <h3 class="mb-4" ><a id="continent-title" class="text-decoration-none" href="/controllers/pages-ctrl.php?continent=<?= $value ?>"><?=$value?></a></h3>
                        <?php 
                        $items = $rss->channel->item;
                        

                        for ($i = 0; $i < $numberItems && $i < count($items); $i++) {
                            $item = $items[$i];

                            // Récupération et affichage de l'image (si présente)
                            $imageUrl = $item->children($item->getNameSpaces(true)['media'])->content->attributes()->url; ?>

                            <div class="card mb-3">
                                <img src="<?= $imageUrl ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-truncate fw-bold"><?= $item->title ?></h5>
                                </div>
                            </div>

                        <?php }
                        ?>

                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</section>


















<!-- ----------------------------------------- -->
<!-- ------------BRANCH PARAMETERS------------ -->
<!-- ----------------------------------------- -->
<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>My RSS Feed</title>
</head> -->
<!--  -->