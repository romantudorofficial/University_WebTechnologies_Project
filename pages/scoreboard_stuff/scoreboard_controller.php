<?php
    include "scoreboard_model.php";

    $email = $_COOKIE['Email'];

    $user_top = getFirst10Users();
    $user_current = getCurrentUserScore($email);
    
    include "scoreboard_view.php";
?>  