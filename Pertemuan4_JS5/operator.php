<?php
//file pertama operator perhitungan operator
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah  : {$hasilTambah} <br>";
echo "Hasil Kurang  : {$hasilKurang} <br>";
echo "Hasil Kali    : {$hasilKali} <br>";
echo "Hasil Bagi    : {$hasilBagi} <br>";
echo "Sisa Bagi     : {$sisaBagi} <br>";
echo "Hasil Pangkat : {$pangkat} <br>";

//file kedua operator perbandingan
echo "<br>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama            : {$hasilSama} <br>";
echo "Hasil Tidak Sama      : {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil     : {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar     : {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama : {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Kecil Sama : {$hasilLebihBesarSama} <br>";

//file tiga operator gerbang logika
echo "<br>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And       : {$hasilAnd} <br>";
echo "Hasil Or        : {$hasilOr} <br>";
echo "Hasil Not A     : {$hasilNotA} <br>";
echo "Hasil Not B     : {$hasilNotB} <br>";

//file empat operator perhitungan sama dengan
echo "<br>";
$tambahSama = $a += $b;
$kurangSama = $a -= $b;
$kaliSama = $a *= $b;
$bagiSama = $a /= $b;
$sisaBagiSama = $a %= $b;

echo "Hasil Tambah Sama     : {$tambahSama} <br>";
echo "Hasil Kurang Sama     : {$kurangSama} <br>";
echo "Hasil Kali Sama       : {$kaliSama} <br>";
echo "Hasil Bagi Sama       : {$bagiSama} <br>";
echo "Hasil Sisa Bagi Sama  : {$bagiSama} <br>";

//file lima operator identik dan tidak identik
echo "<br>";
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik         : {$hasilIdentik} <br>";
echo "Hasil Tidak Identik   : {$hasilTidakIdentik} <br>";

//file enam operator soal cerita restoran
echo "<br>";
$kursiRestoran = 45;
$kursiDitempatPelanggan = 28;
$sisaKursi = $kursiRestoran - $kursiDitempatPelanggan;
$persenKursi = ($sisaKursi / $kursiRestoran) * 100;

echo "<br>";
echo "Sisa kursi {$persenKursi}%";
?>