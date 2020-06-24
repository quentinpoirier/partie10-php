<?php

$error = array();

if (isset($_POST['submit'])) {
    if (!array_key_exists('civility', $_POST)) {
        $error['civility'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['lastname'])) {
    if (preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $_POST['lastname']) == false) {
        $error['lastname'] = 'Mauvais format';
    };
    if (empty($_POST['lastname'])) {
        $error['lastname'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['firstname'])) {
    if (preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $_POST['firstname']) == false) {
        $error['firstname'] = 'Mauvais format';
    };
    if (empty($_POST['firstname'])) {
        $error['firstname'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['age'])) {
    if (preg_match("/^[0-9]{0,2}$/u", $_POST['age']) == false) {
        $error['age'] = 'Mauvais format';
    };
    if (empty($_POST['age'])) {
        $error['age'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['company'])) {
    if (preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $_POST['company']) == false) {
        $error['company'] = 'Mauvais format';
    };
    if (empty($_POST['company'])) {
        $error['company'] = 'Veuillez renseigner le champ';
    };
}
