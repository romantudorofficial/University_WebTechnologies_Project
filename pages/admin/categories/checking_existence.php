<?php
include_once '../../../db/connection.php';
function checkingExistence($category)
{
    $mysql = connect();
    if (!($rez = $mysql->query('select * from categories where categoryName like "' . $category . '"'))) {
        die('A survenit o eroare la interogare');
    }
    while ($inreg = $rez->fetch_assoc()) {
        return true;
    }
    return false;
}
?>