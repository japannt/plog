<?php

require_once("../../header.php");
require_once("./auth.php");

$post = intval($_POST["post"]);

if(empty($post) || $post == 0) {
    $_SESSION["error"] = "Invalid post ID.";
    header($config["directory"] . "Location: /admin/");
    exit();
}

$posts = $db->prepare("SELECT * FROM posts WHERE id = ? LIMIT 1");

print_r($posts);