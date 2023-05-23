<?php
//include 'connection.php';
//include '../services/encryption.php';

function addUser($email, $password, $firstName, $lastName, $role)
{
    $mysql = connect();

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
?>