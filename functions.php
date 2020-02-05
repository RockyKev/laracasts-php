<?php




//How to create a dump die system
function die_dump($val)
{
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';
}

//database connection -- local
function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1; dbname=laracast_todo', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

//get the database query
function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    //This is to fetch into a dummy object
    // return $statement->fetchAll(PDO::FETCH_OBJ);
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
