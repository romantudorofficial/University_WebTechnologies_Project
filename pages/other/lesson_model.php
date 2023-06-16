<?php
function getContents($id)
{
    define('url2', 'http://localhost/University_WebTechnologies_Project/pages/api/categories/lessons/read.php?id=' . $id);
    $c = curl_init(); // initializam biblioteca
    curl_setopt($c, CURLOPT_URL, url2); // stabilim URL-ul serviciului
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true); // rezultatul cererii va fi disponibil ca șir de caractere
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false); // nu verificam certificatul digital
    $res = curl_exec($c); // executam cererea (se trimite via HTTP o cerere GET) 
    curl_close($c);
    $jsonFile = json_decode($res);
    return $jsonFile;
}
function returnContentAsArray($id)
{
    $jsonFile = (array) getContents($id);
    $result = null;
    $i = 0;
    foreach ($jsonFile as $instance) {
        foreach ($instance as $category) {
            $noJson = (array) $category;
            $result[$i][1] = $noJson['id_lesson'];
            $result[$i][0] = $noJson['id_content'];
            $result[$i][2] = unserialize($noJson['contentLesson']);
            $result[$i][3] = unserialize($noJson['contentType']);

            $i = $i + 1;
        }

    }
    return $result;
}
?>