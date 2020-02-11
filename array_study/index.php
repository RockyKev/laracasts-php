<?php

require '../core/Functions.php';

class Post

{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [

    new Post('My First Post', "RK", true),
    new Post('My Second Post', "RK", true),
    new Post('My Third Post', "MG", true),
    new Post('My Fourth Post', "RK", false)
];

//use a array filter and closure to return the thing you want
// $unpublishedPosts = array_filter($posts, function ($post) {

//     return !$post->published;
// });

// $publishedPosts = array_filter($posts, function ($post) {

//     return $post->published;
// });

// foreach ($posts as $index => $post) {

//     $posts[$index] = (array) $post;
// }


$authors = array_column($posts, 'author', 'title');

die_dump($authors);
