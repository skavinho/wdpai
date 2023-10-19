<?php
require "Routing.php";

$path = trim($_SERVER['REQUEST_URI'], "/");
$path = parse_url($path, PHP_URL_PATH);

Router::get("", 'DefaultController');
Router::get("home", 'DefaultController');
Router::post("login", 'SecurityController');
Router::post("register", 'SecurityController');
Router::get("aboutus", 'DefaultController');
Router::get("cart", 'OrderController');
Router::get("account", 'DefaultController');


Router::post("logout", 'AccountController');
Router::get("topup", 'AccountController');
Router::get("orders", 'AccountController');

Router::run($path);
?>