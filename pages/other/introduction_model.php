<?php
function getLessons($id)
{
    define('url', 'http://localhost/University_WebTechnologies_Project/pages/api/categories/read.php?id_cat=' . $id);
    $c = curl_init(); // initializam biblioteca
    curl_setopt($c, CURLOPT_URL, url); // stabilim URL-ul serviciului
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true); // rezultatul cererii va fi disponibil ca șir de caractere
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false); // nu verificam certificatul digital
    $res = curl_exec($c); // executam cererea (se trimite via HTTP o cerere GET) 
    curl_close($c);
    $jsonFile = json_decode($res);
    return $jsonFile;
}
function returnLessonsAsArray($id)
{
    $jsonFile = (array) getLessons($id);
    $result = null;
    $i = 0;
    foreach ($jsonFile as $instance) {
        $noJson = (array) $instance;

        $result[$i][1] = $noJson['id_lesson'];
        $result[$i][0] = $noJson['id_category'];
        $result[$i][2] = $noJson['lessonName'];
        $result[$i][3] = $noJson['difficulty'];

        $i = $i + 1;

    }
    return $result;
}
?>