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
            <div class="card">
                <div class="card-body">
                    <form method="POST" class="p-5">

                        <!-- SELECT Mode Light/Dark -->
                        <div class="mb-5">
                            <label for="designMode" class="mb-3 fw-bold">Choix du design</label>
                            <select id="designMode" name="designMode" class="form-select">
                                <option value="0" <?= (isset($designMode) && $designMode == 0) ? 'selected' : '' ?>>Mode Light</option>
                                <option value="1" <?= (isset($designMode) && $designMode == 1) ? 'selected' : '' ?>>Mode Dark</option>
                            </select>
                            <small class="form-text text-danger"><?= $error['designMode'] ?? '' ?></small>
                        </div>

                        <!-- INPUT Radio Nombre d’articles -->
                        <div class="mb-5">
                            <label class="mb-3 fw-bold">Nombre d’articles affichés sur la page d’accueil et sur les pages complètes : </label>
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
                            <label class="mb-3 fw-bold">Selectionnez vos sujets <small class="fw-light">(3 sujets maximum)</small> : </label>
                            <?php
                            foreach (TOPICS as $value) {
                            ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="selectedTopics[]" id="<?= $value ?>" value="<?= $value ?>" <?= (isset($selectedTopics) && in_array($value, $selectedTopics)) ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="<?= $value ?>">
                                        <?= $value ?>
                                    </label>
                                </div>
                            <?php
                            }
                            ?>
                            <small class="form-text text-danger"><?= $error['selectedTopics'] ?? '' ?></small>
                        </div>

                        <!-- Bouton de validation -->
                        <button type="submit" class="btn btn-primary mb-2">Je valide mes préférences</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>