<?php
//include 'connection.php';
//include '../services/encryption.php';

function addUser($email, $password, $firstName, $lastName, $role){
    $mysql = connect();

    $passwordEncrypted = encrypting($password);
    if (!($rez = $mysql->query ("INSERT INTO users (firstName, lastName, email, password, role)
    VALUES ('$firstName', '$lastName', '$email', '$passwordEncrypted', '$role')"))) {
        return false;
    }
    return true;
}
?>