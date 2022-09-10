<?php

// nangkep kata terakhir dari url-nya
$url = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// kalau diakhir url-nya ada kata public, maka arahkan user ke public/home
if($url === 'public'){
    header("Location: home");
}

require_once '../app/init.php';

