<?php
require 'functions.php';
require 'Task.php';

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos', 'Task');

// $tasks = fetchAllTasks($pdo);
die_dump($tasks);


require 'index.view.php';
