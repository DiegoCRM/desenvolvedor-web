<?php

require 'inc/Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

 
$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
        require_once("view/index.php");

    }
);

$app->get(
    '/videos',
    function () {
        require_once("view/videos.php");

    }
);


$app->get(
    '/shopp',
    function () {
        require_once("view/shopp.php");

    }
);

$app->run();
