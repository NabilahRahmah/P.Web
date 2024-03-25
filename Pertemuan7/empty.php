<?php 
// Memeriksa apakah array $myArray kosong atau tidak terdefinisikan
$myArray = array(); // Array kosong
if (empty($myArray)) {
    echo "Array tidak terdefinisikan atau kosong.";
} else {
    echo "Array terdefinisikan dan tidak kosong.";
}

// Memeriksa apakah variabel $nonExistentVar tidak terdefinisikan atau kosong
if (empty($nonExistentVar)) {
    echo "<br/>Variabel tidak terdefinisikan atau kosong.";
} else {
    echo "Variabel terdefinisikan dan tidak kosong.";
}
?>