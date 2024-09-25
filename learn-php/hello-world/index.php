<?php
    $name = $_GET['name'] ?? 'user';
    echo "<h1>Hello $name</h1>";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2PGM Datamanagement</title>
</head>
<body>
    <h1>Welkom <?= $name; ?></h1>
   
    <?php if($name === 'user'): ?>
        <h2>Wat is jouw naam?</h2>
        <form action="/hello-world/index.php" method="get">
            <input type="text" name="name" value="<?= $name; ?>">
            <input type="submit" value="Verstuur">
        </form>
    <?php else: ?>
        <a href="/hello-world/index.php">Terug</a>
    <?php endif; ?>
    
</body>
</html>