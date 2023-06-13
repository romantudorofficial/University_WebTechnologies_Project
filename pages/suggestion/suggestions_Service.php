<?php
    include '../../db/connection.php';

    function getAvailableCategoriesService() {
        $mysql = connect();
        if (!($rez = $mysql->query("SELECT categoryName from categories"))) {
            return false;
        }
        $i = 1;
        while ($inreg = $rez->fetch_assoc()) {
            $categories[$i] = $inreg["categoryName"];
            $i = $i + 1;
        }
        return $categories;
    }

?>