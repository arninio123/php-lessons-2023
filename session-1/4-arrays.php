<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HTML 5 Boilerplate</title>
</head>

<body>
    <?php
    $games = [
        "Dark Souls",
        "World Of Warcraft",
        "Need For Speeds"
        ]
    ?>
    <h1>
        Recommendad Games
    </h1>
    <ul>
        <?php 
            foreach($games as $game) {
                echo "<li> $game </li>";
            }
        ?>
    </ul>
    <ul>
        <?php 
            foreach($games as $game) {
                echo "<li> {$game}* </li>";
            }
        ?>
    </ul> 
    <ul>
        <?php foreach($games as $game) : ?>
            <li><?= $game ?></li>
        <?php endforeach ?>
    </ul> 
    <ul>
        <li><?= $games[1] ?></li>
    </ul> 
</body>

</html>