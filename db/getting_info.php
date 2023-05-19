<?php
include 'connection.php';
include '../services/encryption.php';

function getUser($email){ //when we know that the email is unique
    $mysql = connect();
    if (!($rez = $mysql->query ('select * from users where email like "'.$email.'"'))) {
        die ('A survenit o eroare la interogare');
    }
        while ($inreg = $rez->fetch_assoc()) {
            $user = $inreg;
            break;
        }
        return $user;
}

function existsUser($email){
    $mysql = connect();
    if (!($rez = $mysql->query ('select * from users where email like "'.$email.'"'))) {
        die ('A survenit o eroare la interogare');
    }
    if($rez->num_rows>0){
        return true;
    }
    return false;
}

function correctPassword($email,$password){
    $mysql = connect();

    $encryptPSWD = encrypting($password);
    if (!($rez = $mysql->query ('select * from users where email like "'.$email.'" and password like "'.$encryptPSWD.'"'))) {
        die ('A survenit o eroare la interogare');
    }
    if($rez->num_rows>0){
        return true;
    }
    return false;
}
?>