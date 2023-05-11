<?php
$root = dirname(__FILE__);

session_start();

require_once("$root/vendor/autoload.php");
require_once("$root/config.php");

$loader = new \Twig\Loader\FilesystemLoader($root . "/templates");
$twig = new \Twig\Environment($loader, [
    "cache" => $root . "/cache",
    "debug" => true,
]);

$vars = [
	"posts" => array_diff(scandir(".", 2), [".", "..", "index.php"]),
    "error" => $_SESSION["error"] ?? "",
];

$twig->addGlobal("config", $config);
$twig->addGlobal("info", $_SERVER);
$twig->addGlobal("vars", $vars);