<?php

$error = array();

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

if (isset($_POST['birthDay'])) {
    if (empty($_POST['birthDay'])) {
        $error['birthDay'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['birthCountry'])) {
    if (preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $_POST['birthCountry']) == false) {
        $error['birthCountry'] = 'Mauvais format';
    };
    if (empty($_POST['birthCountry'])) {
        $error['birthCountry'] = 'Veuillez renseigner le champ';
    };
}


if (isset($_POST['nationality'])) {
    if (preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{0,18}+$/u", $_POST['nationality']) == false) {
        $error['nationality'] = 'Mauvais format';
    };
    if (empty($_POST['nationality'])) {
        $error['nationality'] = 'Veuillez renseigner le champ';
    };
}


if (isset($_POST['adress'])) {
    if (preg_match("/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/", $_POST['adress']) == false) {
        $error['adress'] = 'Mauvais format';
    };
    if (empty($_POST['adress'])) {
        $error['adress'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['myMail'])) {
    if (filter_var($_POST['myMail'], FILTER_VALIDATE_EMAIL) == false) {
        $error['myMail'] = 'Mauvais format';
    };
    if (empty($_POST['myMail'])) {
        $error['myMail'] = 'Veuillez renseigner le champ';
    };
}


if (isset($_POST['phoneNumber'])) {
    if (preg_match("/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/", $_POST['phoneNumber']) == false) {
        $error['phoneNumber'] = 'Mauvais format';
    };
    if (empty($_POST['phoneNumber'])) {
        $error['phoneNumber'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['submit'])) {
    if (!array_key_exists('graduation', $_POST)) {
        $error['graduation'] = 'Veuillez renseigner le champ';
    };
}


if (isset($_POST['jobCenterNumber'])) {
    if (preg_match("/^[0-9]{7}[a-zA-Z]{1}$/", $_POST['jobCenterNumber']) == false) {
        $error['jobCenterNumber'] = 'Mauvais format';
    };
    if (empty($_POST['jobCenterNumber'])) {
        $error['jobCenterNumber'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['badge'])) {
    if (preg_match("/[0-9]{1}+[0]?/", $_POST['badge']) == false) {
        $error['badge'] = 'Mauvais format';
    };
    if (empty($_POST['badge'])) {
        $error['badge'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['linkCodeAcademy'])) {
    if (filter_var($_POST['linkCodeAcademy'], FILTER_VALIDATE_URL) == false) {
        $error['linkCodeAcademy'] = 'Mauvais format';
    };
    if (empty($_POST['linkCodeAcademy'])) {
        $error['linkCodeAcademy'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['heroes'])) {
    if (empty($_POST['heroes'])) {
        $error['heroes'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['submit'])) {
    if (!array_key_exists('hack', $_POST)) {
        $error['hack'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['practice'])) {
    if (empty($_POST['practice'])) {
        $error['practice'] = 'Veuillez renseigner le champ';
    };
}