<?php
include './other/introduction_model.php';
$id=$_GET['id_cat'];
$lessons = returnLessonsAsArray($id);
include './other/introduction_view.php';
?>