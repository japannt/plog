<?php
require_once("../../header.php");

$posts = $db->query("SELECT `id`, `title`, `description` FROM posts ORDER BY id DESC LIMIT 10");
$posts->setFetchMode(PDO::FETCH_ASSOC);

header("Content-Type: application/rss+xml; charset=utf-8");
print($twig->render('rss.twig', ["posts" => $posts]));