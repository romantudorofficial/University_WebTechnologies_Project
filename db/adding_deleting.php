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
    modifyingLessonsQuestions($category, $mysql);
    if (!($rez = $mysql->query("DELETE FROM lessons where id_category = '$category' and lessonName like '$lesson'"))) {
        die('A survenit o eroare la interogare');
    }
}
function modifyingLessonsQuestions($id_category, $mysql)
{
    if (!($rez = $mysql->query("SELECT * from lessons where (type like 'not' and id_category = '$id_category')"))) {
        die('A survenit o eroare la interogare');
    }
    while ($inreg = $rez->fetch_assoc()) {
        deleteQuestions($id_category, $inreg['id_lesson'], $mysql);
    }
}
function deleteQuestions($category, $lesson, $mysql)
{
    if (!($rez = $mysql->query("DELETE FROM questions where id_category = '$category' and id_lesson = '$lesson'"))) {
        die('A survenit o eroare la interogare');
    }
}
?>