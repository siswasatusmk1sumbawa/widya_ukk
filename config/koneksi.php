<?php

$hostname = "localhost";
$userdb = "root";
$passdb = "";
$namedb = "ukk_widya";

$koneksi = mysqli_connect($hostname,$userdb,$passdb,$namedb);
if ($koneksi) {
    echo "terhubung";
}else{
    echo "tidak terhubung";
}

?> 