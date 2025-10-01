<?php
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam."<br>";
    echo "Perkenalkan, nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdan", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?>