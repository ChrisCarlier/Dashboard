<?php

// Déclarations
$errors = [];
$headers = 'FROM: site@local.dev';
$message = $_POST['message'];

// Tests intégrités données
if (!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('email', $_POST) || $_POST['email'] == '') {
    $errors['email'] = "Vous n'avez pas renseigné votre email";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

if (!empty($errors)) {
    session_start();
    $_SESSION['errors'] = $errors;
    header('Location: index.php#four');
}else {
    mail('cj.carlier@gmail.com', 'Formulaire de contact', $message, $headers);
}

