<?php

$name = htmlspecialchars($_GET['name']); //grab params escapes


$names = [
    'Rocky', 'Dave', 'Sarah'
];

$greeting = '';

foreach ($names as $name) {
    $greeting .= "THE BIG SHOW $name! ";
}

require 'index.view.php';
