<?php

$config = require 'config.php';

require 'database/Connection.php'; //database connection -- local
require 'database/QueryBuilder.php';

$pdo = Connection::make($config['database']);

return new QueryBuilder($pdo);
