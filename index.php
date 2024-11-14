<?php

// main game page


session_start();

// initializa game variables if not set
if (!isset($_SESSION['bird_position'])){
    $_SESSION['bird_position'] = 150; // starting position
    $_SESSION['bird_velocity'] = 0; // starting velocity
    $_SESSION['score'] = 0; // score of the player
}

// display current score
$score = $_SESSION['score'];

// display current bird_position
$bird_position = $_SESSION['bird_position'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flappy Birds PHP</title>
    <style> 

    </style>
</head>
<body>
    <h1>Flappy bird (PHP)</h1>
    <div class="score">Score: <?php echo $score; ?></div>
    <div class="bird">
        <img src="" alt="Bird"> <!-- This is missing an image to source this div -->
    </div>
    <form action="main.php" method="POST">
        <input type="hidden" name="action" value="jump">
        <button type="submit">JUMP</button>
    </form>
    <form action="reset.php" method="POST">
        <button type="submit">Reset Game</button>
    </form>
</body>
</html>