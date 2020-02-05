<?php
require 'functions.php';

// $name = htmlspecialchars($_GET['name']); //grab params escapes

$names = [
    'Rocky', 'Dave', 'Sarah'
];

$greeting = '';

foreach ($names as $name) {
    $greeting .= "THE BIG SHOW $name! ";
}

//associative array
$person = [
    'age' => 31,
    'hair' => 'black',
    'career' => 'dev',
];


$task = [
    'title' => 'finish homework',
    'due' => 'today',
    'assigned_to' => 'Jeffery',
    'completed' => true,
];

//classes

//Todo application - Todo = description, completed. 
class Task
{
    public $description;
    public $isCompleted = false;


    public function __construct($description)
    {
        //automatically triggered on instantiation
        $this->description = $description;
    }

    public function completeTheTask()
    {
        $this->isCompleted = true;
    }

    public function isComplete()
    {
        return $this->isCompleted;
    }
}

$tasks = [
    new Task('Go to the Store'),
    new Task('Finish recording'),
    new Task('Clean room'),
    new Task('Go to the Butts'),
];

$tasks[0]->completeTheTask();

// die_dump($tasks);


//grab the view
require 'index.view.php';
