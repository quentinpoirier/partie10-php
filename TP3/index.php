<?php
$portraitsArray = [
    $portrait1 = [
        'name' => 'Victor',
        'firstname' => 'Hugo',
        'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg'
    ],

    $portrait2 = [
        'name' => 'Jean',
        'firstname' => 'de La Fontaine',
        'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg'
    ],

    $portrait3 = [
        'name' => 'Pierre',
        'firstname' => 'Corneille',
        'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg'
    ],

    $portrait4 = [
        'name' => 'Jean',
        'firstname' => 'Racine',
        'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg'
    ]
];

var_dump($portraitsArray);

foreach ($portraitsArray as $key => $value) {
    $message = $value['portrait'];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>TP3 Formulaire</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            <?php foreach ($portraitsArray as $key => $value){ ?>
                <p class="text-secondary text-center h5 font-weight-bold"><?= $value['name'] . ' ' . $value['firstname'] ?></p>
                <img src="<?= $value['portrait'] ?>" alt="Photos de gars vaguement connuent">
            <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>