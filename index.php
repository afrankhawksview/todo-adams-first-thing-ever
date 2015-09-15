<?php

require __DIR__ . '/vendor/autoload.php';

date_default_timezone_set ('America/Toronto');


$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->get('/', function () {
    include 'views/main.php';
});
$app->run();
