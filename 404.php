<?php

include './views/templates/header.php' ;
require_once __DIR__ . '/../config/init.php'?>

<div class="py-5 " id="errorPage">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card card-body tex-center">
                    <h2 class="text-center">Erreur 404</h2>
                    <h4>La page que vous recherchez n'a pas été trouvée.</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include './views/templates/footer.php'

?>