<?php
include_once '../../db/connection.php';
function nonActiveCategories()
{
    $mysql = connect();
    if (!($rez = $mysql->query('SELECT * from categories where type like "not"'))) {
        die('A survenit o eroare la interogare');
    }
    $i = 0;
    $category = null;
    while ($inreg = $rez->fetch_assoc()) {
        $category[$i] = $inreg['categoryName'];
        $i = $i + 1;
    }
    return $category;
}

function allCategories()
{
    $mysql = connect();
    if (!($rez = $mysql->query('SELECT * from categories'))) {
        die('A survenit o eroare la interogare');
    }
    $i = 0;
    $category = null;
    while ($inreg = $rez->fetch_assoc()) {
        $category[$i] = $inreg['categoryName'];
        $i = $i + 1;
    }
    return $category;
}

?>