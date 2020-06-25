<?php
require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>TP2 Formulaire</title>
</head>

<body>
    <div class="container bg-light">
        <div class="row">
            <form class="col-sm-8 mb-3" action="" method="post" novalidate>
                <div class="h3 text-info">Formulaire d'inscription</div>
                <div class="form-group">
                    <label for="civility" class="text-secondary font-weight-bold">Civilité</label>
                    <select class="form-control" id="civility" name="civility" required>
                        <option selected disabled>--</option>
                        <option value="M" <?= isset($_POST['civility']) && ($_POST['civility']) == 'M'  ? 'selected' : '' ?>>M</option>
                        <option value="Mme" <?= isset($_POST['civility']) && ($_POST['civility']) == 'Mme'  ? 'selected' : '' ?>>Mme</option>
                        <option value="Autre" <?= isset($_POST['civility']) && ($_POST['civility']) == 'Autre'  ? 'selected' : '' ?>>Autre</option>
                    </select>
                    <span class="font-italic text-danger"><?= isset($error['civility']) ? $error['civility'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="lastname" class="text-secondary font-weight-bold">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="ex : Doe" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required>
                    <span class="font-italic text-danger"><?= isset($error['lastname']) ? $error['lastname'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="firstname" class="text-secondary font-weight-bold">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="ex : John" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" required>
                    <span class="font-italic text-danger"><?= isset($error['firstname']) ? $error['firstname'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="age" class="text-secondary font-weight-bold">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="ex : 23" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>" required>
                    <span class="font-italic text-danger"><?= isset($error['age']) ? $error['age'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="company" class="text-secondary font-weight-bold">Société</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="ex : Bayer" value="<?= isset($_POST['company']) ? $_POST['company'] : '' ?>" required>
                    <span class="font-italic text-danger"><?= isset($error['company']) ? $error['company'] : '' ?></span>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-primary">Envoyer</button>
            </form>
        </div>
        <?php if (!empty($_POST) && count($error) < 1) { ?>
            <div class="row">
                <div class="col-sm-8">
                    <div class="h3 text-secondary font-weight-bold">Données du formulaire</div><br>
                    <p class="text-success">Vous avez bien été enregistré !</p><br>
                    <p class="test-secondary font-weight-bold">Civilité : <?= htmlspecialchars($_POST['civility']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Nom : <?= htmlspecialchars($_POST['lastname']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Prénom : <?= htmlspecialchars($_POST['firstname']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Age : <?= htmlspecialchars($_POST['age']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Société : <?= htmlspecialchars($_POST['company']) ?></p><br>
                </div>
            </div>
        <?php } ?>
    </div>
    </div>
</body>

</html>