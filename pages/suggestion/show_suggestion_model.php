<?php
include "../../db/connection.php";

function showSuggestions($type, $selectedDescriptions) {
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("suggestionsFile.xml");

    $mysql = connect();
    if ($selectedDescriptions == null) {
        $result = "<h2 style='text-align: center'>You didn't select any suggestions!</h2>";
        return $result;
    }
    else{
        $result = "";
        foreach ($selectedDescriptions as $description) {
            $result .= '<h2 style="text-align: center">' . $description . "</h2><br>";

            if (!($rez = $mysql->query("SELECT id_suggestion from suggestions WHERE description = '" . $description . "'"))) {
                return false;
            }
            $inreg = $rez->fetch_assoc();
            $id_suggestion = $inreg["id_suggestion"];

            $x = $xmlDoc->documentElement;
            foreach ($x->childNodes AS $item1) {
            if ($item1->nodeName == "s" . $id_suggestion) {
                $specificSuggestion = $item1->getElementsByTagName($type);
                    
                foreach ($specificSuggestion as $item2) {
                    if ($item2->nodeName == $type) {
                        //print $item2->nodeValue . "<br>";
                        $infoByGender = $item2->getElementsByTagName("female");
                            
                        foreach ($infoByGender as $item3) {
                            $result .= "<h3>For females: </h3>" . $item3->nodeValue . "<br><br>";
                        }

                        $infoByGender = $item2->getElementsByTagName("male");
                            
                        foreach ($infoByGender as $item4) {
                            $result .= "<h3>For males: </h3>" . $item4->nodeValue . "<br><br>";
                        }
                    }
                }
                    
            }
                
            }

        }}
    return $result;
}
?>