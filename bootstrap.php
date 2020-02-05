<?php

require 'database/Connection.php'; //database connection -- local
require 'database/QueryBuilder.php';

$pdo = Connection::make();

return new QueryBuilder($pdo);
