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
function addLesson($id_category, $lesson, $difficulty)
{
    $mysql = connect();
    if (!($rez = $mysql->query("INSERT into lessons (id_category ,lessonName , difficulty, type) VALUES ('$id_category','$lesson','$difficulty', 'not')"))) {
        die('A survenit o eroare la interogare');
    }
}
function deleteCategory($category)
{
    $mysql = connect();
    $id_category = getIdCategory($category);
    deleteLessonsFromThatCategory($id_category, $mysql);
    deleteSuggestionsFromCategory($category, $mysql);
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
    //modifyingLessonsQuestions($category, $mysql);
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

function addContent($idLesson, $elements, $result)
{
    $mysql = connect();
    $serializedElements = serialize($elements);
    $serializedResult = serialize($result);

    //checkinf if it exists by using getcontent
    $ok = getContent($idLesson);
    if ($ok == null) {
        if (!($rez = $mysql->query("INSERT into content (id_lesson ,contentLesson , contentType) VALUES ('$idLesson','$serializedResult','$serializedElements')"))) {
            die('A survenit o eroare la interogare');
        }
        return 1;
    } else {
        if (!($rez = $mysql->query("UPDATE content SET contentLesson ='$serializedResult', contentType='$serializedElements' where id_lesson ='$idLesson'"))) {
            die('A survenit o eroare la interogare');
        }
        return 0;
    }
}

function deleteSuggestionsFromCategory($category, $mysql)
{
    if (!($rez1 = $mysql->query("SELECT id_suggestion FROM suggestions WHERE category_name = '$category'"))) {
        die('A survenit o eroare la interogare');
    }
    
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("../../suggestion/suggestionsFile.xml");

    while ($inreg = $rez1->fetch_assoc()) {
        $id_suggestion = $inreg['id_suggestion'];
        $x = $xmlDoc->getElementsByTagName("file")->item(0);
        $y = $x->getElementsByTagName("s".$id_suggestion)->item(0);
        $x->removeChild($y);
    }

    $xmlDoc->save("../../suggestion/suggestionsFile.xml");

    if (!($rez2 = $mysql->query("DELETE FROM suggestions WHERE category_name = '$category'"))) {
        die('A survenit o eroare la interogare');
    }
}

function deleteOneSuggestion($description, $category, $mysql)
{
    if (!($rez1 = $mysql->query("SELECT id_suggestion FROM suggestions WHERE description = '$description' "))) {
        die('A survenit o eroare la interogare');
    }
    
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("../../suggestion/suggestionsFile.xml");

    while ($inreg = $rez1->fetch_assoc()) {
        $id_suggestion = $inreg['id_suggestion'];
        $x = $xmlDoc->getElementsByTagName("file")->item(0);
        $y = $x->getElementsByTagName("s".$id_suggestion)->item(0);

        if ($y != null) {
            $x->removeChild($y);
        }
        
    }

    $xmlDoc->save("../../suggestion/suggestionsFile.xml");

    if (!($rez2 = $mysql->query("DELETE FROM suggestions WHERE description = '$description'"))) {
        die('A survenit o eroare la interogare');
    }
}

?>

