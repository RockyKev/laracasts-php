<?php
require 'functions.php';
require 'Task.php';

// $name = htmlspecialchars($_GET['name']); //grab params escapes

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

// die_dump($tasks);

require 'index.view.php';
