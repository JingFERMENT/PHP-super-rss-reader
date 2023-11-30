<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My RSS Feed</title>
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
            <a class="navbar-brand" href="#"><img id="logo-white" class="position-absolute z-1" src="/public/assets/img/White_logo.png" alt="logo CKJN light"><img class="position-relative" id="navbar__logo--dark" src="/public/assets/img/Black_logo.png" alt="logo CKJN dark"></a>
        </div>
    </nav>
    <!-- DARKMODE -->
    <!-- <div id="btn-darkmode">
        <label class="form-check-label" for="switch" name="switch">Mode nuit</label>
        <input class="form-check-input d-none" type="checkbox" id="switch" role="switch">
    </div> -->
</header>

<div class="py-5 " id="errorPage">
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center ">
            <div class="col-md-7">
                <div class="card card-body text-center p-5">
                    <h1 class="fw-bold">Erreur 404</h1>
                    <h4 class="mb-5">La page que vous recherchez n'a pas été trouvée.</h4>
                    <button type="button" class="btn btn-secondary" id="navbar__btn"><a class="nav-link" href="/controllers/home-ctrl.php">Retour à l'accueil<i class="fa-solid fa-gears pe-0"></i></a></button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
