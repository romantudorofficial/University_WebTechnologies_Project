<?php
include './add_mvc/add_model.php';
$categories = nonActiveCategories();
$activeCategories = allCategories();
include './add_mvc/add_view.php';
?>