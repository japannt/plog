<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once("../header.php");

$error = http_response_code();

if($error == 200) {
	http_response_code(404);
	$error = 404;
}

print($twig->render('error.twig', ["error" => $error]));