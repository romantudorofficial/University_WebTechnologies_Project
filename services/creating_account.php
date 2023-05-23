<?php
if(!$_REQUEST["email"]||!$_REQUEST["password"]||!$_REQUEST["first-name"]||!$_REQUEST["last-name"]||!$_REQUEST["account-type-option"])
{
$eroare=1;
header("Location: ../pages/create_account_page.php?error=$eroare",true,303);
exit;
}
else{
    include '../db/getting_info.php';
    $email = "Email";
    $emailName = $_REQUEST["email"];
    $checker = existsUser($emailName);
    if($checker){
        $eroare=2;
        header("Location: ../pages/create_account_page.php?error=$eroare",true,303);
    }
    else{
        //setcookie($email,$emailName,time()+(86400));
        include '../db/adding_data.php';
    $firstName = $_REQUEST["first-name"];
    
    $lastName = $_REQUEST["last-name"];
    
    $password = $_REQUEST["password"];

    if($_REQUEST["account-type-option"]=="individual"){
        $role = "user";
    }
    else{
        $role = "admin";
    }

    if(!addUser($emailName, $password, $firstName, $lastName, $role)){
        die("error");
    }
    else{
        header("Location: ../pages/login_page.php?msg=1",true,303);
    }
    }
}
?>
