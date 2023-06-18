<?php
include_once '../db/getting_info.php';
function getUserInfo($email)
{
    $user = getId($email);
    if ($user != null && isActive($email)) {
        $user_more = getUser($email);
        $mysql = connect();

        $info = null;

        if (!($rez = $mysql->query('select * from user_info where id_user= ' . $user))) {
            die('A survenit o eroare la interogare');
        }
        while ($inreg = $rez->fetch_assoc()) {
            $info['firstName'] = $user_more['firstName'];
            $info['lastName'] = $user_more['lastName'];
            $info['email'] = $user_more['email'];
            $info['nationality'] = $inreg['nationality'] == "" ? 'nationality' : $inreg['nationality'];
            $info['countryResidence'] = $inreg['countryResidence'] == "" ? 'countryResidence' : $inreg['countryResidence'];
            $info['gender'] = $inreg['gender'] == "" ? 'gender' : $inreg['gender'];
            $info['occupation'] = $inreg['occupation'] == "" ? 'occupation' : $inreg['occupation'];
            $info['socialStatus'] = $inreg['socialStatus'] == "" ? 'social status' : $inreg['socialStatus'];
            $info['religion'] = $inreg['religion'] == "" ? 'religion' : $inreg['religion'];
            return $info;
        }
    } else {
        $info['firstName'] = 'firstName';
        $info['lastName'] = 'lastName';
        $info['email'] = 'email';
        $info['nationality'] = 'nationality';
        $info['countryResidence'] = 'countryResidence';
        $info['gender'] = 'gender';
        $info['occupation'] = 'occupation';
        $info['socialStatus'] = 'social status';
        $info['religion'] = 'religion';
        return $info;
    }
}

function checkSet($info)
{
    $check['firstName'] = $info['firstName'] == 'firstName' ? false : true;
    $check['lastName'] = $info['lastName'] == 'lastName' ? false : true;
    $check['email'] = $info['email'] == 'email' ? false : true;
    $check['nationality'] = $info['nationality'] == 'nationality' ? false : true;
    $check['countryResidence'] = $info['countryResidence'] == 'countryResidence' ? false : true;
    $check['gender'] = $info['gender'] == 'gender' ? false : true;
    $check['occupation'] = $info['occupation'] == 'occupation' ? false : true;
    $check['socialStatus'] = $info['socialStatus'] == 'social status' ? false : true;
    $check['religion'] = $info['religion'] == 'religion' ? false : true;
    return $check;
}
?>