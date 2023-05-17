<?php
$username = $config["admin_username"];
$password = $config["admin_password"];

if(!isset($_SERVER["PHP_AUTH_USER"]) || !isset($_SERVER["PHP_AUTH_PW"]) || $_SERVER["PHP_AUTH_USER"] != $username || $_SERVER["PHP_AUTH_PW"] != $password) {
	header("WWW-Authenticate: Basic realm=\"plog_admin_panel\"");
	http_response_code(401);
	require_once("$root/public/error.php");
	exit();
}