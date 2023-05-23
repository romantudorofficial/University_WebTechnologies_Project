<?php
if (!$_REQUEST["email"] || !$_REQUEST["password"]) {
    $eroare = 1;
    header("Location: ../pages/login_page.php?error=$eroare", true, 303);
    exit;
} else {
    include '../db/getting_info.php';
    $email = "Email";
    $emailName = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $role = "Role";
    $checker = correctPassword($emailName, $password);
    if (!$checker) {
        $eroare = 2;
        header("Location: ../pages/login_page.php?error=$eroare", true, 303);
    } else {
        setcookie($email, $emailName, time() + (86400), '/');
        $roleName = getRole($emailName);
        setcookie($role, $roleName, time() + (86400), '/');
        header("Location: ../pages/indexProj.php", true, 303);
    }
}
?>