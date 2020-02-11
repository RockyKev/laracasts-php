## repeat data

```
    <ul>
        <?php
        foreach ($names as $name) {
            echo "<li>$name</li>";
        } ?>
    </ul>
```

```
<ul>
<?php foreach ($names as $name) : ?>

    <li> <?= $name ?></li>

<?php endforeach; ?>
</ul>
```

## Export specific data

```
$task = [
    'title' => 'finish homework',
    'due' => 'today',
    'assigned_to' => 'Jeffery',
    'completed' => true,
];
```

```
    <ul>
        <li><strong>Name:</strong> <?= $task['title']; ?> </li>
        <li><strong>Due Date:</strong> <?= $task['due']; ?></li>
        <li><strong>Person Responsible:</strong> <?= $task['assigned_to']; ?></li>
        <li><strong>Completed?</strong> <?= $task['completed'] ? '<span class="icon">&#9989</span>' : 'Incomplete'; ?> </li>
    </ul>

```

## grab params

```
$name = htmlspecialchars($_GET['name']); //grab params escapes
```

## endif

```
<?= $task['completed'] ? '<span class="icon">&#9989</span>' : 'Incomplete'; ?>
```

```
<?php if ($task['completed']) : ?>

    <span class="icon">&#9989</span>

<?php else : ?>

    Incomplete

<?php endif; ?>
```

## tinkering

print_r($val);
var_dump($val);

```
echo <pre> var_dump($val) </pre>
```

```
die(var_dump(\$var)); //this exists out of it.
```

## Making connections

```
class Connection
{
    public function make()
}
//call this by using
//$connection = new Connection();
//$connection->make();

```

```
class Connection
{
    public static function make()
}

//call this by using Connection::make();
```

## Array filters

```
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
    new Post('My First Post', true),
    new Post('My Second Post', true),
    new Post('My Third Post', true),
    new Post('My Fourth Post', false)
];

```

Using this data set.

### array_filer($thing, $function) ----> BOOLEAN RESULT

```
//use a array filter and closure to return the thing you want
$unpublishedPosts = array_filter($posts, function ($post) {

    return !$post->published;
});

var_dump($unpublishedPosts);
```

### array_map ($function, $thing) -----> TRANSFORM DATA

It's reversed - where the callback function is

```
$modified = array_map(function ($post) {

    $post->title = true;
    return $post;
}, $posts);
```

It's the same as

```
foreach ($posts as $post) {

    $post->title = true;
};
```

So why use array map?

```
$modified = array_map(function ($post) {

    $post->title = true;
    return (array) $post;
}, $posts);
```

That example above will return a array of items instead of an object of items.

```
$modified = array_map(function ($post) {

    return ['title' => $post->title];
}, $posts);
```

Return ONLY the title of the post.

### array_columns ----> FILTER DATA - pull value

```
$titlesOnly = array_map(function ($post) {
    return $post->title;
}, $posts);


$titlesOnlyWithColumns = array_column($posts, 'title');

die_dump($titlesOnlyWithColumns);

```

### Turn objects into array

```
foreach ($posts as $index => $post) {

    $posts[$index] = (array) $post;
}
```

OR

```
$arrayPosts = array_map(function ($post) {
    return (array) $post;
}, $posts);
```

### get all the authors

```
$authors = array_column($posts, 'author');
```

```
$authors = array_column($posts, 'author', 'title');
```

If you want it to be an associative array (key->value)

### Types of REquest

```var_dump($_SERVER);

var_dump($_REQUEST);

//great for search
var_dump($_GET['name']);
var_dump($_GET['age']);
```
