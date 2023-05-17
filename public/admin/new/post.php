<?php
require_once("../../../header.php");
require_once("../auth.php");

$title = $_POST["title"] ?? "";
$content = $_POST["content"] ?? "";
$description = $_POST["description"] ?? "";

$_SESSION["title"] = $title;
$_SESSION["content"] = $content;
$_SESSION["description"] = $description;

if(empty($title) || empty($content) || empty($description)) {
    $_SESSION["error"] = "Title, description or content cannot be empty.";
    header($config["directory"] . "Location: /admin/new/");
    exit();
}

$db->prepare("INSERT INTO posts (`title`, `description`, `content`, `timestamp`) VALUES (?, ?, ?, ?)")->execute([$title, $description, $content, time()]);
$_SESSION["success"] = "Post created.";
header($config["directory"] . "Location: /admin/");