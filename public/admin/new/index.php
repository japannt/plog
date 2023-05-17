<?php
require_once("../../../header.php");
require_once("../auth.php");

print($twig->render('newpost.twig', []));

unset($_SESSION["title"]);
unset($_SESSION["description"]);
unset($_SESSION["content"]);