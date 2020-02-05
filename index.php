<?php
//entry point into the app

require 'Functions.php';
$query = require 'Bootstrap.php';

$routes = [
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
];
