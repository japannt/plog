<?php
require_once("../header.php");

$error = http_response_code();

print($twig->render('error.twig', ["error" => $error]));