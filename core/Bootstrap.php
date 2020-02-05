<?php

$app = [];

$app['config'] = require 'config.php';



require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php'; //database connection -- local
require 'core/database/QueryBuilder.php';

$pdo = Connection::make($app['config']['database']);

$app['database'] = new QueryBuilder($pdo);
