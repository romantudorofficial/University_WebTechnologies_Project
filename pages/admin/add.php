<?php
include './add_mvc/add_model.php';
$categories = nonActiveCategories();
$activeCategories = allCategories();
$error = "";
if (isset($_GET["exists"]) && $_GET["exists"] == "true") {
    $error = "This suggestion already exists.";
}
include './add_mvc/add_view.php';
?>