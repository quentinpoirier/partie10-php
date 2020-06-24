<?php
require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>TP1 Formulaire</title>
</head>

<body>
    <div class="container bg-light">
        <div class="row">
            <?php if (!empty($_POST) && count($error) < 1) { ?>
                <div class="col-sm-8">
                    <div class="h3">Données du formulaire</div><br>
                    <p class="text-success">Vous avez bien été enregistré !</p><br>
                    <p class="test-secondary font-weight-bold">Nom : <?= htmlspecialchars($_POST['lastname']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Prénom : <?= htmlspecialchars($_POST['firstname']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Date de naissance : <?= htmlspecialchars($_POST['birthDay']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Pays de naissance : <?= htmlspecialchars($_POST['birthCountry']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Nationalité : <?= htmlspecialchars($_POST['nationality']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Adresse : <?= htmlspecialchars($_POST['adress']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Adresse Mail : <?= htmlspecialchars($_POST['myMail']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Numéro de téléphone : <?= htmlspecialchars($_POST['phoneNumber']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Niveau d'études : <?= htmlspecialchars($_POST['graduation']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Numéro Pôle Emploi : <?= htmlspecialchars($_POST['jobCenterNumber']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Badges : <?= htmlspecialchars($_POST['badge']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Quel héro êtes vous : <?= htmlspecialchars($_POST['heroes']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Votre hack : <?= htmlspecialchars($_POST['hack']) ?></p><br>
                    <p class="test-secondary font-weight-bold">Votre expérience en développement informatique : <?= htmlspecialchars($_POST['practice']) ?></p><br>
                </div>
            <?php } else { ?>
                <form class="col-sm-8 mb-3" action="" method="post" novalidate>
                    <div class="h3 text-info">Formulaire d'inscription</div>
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
                        <label for="birthDay" class="text-secondary font-weight-bold">Date de naissance</label>
                        <input type="date" class="form-control" id="birthDay" name="birthDay" value="<?= isset($_POST['birthDay']) ? $_POST['birthDay'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['birthDay']) ? $error['birthDay'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="birthCountry" class="text-secondary font-weight-bold">Pays de naissance</label>
                        <input type="text" class="form-control" id="birthCountry" name="birthCountry" placeholder="ex : France" value="<?= isset($_POST['birthCountry']) ? $_POST['birthCountry'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['birthCountry']) ? $error['birthCountry'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="nationality" class="text-secondary font-weight-bold">Nationalité</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="ex : Français.e" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['nationality']) ? $error['nationality'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="adress" class="text-secondary font-weight-bold">Adresse</label>
                        <input type="text" class="form-control" id="adress" name="adress" placeholder="ex : 5 rue Jeff Copey" value="<?= isset($_POST['adress']) ? $_POST['adress'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['adress']) ? $error['adress'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="myMail" class="text-secondary font-weight-bold">Adresse mail</label>
                        <input type="email" class="form-control" id="myMail" name="myMail" placeholder="ex : john.doe@wanadoo.fr" value="<?= isset($_POST['myMail']) ? $_POST['myMail'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['myMail']) ? $error['myMail'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber" class="text-secondary font-weight-bold">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="ex : 0276664422" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['phoneNumber']) ? $error['phoneNumber'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="graduation" class="text-secondary font-weight-bold">Diplôme</label>
                        <select class="form-control" id="graduation" name="graduation" required>
                            <option selected disabled>--</option>
                            <option value="none" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'none'  ? 'selected' : '' ?>>Sans</option>
                            <option value="bac" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'bac'  ? 'selected' : '' ?>>Bac</option>
                            <option value="bac+2" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'bac+2'  ? 'selected' : '' ?>>Bac+2</option>
                            <option value="bac+3" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'bac+3'  ? 'selected' : '' ?>>Bac+3</option>
                            <option value="Supérieur" <?= isset($_POST['graduation']) && ($_POST['graduation']) == 'Supérieur'  ? 'selected' : '' ?>>Supérieur</option>
                        </select>
                        <span class="font-italic text-danger"><?= isset($error['graduation']) ? $error['graduation'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="jobCenterNumber" class="text-secondary font-weight-bold">Numéro pôle emploi</label>
                        <input type="text" class="form-control" id="jobCenterNumber" name="jobCenterNumber" placeholder="ex : 6521523H" value="<?= isset($_POST['jobCenterNumber']) ? $_POST['jobCenterNumber'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['jobCenterNumber']) ? $error['jobCenterNumber'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="badge" class="text-secondary font-weight-bold">Badge Pokémon</label>
                        <input type="text" class="form-control" id="badge" name="badge" placeholder="ex : 21" value="<?= isset($_POST['badge']) ? $_POST['badge'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['badge']) ? $error['badge'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="linkCodeAcademy" class="text-secondary font-weight-bold">Lien vers codeAcademy</label>
                        <input type="text" class="form-control" id="linkCodeAcademy" name="linkCodeAcademy" placeholder="ex : http//:codeacademy.com" value="<?= isset($_POST['linkCodeAcademy']) ? $_POST['linkCodeAcademy'] : '' ?>" required>
                        <span class="font-italic text-danger"><?= isset($error['linkCodeAcademy']) ? $error['linkCodeAcademy'] : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="heroes" class="text-secondary font-weight-bold">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                        <textarea class="form-control" id="heroes" name="heroes" rows="3" required><?= isset($_POST['heroes']) ? $_POST['heroes'] : '' ?></textarea>
                        <span class="font-italic text-danger"><?= isset($error['heroes']) ? $error['heroes'] : '' ?></span>
                    </div>
                    <div class="text-secondary font-weight-bold">Avez vous déjà hacker ?</div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="hackPositive" name="hack" value="OUI">
                        <label class="form-check-label" for="hackPositive" <?= isset($_POST['hack']) && ($_POST['hack']) == 'OUI'  ? 'check' : '' ?>>OUI</label>
                    </div>
                    <div class="form-check form-check-inline mb-2">
                        <input class="form-check-input" type="checkbox" id="hackNegative" name="hack" value="NON">
                        <label class="form-check-label" for="hackNegative" <?= isset($_POST['hack']) && ($_POST['hack']) == 'NON'  ? 'check' : '' ?>>NON</label>
                    </div>
                    <span class="form-group font-italic text-danger"><?= isset($error['hack']) ? $error['hack'] : '' ?></span>
                    <div class="form-group">
                        <label for="practice" class="text-secondary font-weight-bold">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                        <textarea class="form-control" id="practice" name="practice" rows="3" required><?= isset($_POST['practice']) ? $_POST['practice'] : '' ?></textarea>
                        <span class="font-italic text-danger"><?= isset($error['practice']) ? $error['practice'] : '' ?></span>
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-primary">Envoyer</button>
                </form>
            <?php } ?>
        </div>
    </div>

</body>

</html>