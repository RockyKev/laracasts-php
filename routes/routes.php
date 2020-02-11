<?php

// $router->define([

//     'about' => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact' => 'controllers/contact.php',
//     'names' => 'controllers/add-name.php' //only for POST TYPES
// ]);


$router->get('', 'controllers/index.php');

$router->get('about', 'controllers/about.php');

$router->get('about/culture', 'controllers/about-culture.php');

$router->get('contact', 'controllers/contact.php');

$router->post('names', 'controllers/add-name.php');


// die_dump($router->routes);
