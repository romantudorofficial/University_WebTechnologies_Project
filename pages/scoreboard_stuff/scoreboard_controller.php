<?php
include "scoreboard_model.php";

$email = $_COOKIE['Email'];

$user_top = getFirst10Users();
$user_current = getCurrentUserScore($email);


include '../../db/getting_info.php';
if (isset($_COOKIE['Email'])) {
    $type = returnTypeSign($_COOKIE['Email']);
} else {
    $type = "Sign in";
}

include "scoreboard_view.php";
?>