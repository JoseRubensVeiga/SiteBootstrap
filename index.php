<?php

require __DIR__ . '/functions/helper.php';

$url = $_SERVER['REQUEST_URI'] == "/" ? '/index.php' : $_SERVER['REQUEST_URI'];

$url = parse_url($url)['path'];

if(file_exists(__DIR__ . '/public/' . $url)) {
    require __DIR__ . "/templates/begin.inc.php";
    require __DIR__ . "/public" . $url;
    require __DIR__ . "/templates/end.inc.php";
}
else {
    require __DIR__ . '/public/errors/404.php';
}