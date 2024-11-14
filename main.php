<?php

/*
Making flappy birds in php.

Make a object that moves up with spacebar and up arrow and goes down with the given grafity.
Make a loop of objects that spawn at a random number 

*/

session_start();

// Gravity and jump constants
$gravity = 1;
$jump_height = 2;

// check if the action is jump
if ($_POST['action'] === 'jump'){
    // apply jump effect
    $_SESSION['bird_velocity'] = $jump_height;
}

