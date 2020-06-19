<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>TP1 Formulaire</title>
</head>

<body>
    <div class="container bg-light">
        <div class="row">
            <form class="col-sm-8 mb-3" action="" method="post">
                <div class="h3 text-info">Formulaire d'inscription</div>
            <div class="form-group">
                    <label for="lastName" class="text-secondary font-weight-bold">Nom</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe">
                </div>
                <div class="form-group">
                    <label for="FirstName" class="text-secondary font-weight-bold">Prénom</label>
                    <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="John">
                </div>
                <div class="form-group">
                    <label for="birthDate" class="text-secondary font-weight-bold">Date de naissance</label>
                    <input type="date" class="form-control" id="birthDate" name="birthDate">
                </div>
                <div class="form-group">
                    <label for="birthCountry" class="text-secondary font-weight-bold">Pays de naissance</label>
                    <input type="text" class="form-control" id="birthCountry" name="birthCountry" placeholder="France">
                </div>
                <div class="form-group">
                    <label for="nationality" class="text-secondary font-weight-bold">Nationalité</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Français.e">
                </div>
                <div class="form-group">
                    <label for="adress" class="text-secondary font-weight-bold">Adresse</label>
                    <input type="text" class="form-control" id="adress" name="adress" placeholder="5 rue Jeff Copey">
                </div>
                <div class="form-group">
                    <label for="myMail" class="text-secondary font-weight-bold">Adresse mail</label>
                    <input type="email" class="form-control" id="myMail" name="myMail" placeholder="john.doe@wanadoo.fr">
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="text-secondary font-weight-bold">Numéro de téléphone</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="0276664422">
                </div>
                <div class="form-group">
                    <label for="degree" class="text-secondary font-weight-bold">Diplôme</label>
                    <select class="form-control" id="degree" name="degree">
                        <option>Sans</option>
                        <option>Bac</option>
                        <option>Bac+2</option>
                        <option>Bac+3</option>
                        <option>Supérieur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jobCenterNumber" class="text-secondary font-weight-bold">Numéro pôle emploi</label>
                    <input type="text" class="form-control" id="jobCenterNumber" name="jobCenterNumber" placeholder="6521523H">
                </div>
                <div class="form-group">
                    <label for="badge" class="text-secondary font-weight-bold">Badge Pokémon</label>
                    <input type="text" class="form-control" id="badge" name="badge" placeholder="21">
                </div>
                <div class="form-group">
                    <label for="heroes" class="text-secondary font-weight-bold">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                    <textarea class="form-control" id="heroes" name="heroes" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="hack" class="text-secondary font-weight-bold">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea class="form-control" id="hack" name="hack" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="practice" class="text-secondary font-weight-bold">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea class="form-control" id="practice" name="practice" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Sign in</button>
            </form>
        </div>
    </div>

</body>

</html>