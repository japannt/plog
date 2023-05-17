<?php
require_once("../../header.php");
require_once("./auth.php");

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();

print($twig->render('admin.twig', ["posts" => $posts]));