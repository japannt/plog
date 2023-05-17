<?php
require_once("../../header.php");

$id = $_POST["id"];
$text = htmlspecialchars($_POST["text"]);
$name = htmlspecialchars($_POST["name"]);

print_r($_POST);

if(empty($id) || empty($text) || empty($name)) {
	$_SESSION["error"] = "Please fill out all fields.";
	// header("Location: " . $config["directory"] . "/post?id=$id");
	exit();
}

$post = $db->prepare("SELECT * FROM posts WHERE id = ? LIMIT 1");
$post->execute([$id]);
$post = $post->fetch();

if(empty($post)) {
	http_response_code(404);
	require_once("$root/public/error.php");
	exit();
}

$comment = $db->prepare("INSERT INTO comments (`post_id`, `author`, `ip`, `text`, `timestamp`) VALUES (?, ?, ?, ?)");
$comment->execute([$id, $name, $_SERVER["REMOTE_ADDR"], $text, time()]);

header("Location: " . $config["directory"] . "/post?id=$id");