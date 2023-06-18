<?php
include_once '../../db/connection.php';
include_once '../../db/getting_info.php';
function updateUser($info, $mysql, $email)
{
    $updating = "UPDATE users SET firstName='" . $info['first-name'] . "', lastName='" . $info['last-name'] . "',email='" . $info['email'] . "'WHERE email='" . $email . "'";
    if (!($updating = $mysql->query($updating))) {
        die('error');
    }
    return true;
}
function updateUserInfo($info, $mysql, $email_id)
{
    $updating = "UPDATE user_info SET nationality='" . $info['nationality'] . "', countryResidence='" . $info['country-of-residence'] . "',gender='" . $info['gender'] . "',occupation='" . $info['occupation'] . "',socialStatus='" . $info['social-status'] . "',religion='" . $info['religion'] . "' WHERE id_user=" . $email_id;
    if (!($updating = $mysql->query($updating))) {
        die('error');
    }
    return true;
}
function updatingForm($info)
{
    $email = $_COOKIE['Email'];
    $email_id = getId($email);
    $mysql = connect();
    if (updateUser($info, $mysql, $email)) {
        if (updateUserInfo($info, $mysql, $email_id)) {
            return true;
        }
    }
    return false;
}



$ok = false;
if (isActive($_COOKIE['Email'])) {
    if (updatingForm($_POST)) {
        $ok = true;
    }
}
header("Location: ../profile_page.php?ok=" . $ok, true, 303);
?>