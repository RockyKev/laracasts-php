<?php


//How to create a dump die system
function die_dump($val)
{
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';
}
