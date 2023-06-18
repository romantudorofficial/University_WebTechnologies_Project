<?php
include_once './other/lesson_model.php';
include_once './other/introduction_model.php';
$id_lesson=$_GET['id_les'];
$id = $_GET['id'];
$content = returnContentAsArray($id_lesson);
$lessons = returnLessonsAsArray($id);
include './other/lesson_view.php';
?>