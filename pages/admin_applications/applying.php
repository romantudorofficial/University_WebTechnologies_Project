<?php
include_once '../../db/getting_info.php';
include_once '../../db/connection.php';

if (isAdmin(($_COOKIE['Email']))) {
    header("Location: admin_application_view.php?a=false");
}
else {

    $mysql = connect();

    if (!($rez = $mysql->query("SELECT * from admin_requests where Email = '" . $_COOKIE['Email'] . "'"))) {
        return false;
    }

    if ($rez->num_rows > 0) {
        header("Location: admin_application_view.php?a=stop");
    }
    else {
        if (!($rez = $mysql->query("SELECT firstName, lastName from users where Email = '" . $_COOKIE['Email'] . "'"))) {
            return false;
        }
    
        $inreg = $rez->fetch_assoc();
        $first_name = $inreg["firstName"];
        $last_name = $inreg["lastName"];
        
    
        $query = "INSERT INTO admin_requests (email, firstName, lastName) VALUES ('" . $_COOKIE['Email'] . "', '" . $first_name . "', '" . $last_name ."')";
        $mysql->query($query);
    
    
        header("Location: admin_application_view.php?a=true");
    }

}
?>