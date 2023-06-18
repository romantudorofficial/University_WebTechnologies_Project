<?php
include_once './profile_page_mv/profile_page_model.php';
$email = $_COOKIE['Email'];
$info = getUserInfo($email);
$checkType = checkSet($info);
include_once './profile_page_mv/profile_page_view.php';
?>