<?php
require_once("../../header.php");
require_once("./auth.php");

print($twig->render('admin.twig', []));