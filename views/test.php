<?php
define('TOPICS', ['Sujet 1', 'Sujet 2', 'Sujet 3', 'Sujet 4', 'Sujet 5']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = [];

    ////////////// INPUT "Nombre d’articles affichés"
    $numberItems = intval(filter_input(INPUT_POST, 'numberItems', FILTER_SANITIZE_NUMBER_INT));
    if (empty($numberItems)) {
        $error['numberItems'] = "Merci de sélectionner le nombre d'actualités à afficher";
    } else {
        $isOk = filter_var($numberItems, FILTER_VALIDATE_INT, array("options" => array("min_range" => 6, "medium_range" => 9, "max_range" => 12)));
        if (!$isOk) {
            $error["numberItems"] = "La sélection n'est pas valide";
        } else {
            setcookie('numberItems', $_POST['numberItems'], (time() + 365 * 24 * 3600), '/');
        }
    }

    ////////////// INPUT selectedTopics "Selectionnez vos sujets"
    $selectedTopics = filter_input(INPUT_POST, 'topic', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    if (empty($selectedTopics)) {
        $error['numberItems'] = "Merci de sélectionner 3 sujets";
    } else {
        foreach ($selectedTopics as $value) {
            // Vérification si la valeur de mon tableau 'selectedTopics' est dans mon tableau 'TOPICS'
            if ($value < 0 || !in_array($value, TOPICS)) {
                $error['selectedTopics'] = "La valeur sélectionnée n'est pas valide.";
            } else {
                setcookie('selectedTopics', $_POST['selectedTopics'], (time() + 365 * 24 * 3600), '/');
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>My RSS Feed</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form method="POST">
                <!-- INPUT Radio Nombre d’articles -->
                <div class="mb-5">
                    <p>Nombre d’articles affichés sur la page d’accueil et sur les pages complètes</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="6" name="numberItems" value="6" <?= (isset($numberItems) && $numberItems == 6) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="6">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="9" name="numberItems" value="9" <?= (isset($numberItems) && $numberItems == 9) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="9">9</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="12" name="numberItems" value="12" <?= (isset($numberItems) && $numberItems == 12) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="12">12</label>
                    </div>
                    <small class="form-text text-danger"><?= $error['numberItems'] ?? '' ?></small>
                </div>

                <!-- INPUT Checkbox Sujet -->
                <div class="mb-5">
                    <label class="mt-3">Selectionnez vos sujets : </label>
                    <?php
                    foreach (TOPICS as $key => $value) {
                    ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="topic[]" id="topic<?= $key ?>" value="<?= $key ?>" <?= (isset($selectedTopics) && in_array($key, $selectedTopics)) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="topic<?= $key ?>">
                                <?= $value ?>
                            </label>
                        </div>
                    <?php
                    }
                    ?>
                    <small class="form-text text-danger"><?= $error['selectedTopics'] ?? '' ?></small>
                </div>
                <!-- Bouton de validation -->
                <button type="submit" class="btn btn-primary mb-2">Je valide</button>
            </form>

        </div>
    </div>
</body>

</html>