<?php

// Membalik String  menggunakan perintah strrev().
$pesan = "Saya arek Sidoarjo";
echo strrev($pesan) . "<br>";

// Membalik String 2
$pesan = "Saya arek Sidoarjo";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";

?>