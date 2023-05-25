<?php
    include "scoreboard_model.php";

    $user_top = getFirst10Users();
    
    include "scoreboard_view.php";
?>  