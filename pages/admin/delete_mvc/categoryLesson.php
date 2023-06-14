<?php
include_once '../../../db/connection.php';
include_once '../../../db/getting_info.php';
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
$category = $_GET['category'];
$lessons = categoryLessons($category);
if ($lessons == null) {
    echo null;
} else {
    echo implode(',', $lessons);
}
?>