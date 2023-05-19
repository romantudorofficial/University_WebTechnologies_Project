<?php
function connect(){
    $mysql = new mysqli (
        'localhost', // locatia serverului (aici, masina locala)
        'root',       // numele de cont
        '',    // parola (atentie, in clar!)
        'project'   // baza de date
        );
    
    // verificam daca am reusit
    if (mysqli_connect_errno()) {
        die ('The connection failed...');
    }
    return $mysql;
}