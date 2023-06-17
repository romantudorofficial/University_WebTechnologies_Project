<?php
include_once '../../../db/connection.php';
include_once '../../../db/adding_deleting.php';

if (isset($_POST['category_sug']) && isset($_POST['suggestion'])) {
    $mysql = connect();
    $category = $_POST['category_sug'];
    $suggestion = $_POST['suggestion'];

    deleteOneSuggestion($suggestion, $category, $mysql);

    header("Location: ../delete.php?deleted=true");
}
else
    header("Location: ../delete.php?error=true");

?>