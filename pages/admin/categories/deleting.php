<?php
include 'checking_existence.php';
include '../../../db/adding_deleting.php';
function deletingCategory($nameCategory)
{
    deleteCategory($nameCategory);
    header("Location: ../delete.php", true, 303);
}


deletingCategory($_POST['category']);
?>