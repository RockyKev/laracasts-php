<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Rocky's test page</title>
    <meta name="description" content="Rocky's Test Page">

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <nav>
        <ul>
            <li><a href="/about.php">About Page</a></li>
            <li><a href="/contact.php">Contact Page</a></li>
        </ul>
    </nav>


    <ul>
        <?php foreach ($tasks as $task) : ?>


            <li>
                <?php if ($task->isCompleted) : ?>
                    <span class="strikethrough">
                        <?= $task->description ?>
                    </span>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>

        <?php endforeach; ?>
    </ul>



    <script src="js/scripts.js"></script>
</body>

</html>