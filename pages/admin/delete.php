<?php
include './delete_mvc/delete_model.php';
$categories = nonActiveCategories();
$category1 = $categories[0];
if ($category1) {
    $lessons = categoryLessons($category1);
}
include './delete_mvc/delete_view.php';
?>