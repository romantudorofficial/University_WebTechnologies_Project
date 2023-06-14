<?php
    include "suggestions_model.php";

    $categories = getAvailableCategories();

    include "suggestions_view.php";
?>