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

##
