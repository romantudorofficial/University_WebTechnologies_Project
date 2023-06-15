<?php
include "added_model.php";

$info_IF = $_POST['informal_female'];
$info_IM = $_POST['informal_male'];
$info_FF = $_POST['formal_female'];
$info_FM = $_POST['formal_male'];
$s_description = $_POST['suggestion_description'];
$s_category = $_POST['suggestion_category'];

addingSuggestionInDB($s_description, $s_category);
addingSuggestionInXML($info_IF, $info_IM, $info_FF, $info_FM, $s_description, $s_category);

include "added_view.php";

?>