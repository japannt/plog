<?php
require_once("../../header.php");

$id = intval($_GET["id"]);
$raw = $_GET["raw"] ?? false;

$post = $db->prepare("SELECT * FROM posts WHERE id = ? LIMIT 1");
$post->execute([$id]);
$post = $post->fetch();

if(empty($post)) {
    http_response_code(404);
    require_once("$root/public/error.php");
    exit();
}

if($raw) {
    header("Content-Type: text/plain");
    die($post["content"]);
}

use \Michelf\MarkdownExtra;
$post["content"] = MarkdownExtra::defaultTransform($post["content"]);

print($twig->render('post.twig', ["post" => $post]));