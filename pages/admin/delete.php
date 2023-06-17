<?php
include './delete_mvc/delete_model.php';
$categories = nonActiveCategories();
$categories_all = allCategories();
if ($categories != null) {
    $category1 = $categories[0];
    if ($category1) {
        $lessons = categoryLessons($category1);
    }
}
if ($categories_all != null) {
    $category1 = $categories_all[0];
    if ($category1) {
        $suggestions = categorySuggestions($category1);
    }
}

$allCategories = allCategories();

if (isset($_REQUEST['deleted']) && $_REQUEST['deleted'] == true) {
    $message = '<p class="info"> The suggestion was deleted successfully! </p>';
}
else if (isset($_REQUEST['error']) && $_REQUEST['error'] == true) {
    $message = '<p class="info"> The suggestion was not deleted, an error occured! Try again later. </p>';
}

include './delete_mvc/delete_view.php';
?>