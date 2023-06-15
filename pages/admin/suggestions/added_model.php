<?php
include "../../../db/connection.php";
function addingSuggestionInXML($I_F, $I_M, $F_F, $F_M, $s_description, $s_category) {

    $xmlDoc = new DOMDocument();
    $xmlDoc->load("../../suggestion/suggestionsFile.xml");

    $mysql = connect();
    if (!($rez = $mysql->query("SELECT id_suggestion from suggestions WHERE description = '" . $s_description . "'and category_name = '" . $s_category . "'"))) {
        return false;
    }
    $inreg = $rez->fetch_assoc();
    $id = $inreg['id_suggestion'];

    $suggestion = $xmlDoc->createElement('s' . $id);

    $informal = $xmlDoc->createElement('informal');
    $female1 = $xmlDoc->createElement('female', $I_F);
    $male1 = $xmlDoc->createElement('male', $I_M);
    $informal->appendChild($female1);
    $informal->appendChild($male1);
    $suggestion->appendChild($informal);

    $formal = $xmlDoc->createElement('formal');
    $female2 = $xmlDoc->createElement('female', $F_F);
    $male2 = $xmlDoc->createElement('male', $F_M);
    $formal->appendChild($female2);
    $formal->appendChild($male2);
    $suggestion->appendChild($formal);

    $root = $xmlDoc->documentElement;
    $root->appendChild($suggestion);

    $xmlDoc->save("../../suggestion/suggestionsFile.xml");

}

function addingSuggestionInDB($description, $categ) {
    $mysql = connect();

    if (!($rez = $mysql->query("SELECT * from suggestions WHERE description = '" . $description . "'and category_name = '" . $categ . "'"))) {
        return false;
    }
    if ($rez->num_rows > 0) {
        header("Location: ../add.php?exists=true", true, 303);
        exit;
    }
    else {
        $sql = "INSERT INTO suggestions (category_name, description) VALUES ('" . $categ . "', '" . $description . "')";

        if ($mysql->query($sql) === TRUE) {
            echo "Suggestion added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysql->error;
        }
    }
}
?>