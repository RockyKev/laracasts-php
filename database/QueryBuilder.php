<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)

    {
        //get the database query
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        //This is to fetch into a dummy object
        // return $statement->fetchAll(PDO::FETCH_OBJ);
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
