<?php

// Fungsi 1 tanpa parameter
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Nabila<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

//memanggil fungsi yang sudah dibuat
// perkenalan();


//Fungsi 2 dengan parameter
// function perkenalan($nama, $salam){
//     echo $salam. ", ";
//     echo "Perkenalkan, nama saya " .$nama. "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// memanggil fungsi yang sudah dibuat
// perkenalan("Nabilah " , "Halo");

// echo "<hr>";

// $saya = "Nabilah";
// $ucapanSalam = "Selamat pagi";

// memanggil lagi
// perkenalan($saya, $ucapanSalam);


// Fungsi 3 dengan parameter default
//membuat fungsi
// function perkenalan ($nama, $salam = "Assalamualaikum") {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat perkenalan 
// perkenalan("Nabila","Hallo");
// echo "<hr>";
// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi tanpa mengisi parameter salam perkenalan 
// perkenalan($saya);


//Fungsi 4 Mengembangkan Nilai
// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;    
// }

// // isi sesuai dengan tahun lahir kalian
// echo "Umur saya adalah ". hitungUmur (2003, 2024). " tahun" 


// Fungsi 5 Memanggil fungsi dalam fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
$umur = $thn_sekarang-$thn_lahir; 
return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum") { 
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
   
    //memanggil fungsi laik
    echo "Saya berusia ". hitungUmur(2003, 2024)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
    
//memanggil fungsi perkenalan 
perkenalan("Nabilah");
?>