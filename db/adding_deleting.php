<?php
include_once 'connection.php';
include_once 'getting_info.php';
function addCategory($category)
{
    $mysql = connect();
    if (!($rez = $mysql->query("INSERT into categories (categoryName , type) VALUES ('$category', 'not')"))) {
        die('A survenit o eroare la interogare');
    }
}

function deleteCategory($category)
{
    $mysql = connect();
    $id_category = getIdCategory($category);
    deleteLessonsFromThatCategory($id_category, $mysql);
    if (!($rez = $mysql->query("DELETE FROM categories where categoryName like '$category'"))) {
        die('A survenit o eroare la interogare');
    }
}

function deleteLessonsFromThatCategory($category, $mysql)
{
    if (!($rez = $mysql->query("DELETE FROM lessons where id_category = '$category'"))) {
        die('A survenit o eroare la interogare');
    }
}

function deleteLesson($category, $lesson)
{
    $mysql = connect();
    if (!($rez = $mysql->query("DELETE FROM lessons where id_category = '$category' and lessonName like '$lesson'"))) {
        die('A survenit o eroare la interogare');
    }
}
?>