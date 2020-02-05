<?php

$tasks = $app['database']->selectAll('todos');

// $tasks = fetchAllTasks($pdo);
// die_dump($tasks);

require 'views/index.view.php';
