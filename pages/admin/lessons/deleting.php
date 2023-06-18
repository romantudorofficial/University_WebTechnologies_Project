<?php
include_once '../../../db/adding_deleting.php';
include_once '../../../db/getting_info.php';
function deletingLesson($nameCategory, $nameLesson)
{
    $id = getIdCategory($nameCategory);
    deleteLesson($id, $nameLesson);
    header("Location: ../delete.php", true, 303);
}


deletingLesson($_POST['category'], $_POST['lesson']);
?>