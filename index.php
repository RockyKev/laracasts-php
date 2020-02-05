<?php

$name = htmlspecialchars($_GET['name']); //grab params escapes


$names = [
    'Rocky', 'Dave', 'Sarah'
];

$greeting = '';

foreach ($names as $name) {
    $greeting .= "THE BIG SHOW $name! ";
}

//associative array
$person = [
    'age' => 31,
    'hair' => 'black',
    'career' => 'dev',
];



require 'index.view.php';
