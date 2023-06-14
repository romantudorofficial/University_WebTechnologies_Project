<?php
include_once '../../../db/connection.php';
function checkingExistence($lesson, $id_category)
{
    $mysql = connect();
    if (!($rez = $mysql->query("select * from lessons where lessonName like  '$lesson' and id_category= '$id_category'"))) {
        die('A survenit o eroare la interogare');
    }
    while ($inreg = $rez->fetch_assoc()) {
        return true;
    }
    return false;
}
?>