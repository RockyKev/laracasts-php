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

## tinkering

print_r($val);
var_dump($val);

echo <pre> var_dump(\$val) </pre>

die(var_dump(\$var)); //this exists out of it.
