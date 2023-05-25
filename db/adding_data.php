<?php
//include 'connection.php';
//
//include 'getting_info.php';

function addUser($email, $password, $firstName, $lastName, $role)
{
    $mysql = connect();
    include '../services/encryption.php';
    $passwordEncrypted = encrypting($password);
    if ($role == "admin") {
        addRequest($mysql, $email, $firstName, $lastName);
        $role = "user";
    }
    if (
        !($rez = $mysql->query("INSERT INTO users (firstName, lastName, email, password, role)
    VALUES ('$firstName', '$lastName', '$email', '$passwordEncrypted', '$role')"))
    ) {
        return false;
    }
    $id = getId($email);
    addUserInfo($mysql ,$id);
    return true;
}

function addRequest($mysql, $email, $firstName, $lastName)
{
    if (
        !($rez = $mysql->query("INSERT INTO admin_requests (email, firstName, lastName)
    VALUES ('$email','$firstName', '$lastName')"))
    ) {
        return false;
    }
    return true;
}

function addUserInfo($mysql, $id){
    if (
        !($rez = $mysql->query("INSERT INTO user_info (id_user)
    VALUES ('$id')"))
    ) {
        return false;
    }
    return true;
}
?>