<?php
include_once 'connection.php';
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
    if (!($rez = $mysql->query("DELETE FROM categories where categoryName like '$category'"))) {
        die('A survenit o eroare la interogare');
    }
}

?>