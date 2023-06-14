<?php
include 'checking_existence.php';
include '../../../db/adding_deleting.php';
function addingCategory($nameCategory){
    $ok = checkingExistence($nameCategory);
    if(!$ok){
        addCategory($nameCategory);
    }
    header("Location: ../add.php?cat=".$ok, true, 303);
}

addingCategory($_POST['category']);
?>