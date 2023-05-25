<?php
    include "scoreboard_Service.php";

    $email = $_COOKIE['Email'];

    function getFirst10Users() {
        return getFirst10UsersService();
    }

    function getCurrentUserScore($email) {
        return getCurrentUserScoreService($email);
    }

?>