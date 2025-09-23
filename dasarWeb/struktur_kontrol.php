<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
echo "Nilai huruf: C";
} elseif ($nilaiNumerik <70) {
echo "Nilai huruf: D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
$jarakSaatIni += $peningkatanHarian;
$hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>";

$jumlahlahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahlahan; $i++) {
$jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
if ($nilai < 60) {
echo "Nilai: $nilai (Tidak lulus) <br>";
continue;
}
echo "Nilai: $nilai (Lulus) <br>";
}

$n1 = 85;
$n2 = 92;
$n3 = 78;
$n4 = 64;
$n5 = 90;
$n6 = 75;
$n7 = 88;
$n8 = 79;
$n9 = 70;
$n10 = 96;

$totalSemua = $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10;

$tertinggi1 = 96;
$tertinggi2 = 92;
$terendah1  = 64;
$terendah2  = 70;

$totalNilai = $totalSemua - ($tertinggi1 + $tertinggi2 + $terendah1 + $terendah2);

echo "Total nilai setelah mengabaikan 2 tertinggi dan 2 terendah adalah: $totalNilai";
echo "<br>";

$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.2 * $hargaProduk;
}

$hargaBayar = $hargaProduk - $diskon;

echo "Harga yang harus dibayar setelah diskon adalah: Rp $hargaBayar";
echo "<br>";

$poin = 620;

echo "Total skor pemain adalah: $poin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . ($poin > 500 ? "YA" : "TIDAK");
?>