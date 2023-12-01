<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content = "Lecteur de flux RSS. Actualités mises à jour depuis le journal Le Monde. Retrouvez tout l'essentiel sur une page">
    <title>CKJN Global News - Actualités internationales - Lecteur de flux RSS - Mises à jour quotidiennes</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>


<body class="light">
    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-light sticky-top">
            <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand ps-md-5 ms-md-4 pe-5 pe-md-0" href="/index.php"><img id="logo-white" class="ps-md-5 position-absolute z-1" src="/public/assets/img/White_logo.png" alt="logo CKJN light"><img class="ps-md-5 position-relative" id="navbar__logo--dark" src="/public/assets/img/Black_logo.png" alt="logo CKJN dark"></a>
                <button class="navbar-toggler navbar-toggler-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars fa-xl text-black"></i> <i class="fa-solid fa-bars fa-xl text-white"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <div id="navbar__main-div">
                            <?php
                            $count = 0;
                            if ($selectedTopics == 0) { ?>
                                <li class="nav-item">
                                    <a class="nav-link active navbar__text" href=""></a>
                                </li>
                                <?php } else {
                                foreach ($urlsRss as $key => $value) {
                                    if (in_array($value, $selectedTopics)) { ?>

                                        <li class="nav-item">
                                            <a class="nav-link active navbar__text" href="/theme-<?= $value ?>.html"><?= $value ?? '' ?></a>
                                        </li>
                                        <?php
                                        $count++;
                                        if ($count == 3) {
                                            break; // Sortir de la boucle après trois éléments
                                        } ?>
                            <?php }
                                }
                            }
                            ?>
                        </div>
                        <div id="navbar__btn-div">
                            <li class="nav-item">
                                <button type="button" class="btn btn-secondary" id="navbar__btn"><a class="nav-link" href="/parametre.html">Paramètres<i class="fa-solid fa-gears pe-0"></i></a></button>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>