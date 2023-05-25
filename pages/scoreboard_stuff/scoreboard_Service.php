<?php
include '../../db/connection.php';

$email = $_COOKIE['Email'];

function getFirst10UsersService()
{
    $mysql = connect();
    if (!($rez = $mysql->query("SELECT firstName, lastName, score FROM users ORDER BY score DESC, firstName, lastName ASC LIMIT 10"))) {
        return false;
    }
    $i = 1;
    while ($inreg = $rez->fetch_assoc()) {
        if ($i > 10)
            break;
        $user_top[$i]["firstName"] = $inreg["firstName"];
        $user_top[$i]["lastName"] = $inreg["lastName"];
        $user_top[$i]["score"] = $inreg["score"];
        $i = $i + 1;
    }
    if ($i < 10) {
        while ($i <= 10) {
            $user_top[$i]["firstName"] = " - ";
            $user_top[$i]["lastName"] = " - ";
            $user_top[$i]["score"] = " - ";
            $i = $i + 1;
        }
    }

    return $user_top;
}

function getCurrentUserScoreService($email)
{
    $mysql = connect();
    if (!($rez = $mysql->query("SELECT firstName, lastName, score FROM users WHERE email = '$email'"))) {
        return false;
    }

    $inreg = $rez->fetch_assoc();
    $user_score["firstName"] = $inreg["firstName"];
    $user_score["lastName"] = $inreg["lastName"];
    $user_score["score"] = $inreg["score"];

    $score = $inreg["score"];

    if (!($rez2 = $mysql->query("SELECT COUNT(*) FROM users WHERE score > '$score'"))) {
        return false;
    }

    $inreg2 = $rez2->fetch_assoc();

    if (!($rez3 = $mysql->query("SELECT COUNT(*) FROM users WHERE firstName < '$user_score[firstName]' and score = '$score'"))) {
        return false;
    }

    $inreg3 = $rez3->fetch_assoc();

    $user_score["rank"] = $inreg2["COUNT(*)"] + $inreg3["COUNT(*)"] + 1;

    return $user_score;
}

?>