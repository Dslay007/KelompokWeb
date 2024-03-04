<?php

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
   echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} else  if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
} 

echo "<br> <br>";

$jarakSaatIni = 0;
$jarakTarget= 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer";

echo "<br> <br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i < $jumlahLahan; $i++) { 
   $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

echo "<br> <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br> <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    } 

    echo "Nilai: $nilai (Lulus) <br>";
    
}

echo "<br> <br>";

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$rataNilai = 0;

for ($i=2; $i < count($nilai) - 2 ; $i++) { 
   $totalNilai += $nilai[$i];
}

$rataNilai = $totalNilai / (count($nilai) - 4);

echo "Rata - rata nilai : $rataNilai";


echo "<br> <br>";

$hargaProduk = 120000;
$diskon = 20;
$hargaBayar;

if ($hargaProduk > 100000) {
    $hargaBayar = $hargaProduk - (20/100 * $hargaProduk);
} 

echo "Harga Produk : $hargaProduk <br>";
echo "Dieskon : $diskon <br>";
echo "Harga Bayar : $hargaBayar <br>";

echo "<br> <br>";

$poin = 600;
$hadiah = ($poin > 500) ? "Ya" : "Tidak";

echo "Total skor pemain : $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan : $hadiah <br>"









?>