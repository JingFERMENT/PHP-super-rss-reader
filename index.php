<!------------------ A DEPLACER PLUS TARD DANS HOME.PHP -------------------->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- style -->
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
</head>


<body>
<header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-light sticky-top">
        <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand ps-md-5 ms-md-4 pe-5 pe-md-0" href="#"><img class="ps-md-5" src="/public/assets/img/White_logo.png" alt="logo CKJN light"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <div id="navbar__main-div">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Continent 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Continent 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Continent 3</a>
                        </li>
                    </div>
                    <div id="navbar__btn-div">
                        <li class="nav-item">
                        <button type="button" class="btn btn-secondary"><a class="nav-link" href="#">Paramètres</a></button>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <section id="main__pic">
        <div id="overlay">
            <h2 class="text-center">Vos dernières actus</h2>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <!-- Continent 1 -->
                <div class="col col-md-4 pt-5 d-flex flex-wrap justify-content-center">
                    <h1>Continent 1</h1>
                    <!-- carte 1 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 2 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 3 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 4 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 5 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 6 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <!-- Continent 2 -->
                <div class="col col-md-4 pt-5 d-flex flex-wrap justify-content-center">
                <h1>Continent 2</h1>
                    <!-- carte 2.1 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 2.2 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 2.3 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 2.4 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 2.5 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 2.6 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <!-- Continent 3 -->
                <div class="col col-md-4 pt-5 d-flex flex-wrap justify-content-center">
                <h1>Continent 3</h1>
                    <!-- carte 3.1 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 3.2 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 3.3 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 3.4 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 3.5 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- carte 3.6 -->
                    <div class="card my-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="row pt-5"> <!-- logos -->
            <div class="col ps-md-5 ms-md-5" id="footer__logo--desktop">
                <img class="ps-md-5 ms-md-5" id="footer__logo" src="/public/assets/img/White_logo.png" alt="">
            </div>
            <div class="col  ps-lg-5" id="footer__logos">
                <div>
                    <h5>Suivez-nous !</h5>
                </div>
                <div id="footer__logosreaseaux--desktop">
                    <i class="fa-brands fa-x-twitter fa-2xl"></i>
                    <i class="fa-brands fa-youtube fa-2xl"></i>
                    <i class="fa-brands fa-facebook-f fa-2xl"></i>
                </div>
            </div>
        </div>
        <div class="row pt-5 text-center"> <!-- mentions légales -->
            <div class="col">
                <a href="#" class="pe-2 footer__links">Mentions légales</a>
                <a href="#" class="footer__links">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>




    <!--* font awesome -->
    <script src="https://kit.fontawesome.com/dce61209e7.js" crossorigin="anonymous"></script>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


<!---------------------------------------------------------------------------->