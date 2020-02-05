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
