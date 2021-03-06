<?php

// Tests intégrités données
if (!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
    $errors['email'] = "Vous n'avez pas renseigné votre email";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php#contactme');
}else {
    $_SESSION['success'] = true;
    $errors = [];
    $headers = 'FROM: ' . $_POST['email'];
    mail('cj.carlier@gmail.com', 'Formulaire de contact - '. $_POST['email'], $$_POST['message'], $headers);
    header('Location: index.php#contactme');
}

