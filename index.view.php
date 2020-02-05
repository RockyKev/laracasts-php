<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Rocky's test page</title>
    <meta name="description" content="Rocky's Test Page">

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <header> Hello, <?= $greeting; ?>
    </header>


    <!-- standard loop -->
    <ul>
        <?php foreach ($names as $name) : ?>

            <li> <?= $name ?></li>

        <?php endforeach; ?>
    </ul>


    <!-- extracting key-value pairs -->
    <ul>
        <?php foreach ($person as $key => $val) : ?>

            <li> <strong><?= $key ?> </strong> : <?= $val; ?> </li>

        <?php endforeach; ?>
    </ul>

    <!-- Homework -->

    <ul>
        <li><strong>Name:</strong> <?= $task['title']; ?> </li>
        <li><strong>Due Date:</strong> <?= $task['due']; ?></li>
        <li><strong>Person Responsible:</strong> <?= $task['assigned_to']; ?></li>
        <li><strong>Completed?</strong> <?= $task['completed'] ? '<span class="icon">&#9989</span>' : 'Incomplete'; ?> </li>
    </ul>

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