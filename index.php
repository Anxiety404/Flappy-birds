<?php

// main game page


session_start();

// initializa game variables if not set
if (!isset($_SESSION['bird_position'])){
    $_SESSION['bird_position'] = 150; // starting position
    $_SESSION['bird_velocity'] = 0; // starting velocity
    $_SESSION['score'] = 0; // score of the player
}

