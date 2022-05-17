<?php
session_start();
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
require_once('controllers/Router.php');
require('controllers/session/library.php');
$router = new Router();
$router->routeReq();

die();
