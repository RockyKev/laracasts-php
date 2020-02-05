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


    <ul>
        <?php foreach ($names as $name) : ?>

            <li> <?= $name ?></li>

        <?php endforeach; ?>
    </ul>







    <script src="js/scripts.js"></script>
</body>

</html>