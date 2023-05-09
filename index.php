<?php

//Resolve Cannot modify header information
ob_start();

//Start session
session_start();

//Enable display erros
ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);

//Set the timezone
date_default_timezone_set('Europe/Paris');

//Set a shortcurt for the website url
if ( $_SERVER['SERVER_NAME'] === 'localhost' ) {
    define( "SITE_URL", '/floaty.alexishadjian.com' );
} else {
    define( "SITE_URL", 'https://' . $_SERVER['SERVER_NAME'] );
}

//Init autoloader
require_once('Autoloader.class.php');
Autoloader::register();

//Init router
require_once('router.php');