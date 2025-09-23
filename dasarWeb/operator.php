<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Variabel a: $a <br>";
echo "Variabel b: $b <br><br>";

echo "Hasil Penjumlahan (a + b) = $hasilTambah <br>";
echo "Hasil Pengurangan (a - b) = $hasilKurang <br>";
echo "Hasil Perkalian (a * b) = $hasilKali <br>";
echo "Hasil Pembagian (a / b) = $hasilBagi <br>";
echo "Sisa Bagi (a % b) = $sisaBagi <br>";
echo "Pangkat (a ** b) = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;


echo "Variabel a: $a <br>";
echo "Variabel b: $b <br><br>";

echo "a == b : " . ($hasilSama ? "true" : "false") . "<br>";
echo "a != b : " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "a < b : " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "a > b : " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "a <= b : " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "a >= b : " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Variabel a: " . ($a ? "true" : "false") . "<br>";
echo "Variabel b: " . ($b ? "true" : "false") . "<br><br>";

echo "a AND b : " . ($hasilAnd ? "true" : "false") . "<br>";
echo "a OR b : " . ($hasilOr ? "true" : "false") . "<br>";
echo "NOT a : " . ($hasilNotA ? "true" : "false") . "<br>";
echo "NOT b : " . ($hasilNotB ? "true" : "false") . "<br>";

echo "Variabel awal a: $a <br>";
echo "Variabel b: $b <br><br>";

$a += $b;
echo "Hasil a += b : $a <br>";
$a -= $b;
echo "Hasil a -= b : $a <br>";
$a *= $b;
echo "Hasil a *= b : $a <br>";
$a /= $b;
echo "Hasil a /= b : $a <br>";
$a %= $b;
echo "Hasil a %= b : $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Variabel a: $a<br>";
echo "Variabel b: $b<br><br>";

echo "a === b : " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "a !== b : " . ($hasilTidakIdentik ? "true" : "false") . "<br>";
echo "<br>";

$totalKursi = 45;
$kursiTerisi = 30;

$kursiKosong = $totalKursi - $kursiTerisi;
$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: $totalKursi <br>";
echo "Kursi terisi: $kursiTerisi <br>";
echo "Kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: $persenKosong% <br>";
?>