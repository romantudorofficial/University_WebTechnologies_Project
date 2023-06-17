<?php
include_once '../../../db/connection.php';
function categorySuggestions($category)
{
    $mysql = connect();
    if (!($rez = $mysql->query("SELECT * from suggestions where  category_name like '" . $category . "'"))) {
        die('A survenit o eroare la interogare');
    }
    $i = 0;
    $suggestion = null;
    while ($inreg = $rez->fetch_assoc()) {
        $suggestion[$i] = $inreg['description'];
        $i = $i + 1;
    }
    return $suggestion;
}
$category = $_GET['category'];
$suggestions = categorySuggestions($category);
if ($suggestions == null) {
    echo null;
} else {
    echo implode(',', $suggestions);
}
?>