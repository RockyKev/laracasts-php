<?php

$name = htmlspecialchars($_GET['name']); //grab params escapes

$greeting = "THE BIG SHOW $name";


require 'index.view.php';
