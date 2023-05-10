<?php
$root = dirname(__FILE__);

require_once("$root/vendor/autoload.php");
require_once("$root/config.php");

$loader = new \Twig\Loader\FilesystemLoader($root . "/templates");
$twig = new \Twig\Environment($loader, [
    "cache" => $root . "/cache",
    "debug" => true,
]);


$twig->addGlobal("config", $config);
$twig->addGlobal("info", $_SERVER);