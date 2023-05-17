<?php
require_once("../../header.php");

$posts = $db->query("SELECT `id`, `title`, `description`, `timestamp` FROM posts ORDER BY id DESC")->fetchAll();

print($twig->render('posts.twig', ["posts" => $posts]));