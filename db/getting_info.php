<?php
include 'connection.php';


function getUser($email)
{ //when we know that the email is unique
    $mysql = connect();
    if (!($rez = $mysql->query('select * from users where email like "' . $email . '"'))) {
        die('A survenit o eroare la interogare');
    }
    while ($inreg = $rez->fetch_assoc()) {
        $user = $inreg;
        break;
    }
    return $user;
}

function existsUser($email)
{
    $mysql = connect();
    if (!($rez = $mysql->query('select * from users where email like "' . $email . '"'))) {
        die('A survenit o eroare la interogare');
    }
    if ($rez->num_rows > 0) {
        return true;
    }
    return false;
}

function correctPassword($email, $password)
{
    $mysql = connect();

    include '../services/encryption.php';
    $encryptPSWD = encrypting($password);
    if (!($rez = $mysql->query('select * from users where email like "' . $email . '" and password like "' . $encryptPSWD . '"'))) {
        die('A survenit o eroare la interogare');
    }
    if ($rez->num_rows > 0) {
        $updating = "UPDATE users SET active='yes' WHERE email='" . $email . "'";
        if (!($upd = $mysql->query($updating))) {
            die('error');
        }
        return true;
    }
    return false;
}

function getRole($email)
{
    $mysql = connect();
    if (!($rez = $mysql->query('select role from users where email like "' . $email . '"'))) {
        die('A survenit o eroare la interogare');
    }
    while ($inreg = $rez->fetch_assoc()) {
        $role = $inreg["role"];
        break;
    }
    return $role;
}

function isActive($email)
{
    $mysql = connect();
    if (!($rez = $mysql->query('select active from users where email like "' . $email . '"'))) {
        die('A survenit o eroare la interogare');
    }
    while ($inreg = $rez->fetch_assoc()) {
        $active = $inreg["active"];
        break;
    }
    if ($active == "yes")
        return true;
    return false;
}

function isAdmin($email)
{
    $role = getRole($email);
    if ($role == "admin")
        return true;
    return false;
}

function returnTypeSign($email)
{
    if (isActive($_COOKIE['Email'])) {
        $name = "Sign out";
    } else {
        $name = "Sign in";
    }
    return $name;
}

function getId($email){
    $mysql = connect();
    if (!($rez = $mysql->query('select id_user from users where email like "' . $email . '"'))) {
        die('A survenit o eroare la interogare');
    }
    while ($inreg = $rez->fetch_assoc()) {
        $id = $inreg["id_user"];
        break;
    }
    return $id;
}
?>