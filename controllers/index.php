<?php

$tasks = $query->selectAll('todos');

// $tasks = fetchAllTasks($pdo);
// die_dump($tasks);

require 'view/index.view.php';
