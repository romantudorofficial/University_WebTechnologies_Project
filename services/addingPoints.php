<?php
include '../db/updating_score.php';
$score = $_GET['score'];
$email = $_COOKIE['Email'];
$newScore = update_Score($email, $score);
echo 'Congrats! You achieved ' . $score . ' points! Your new score is: '.$newScore;
?>