<?php
include 'all_about_json.php';
$category = $_GET['c'];
$lesson = $_GET['l'];
$save = $_GET['save'];
$res = checking_email($category, $lesson, $save);
echo $res;
?>