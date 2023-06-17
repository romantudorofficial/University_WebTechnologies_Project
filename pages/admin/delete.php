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

include './delete_mvc/delete_view.php';
?>