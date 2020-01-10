<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

// Initiate Fat Free
$f3 = Base::instance();

// Default Fat Free route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render("views/home.html");
});

$f3->run();