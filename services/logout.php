<?php
include '../db/connection.php';
function logout($email){
    $mysql = connect();
    $updating = "UPDATE users SET active='no' WHERE email='".$email."'";
        if(!($upd = $mysql -> query ($updating))){
            die('error');
        }
}
?>