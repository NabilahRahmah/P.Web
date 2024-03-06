<?php
//kode struktur kontrol nilai numerik
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf : B";
}elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf : C";
}elseif ($nilaiNumerik < 70){
    echo "Nilai huruf : D";
}

//tambah kode perhitungan jarak
echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br><br>";

//tambah struktur untuk perhitungan lahan
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br><br>";

//tambah data struktur kontrol perhitungan skor ujian
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br><br>";

//tambah data struktur kontrol perhitungan nilai siswa
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60){
        echo "Nilai : $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br><br>";

//perhitungan soal cerita rata rata nilai siswa
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
sort($nilaiSiswa);
$totalNilai = 0;
$length = count($nilaiSiswa);
for ($i = 2; $i < $length -2; $i++){
    $totalNilai += $nilaiSiswa[$i];
}
echo "Nilai rata rata Siswa: " . $totalNilai / ($length - 4);
echo "<br><br>";

//tambah file soal cerita perhitungan penjualan
$hargaProduct = 120000;
$pembelian = $hargaProduct;
$totalBayar = 0 ;

if ($pembelian > 100000){
    $totalBayar = $pembelian - ($pembelian * 0.2);
}

echo "Harga yang harus dibayar: $totalBayar";
echo "<br><br>";

//tambah file soal cerita perhitungan game dan pilihan ya/tidak 
$totalPoin = 560;
echo "Total skor pemain adalah: ($totalPoin) <br />";
echo "Apakah pemain mendapatkan hadiah tambahan? "
. ($totalPoin > 500 ? "Ya" : "Tidak") . "<br />";
echo "<br>";
?>