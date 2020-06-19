<?php

if (isset($_POST['lastname'])) {
    $lastname = htmlspecialchars($_POST['lastname']);
    if (preg_match("/[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{0,18}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{1,10}/", $lastname)) {
        $errorLastname = '';
    } else {
        $errorLastname = 'informations non valides';
    }
} else {
    $errorLastname = 'veuillez remplir le champ';
}

if (isset($_POST['firstname'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    if (preg_match("/[a-zA-Zéèêëiîïôöüäç]{2,12}[-]?[a-zA-Zéèêëiîïôöüäç]{2,12}/", $firstname)) {
        $errorFirstname = '';
    } else {
        $errorFirstname = 'informations non valides';
    }
} else {
    $errorFirstname = 'veuillez remplir le champ';
}

if (isset($_POST['birthDay'])) {
    $birthDay = htmlspecialchars($_POST['birthDay']);
    $errorBirthDay = '';
} else {
    $errorBirthDay = 'veuillez remplir le champ';
}

if (isset($_POST['birthCountry'])) {
    $birthCountry = htmlspecialchars($_POST['birthCountry']);
    if (preg_match("/[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{0,18}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{1,10}/", $birthCountry)) {
        $errorBirthCountry = '';
    } else {
        $errorBirthCountry = 'informations non valides';
    }
} else {
    $errorBirthCountry = 'veuillez remplir le champ';
}

if (isset($_POST['nationality'])) {
    $nationality = htmlspecialchars($_POST['nationality']);
    if (preg_match("/[a-zA-Zéèêëiîïôöüäç ]{1,15}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{0,18}[- \"]{0,1}[a-zA-Zéèêëiîïôöüäç ]{1,10}/", $nationality)) {
        $errorNationality = '';
    } else {
        $errorNationality = 'informations non valides';
    }
} else {
    $errorNationality = 'veuillez remplir le champ';
}

if (isset($_POST['adress'])) {
    $adress = htmlspecialchars($_POST['adress']);
    if (preg_match("/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/", $adress)) {
        $errorAdress = '';
    } else {
        $errorAdress = 'informations non valides';
    }
} else {
    $errorAdress = 'veuillez remplir le champ';
}

if (isset($_POST['myMail'])) {
    $myMail = htmlspecialchars($_POST['myMail']);
    if (preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/", $myMail)) {
        $errorMyMail = '';
    } else {
        $errorMyMail = 'informations non valides';
    }
} else {
    $errorMyMail = 'veuillez remplir le champ';
}

if (isset($_POST['phoneNumber'])) {
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    if (preg_match("/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/", $phoneNumber)) {
        $errorPhoneNumber = '';
    } else {
        $errorPhoneNumber = 'informations non valides';
    }
} else {
    $errorPhoneNumber = 'veuillez remplir le champ';
}

if (isset($_POST['degree'])) {
    $degree = htmlspecialchars($_POST['degree']);
    $errorDegree = '';
} else {
    $errorDegree = 'veuillez remplir le champ';
}

if (isset($_POST['jobCenterNumber'])) {
    $jobCenterNumber = htmlspecialchars($_POST['jobCenterNumber']);
    if (preg_match("/[0-9]{7}[a-zA-Z]{1}/", $jobCenterNumber)) {
        $errorJobCenterNumber = '';
    } else {
        $errorJobCenterNumber = 'informations non valides';
    }
} else {
    $errorJobCenterNumber = 'veuillez remplir le champ';
}

if (isset($_POST['badge'])) {
    $badge = htmlspecialchars($_POST['badge']);
    if (preg_match("/[0-9]{1}+[0]?/", $badge)) {
        $errorBadge = '';
    } else {
        $errorBadge = 'informations non valides';
    }
} else {
    $errorBadge = 'veuillez remplir le champ';
}

if (isset($_POST['heroes'])) {
    $heroes = htmlspecialchars($_POST['heroes']);
    $errorHeroes = '';
} else {
    $errorHeroes = 'veuillez remplir le champ';
}

if (isset($_POST['hack'])) {
    $hack = htmlspecialchars($_POST['hack']);
    $errorHack = '';
} else {
    $errorHack = 'veuillez remplir le champ';
}

if (isset($_POST['practice'])) {
    $practice = htmlspecialchars($_POST['practice']);
    $errorPractice = '';
} else {
    $errorPractice = 'veuillez remplir le champ';
}
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
            <form class="col-sm-8 mb-3" action="" method="post">
                <div class="h3 text-info">Formulaire d'inscription</div>
                <div class="form-group">
                    <label for="lastname" class="text-secondary font-weight-bold">Nom *</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="ex : Doe" value=<?= !isset($lastname) ? '' : $lastname ?>>
                    <div class="font-italic text-danger"><?= $errorFirstname ?></div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="text-secondary font-weight-bold">Prénom *</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="ex : Doe" value=<?= !isset($firstname) ? '' : $firstname ?>>
                    <div class="font-italic text-danger"><?= $errorFirstname ?></div>
                </div>
                <div class="form-group">
                    <label for="birthDay" class="text-secondary font-weight-bold">Date de naissance *</label>
                    <input type="date" class="form-control" id="birthDay" name="birthDay" value=<?= !isset($birthDay) ? '' : $birthDay ?>>
                    <div class="font-italic text-danger"><?= $errorBirthDay ?></div>
                </div>
                <div class="form-group">
                    <label for="birthCountry" class="text-secondary font-weight-bold">Pays de naissance *</label>
                    <input type="text" class="form-control" id="birthCountry" name="birthCountry" placeholder="ex : France" value=<?= !isset($birthCountry) ? '' : $birthCountry ?>>
                    <div class="font-italic text-danger"><?= $errorBirthCountry ?></div>
                </div>
                <div class="form-group">
                    <label for="nationality" class="text-secondary font-weight-bold">Nationalité *</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="ex : Français.e" value=<?= !isset($nationality) ? '' : $nationality ?>>
                    <div class="font-italic text-danger"><?= $errorNationality ?></div>
                </div>
                <div class="form-group">
                    <label for="adress" class="text-secondary font-weight-bold">Adresse *</label>
                    <input type="text" class="form-control" id="adress" name="adress" placeholder="ex : 5 rue Jeff Copey" value=<?= !isset($adress) ? '' : $adress ?>>
                    <div class="font-italic text-danger"><?= $errorAdress ?></div>
                </div>
                <div class="form-group">
                    <label for="myMail" class="text-secondary font-weight-bold">Adresse mail *</label>
                    <input type="email" class="form-control" id="myMail" name="myMail" placeholder="ex : john.doe@wanadoo.fr" value=<?= !isset($myMail) ? '' : $myMail ?>>
                    <div class="font-italic text-danger"><?= $errorMyMail ?></div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="text-secondary font-weight-bold">Numéro de téléphone *</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="ex : 0276664422" value=<?= !isset($phoneNumber) ? '' : $phoneNumber ?>>
                    <div class="font-italic text-danger"><?= $errorPhoneNumber ?></div>
                </div>
                <div class="form-group">
                    <label for="degree" class="text-secondary font-weight-bold">Diplôme *</label>
                    <select class="form-control" id="degree" name="degree" value=<?= !isset($degree) ? '' : $degree ?>>
                        <option>Sans</option>
                        <option>Bac</option>
                        <option>Bac+2</option>
                        <option>Bac+3</option>
                        <option>Supérieur</option>
                    </select>
                    <div class="font-italic text-danger"><?= $errorDegree ?></div>
                </div>
                <div class="form-group">
                    <label for="jobCenterNumber" class="text-secondary font-weight-bold">Numéro pôle emploi *</label>
                    <input type="text" class="form-control" id="jobCenterNumber" name="jobCenterNumber" placeholder="ex : 6521523H" value=<?= !isset($jobCenterNumber) ? '' : $jobCenterNumber ?>>
                    <div class="font-italic text-danger"><?= $errorJobCenterNumber ?></div>
                </div>
                <div class="form-group">
                    <label for="badge" class="text-secondary font-weight-bold">Badge Pokémon *</label>
                    <input type="text" class="form-control" id="badge" name="badge" placeholder="ex : 21" value=<?= !isset($badge) ? '' : $badge ?>>
                    <div class="font-italic text-danger"><?= $errorBadge ?></div>
                </div>
                <div class="form-group">
                    <label for="heroes" class="text-secondary font-weight-bold">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? *</label>
                    <textarea class="form-control" id="heroes" name="heroes" rows="3" value=<?= !isset($heroes) ? '' : $heroes ?>></textarea>
                    <div class="font-italic text-danger"><?= $errorHeroes ?></div>
                </div>
                <div class="form-group">
                    <label for="hack" class="text-secondary font-weight-bold">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) *</label>
                    <textarea class="form-control" id="hack" name="hack" rows="3" value=<?= !isset($hack) ? '' : $hack ?>></textarea>
                    <div class="font-italic text-danger"><?= $errorHack ?></div>
                </div>
                <div class="form-group">
                    <label for="practice" class="text-secondary font-weight-bold">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? *</label>
                    <textarea class="form-control" id="practice" name="practice" rows="3" value=<?= !isset($practice) ? '' : $practice ?>></textarea>
                    <div class="font-italic text-danger"><?= $errorPractice ?></div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-primary">Envoyer</button>
            </form>
        </div>
    </div>

</body>

</html>