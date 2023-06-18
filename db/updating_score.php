<?php
include_once 'connection.php';
function old_score($email){
    $mysql = connect();
    $selecting = "SELECT score from users where email='" . $email."'";
    if (!($rez = $mysql->query($selecting))) {
        die('error');
    }
    while($inreg=$rez->fetch_assoc()){
        $oldScore = $inreg['score'];
        return $oldScore;
    }
}
function update_Score($email, $points){
    $oldScore = old_score($email);
    $newScore = $oldScore+$points;
    $mysql = connect();
    $updating = "UPDATE users SET score=".$newScore." WHERE email='" . $email . "'";
    if (!($upd = $mysql->query($updating))) {
        die('error');
    }
    return $newScore;
}
?>