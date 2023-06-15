<?php
include_once 'checking_existence.php';
include_once '../../../db/adding_deleting.php';
include_once '../../../db/getting_info.php';
function addingLesson($nameLesson, $category, $difficulty)
{
    if ($nameLesson == null || $nameLesson == "") {
        header("Location: ../add.php?les=false", true, 303);
    } else {
        $id_category = getIdCategory($category);
        $ok = checkingExistence($id_category, $nameLesson);
        if (!$ok) {
            addLesson($id_category, $nameLesson, $difficulty);
            $id = getIdLesson($id_category, $nameLesson);
            header("Location: ../content.php?id=" . $id, true, 303);
        } else {
            header("Location: ../add.php?les=false", true, 303);
        }
    }
}

//getting variables
$lesson = $_POST['lesson'];
$category = $_POST['category'];
$difficulty = $_POST['difficulty'];
addingLesson($lesson, $category, $difficulty);
?>