<?php
require_once("../../header.php");

// simple auth with username and password from config.php

$username = $config["admin_username"];
$password = $config["admin_password"];

if(!isset($_SERVER["PHP_AUTH_USER"]) || !isset($_SERVER["PHP_AUTH_PW"]) || $_SERVER["PHP_AUTH_USER"] != $username || $_SERVER["PHP_AUTH_PW"] != $password) {
	header("WWW-Authenticate: Basic realm=\"plog_admin\"");
	header("HTTP/1.0 401 Unauthorized");
	print("You must enter a valid username and password to access this page.");
	exit();
}

print($twig->render('admin.twig', []));