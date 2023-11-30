
    <div class="container">
        <div class="row justify-content-center">
            <?php
            foreach ($urlsRss as $key => $value) {
                $rss = simplexml_load_file($key);
                if (in_array($value, $selectedTopics)) { ?>
                    <div class="col-lg-4">
                        <?php echo '<h3>' . $value . '</h3><br>';
                        $items = $rss->channel->item;
                        
                        for ($i = 0; $i < $numberItems && $i < count($items); $i++) {
                            $item = $items[$i];

                            // Récupération et affichage de l'image (si présente)
                            $imageUrl = $item->children($item->getNameSpaces(true)['media'])->content->attributes()->url; ?>

                            <div class="card mb-5">
                                <img src="<?= $imageUrl ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item->title ?></h5>
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