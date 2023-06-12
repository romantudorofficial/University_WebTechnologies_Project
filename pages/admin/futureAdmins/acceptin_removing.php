<?php
include_once "../../../db/connection.php";
function accepting($email)
{
    $mysql = connect();
    if (
        !($rez = $mysql->query("UPDATE users SET role='admin' WHERE email LIKE'" . $email . "'"))
    ) {
        die("Could not update data ");
    }
    if (!($rez = $mysql->query(("DELETE from admin_requests WHERE email LIKE'" . $email . "'")))) {
        die("Could not delete the row");
    }
}

function rejecting($email)
{
    $mysql = connect();
    if (!($rez = $mysql->query(("DELETE from admin_requests WHERE email='" . $email . "'")))) {
        die("Could not delete the row");
    }
}

#the main function
$email = $_GET['e'];
$command = $_GET['ok'];
if ($command == 0) {
    rejecting($email);
} else {
    accepting($email);
}
header("Location: ./admin.php", true, 303);
?>