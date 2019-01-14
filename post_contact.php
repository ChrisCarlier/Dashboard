<?php

$message = $_POST['message'];

$headers = 'FROM: site@local.dev';

mail('cj.carlier@gmail.com', 'Formulaire de contact', $message, $headers);