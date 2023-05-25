<?php
    include '../../db/connection.php';

    function getFirst10UsersService(){
        $mysql = connect();
        if (!($rez = $mysql->query ("SELECT firstName, lastName, score FROM users ORDER BY score DESC LIMIT 10"))) {
            return false;
        }
        $i=1;
        while ($inreg = $rez->fetch_assoc()) {
            if ($i > 10) break;
            $user_top[$i]["firstName"] = $inreg["firstName"];
            $user_top[$i]["lastName"] = $inreg["lastName"];
            $user_top[$i]["score"] = $inreg["score"];
            $i=$i+1;
        }
        if ($i < 10) {
            while ($i <= 10) {
                $user_top[$i]["firstName"] = " - ";
                $user_top[$i]["lastName"] = " - ";
                $user_top[$i]["score"] = " - ";
                $i=$i+1;
            }
        }

        return $user_top;
    }
    
?>