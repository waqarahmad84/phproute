<?php

$request = $_SERVER['REQUEST_URI'];
echo $request;
switch ($request) {
    case '/phproute/' :
        require __DIR__ . '/index.php';
        break;
    case '/phproute/a' :
        require __DIR__ . '/views/a.php';
        break;
    case '/phproute/b' :
        require __DIR__ . '/views/b.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}






?>
