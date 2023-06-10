<?php
include_once '../../../db/connection.php';
function getFutureAdmins()
{
    $mysql = connect();
    if (!($rez = $mysql->query('select * from admin_requests'))) {
        die('A survenit o eroare la interogare');
    }
    $i = 0;
    $futureAdmin = null;
    while ($inreg = $rez->fetch_assoc()) {
        $futureAdmin[$i] = $inreg;
        $i++;
    }
    return $futureAdmin;
}
?>