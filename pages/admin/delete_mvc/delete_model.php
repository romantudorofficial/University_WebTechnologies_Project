<?php
include_once '../../db/connection.php';
include_once '../../db/getting_info.php';
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


function categoryLessons($category)
{
    $mysql = connect();
    $id = getIdCategory($category);
    if (!($rez = $mysql->query("SELECT * from lessons where (type like 'not' and id_category = '$id')"))) {
        die('A survenit o eroare la interogare');
    }
    $i = 0;
    $lesson = null;
    while ($inreg = $rez->fetch_assoc()) {
        $lesson[$i] = $inreg['lessonName'];
        $i = $i + 1;
    }
    return $lesson;
}

function allCategories(){
    $mysql = connect();
    if (!($rez = $mysql->query('SELECT * from categories'))) {
        die('A survenit o eroare la interogare');
    }
    $i = 1;
    $category = null;
    while ($inreg = $rez->fetch_assoc()) {
        $category[$i] = $inreg['categoryName'];
        $i = $i + 1;
    }
    return $category;
}
?>