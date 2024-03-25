<?php
    //jika belum memiliki folder maka dibuatkan sekalian direktori dari image
    $targetDirectory = "images/";
    if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
    }
    if ($_FILES['images']['name'][0]) {
        $totalFiles = count($_FILES['images']['name']);
        for ($i=0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['images']['name'][$i];
            $targetFile = $targetDirectory . $fileName;
        if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)){
            echo "Gambar berhasil diunggah. <br/>";
        } else {
            echo "Gagal mengunggah gambar <br/>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>