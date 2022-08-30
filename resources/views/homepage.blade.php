<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Birdwatcher</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
       <h1>Birdwatcher</h1>

       <?php foreach($birds as $bird) : ?>
            <article>
                <h3><?= $bird['name']; ?></h3>
                <p>Color: <?= $bird['color']; ?></p>
                <p><?= $bird['description']; ?></p>
            </article>
       <?php endforeach; ?>
    </body>
</html>
