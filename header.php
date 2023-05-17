<?php
$root = dirname(__FILE__);

session_start();

require_once("$root/vendor/autoload.php");
require_once("$root/config.php");

$vars = [
	"url" => $_SERVER['HTTP_HOST'],
	"request_uri" => $_SERVER['REQUEST_URI'],
	"log" => ""
];

function dev_print($var) {
	global $config, $vars;
	if($config["production"]) { return; }

	if(is_array($var) || is_object($var)) {
		$var = print_r($var, true);
	}

	$vars["log"] = $vars["log"] . "\n" . $var;
}

dev_print("<b>plog info:</b> You are running in development mode. Make sure to set <code>\"production\"</code> to <code>true</code> in <code>config.php</code> before going live.");

function check_db() {
	global $db;

	if(!isset($db)) {
		dev_print("<b>plog error:</b> Database not set!");
		return;
	}

	$db->exec("CREATE TABLE IF NOT EXISTS `posts` (
		`id` INTEGER PRIMARY KEY AUTOINCREMENT,
		`title` TEXT NOT NULL,
		`description` TEXT NOT NULL,
		`content` TEXT NOT NULL,
		`timestamp` INT NOT NULL
	)");

	$db->exec("CREATE TABLE IF NOT EXISTS `comments` (
		`id` INTEGER PRIMARY KEY AUTOINCREMENT,
		`post_id` INT NOT NULL,
		`author` TEXT NOT NULL DEFAULT 'Anonymous',
		`ip` TEXT NOT NULL,
		`content` TEXT NOT NULL,
		`timestamp` INT NOT NULL
	)");

	dev_print("<b>plog info:</b> Database passed checks.");

	if($db->query("SELECT COUNT(`id`) FROM `posts`")->fetchAll()[0][0] == 0) {
		dev_print("<b>plog warning:</b> posts are empty.");
	}
}

if (!file_exists("$root/" . $config["db_name"] . ".db")) {
	dev_print("<b>plog info:</b> Database does not exist, creating...");
}

$db = new PDO("sqlite:$root/" . $config["db_name"] . ".db");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

check_db();

$loader = new \Twig\Loader\FilesystemLoader($root . "/templates");
$twig = new \Twig\Environment($loader, [
	"cache" => $root . "/cache",
	"debug" => true,
]);

$twig->addGlobal("config", $config);
$twig->addGlobal("vars", $vars);
$twig->addGlobal("session", $_SESSION);

unset($_SESSION["error"]);
unset($_SESSION["success"]);
unset($_SESSION["info"]);