<?php
include "show_suggestion_model.php";

if (isset($_POST['type'])) {
    $type = $_POST['type'];
}

if (isset($_POST['description'])) {
    $selectedDescriptions = $_POST['description'];
}
else {
    $selectedDescriptions = null;
}

$result = showSuggestions($type, $selectedDescriptions);

include "show_suggestion_view.php";
?>