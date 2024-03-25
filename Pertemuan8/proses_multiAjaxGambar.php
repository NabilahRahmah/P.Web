<?php
    $targetDirectory = "images/";
    if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
    }
if (isset($_FILES['images'])) {
    if ($_FILES['images']['name'][0]) {
    $imagesAmount = count($_FILES['images']['name']); 
    $extensions = array('jpg', 'png', 'jpeg', 'gif');
    
    for ($i=0; $i < $imagesAmount; $i++) {
        @$file_ext = strtolower("". end(explode(".", $_FILES['images']['name'][$i])). ""); //Only variables can be passed by reference
        if (in_array($file_ext, $extensions)) {
            $errors = array();
            $file_name = $_FILES['images'] ['name'][$i];
            $file_size = $_FILES['images']['size'][$i];
            $file_tmp = $_FILES['images']['tmp_name'][$i];
            $file_type = $_FILES['images'] ['type'][$i];
            if ($file_size > 2097152) {
                $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB";
            }
            if (empty($errors)) {
                move_uploaded_file($file_tmp, $targetDirectory . $file_name);
                echo "Berhasil mengunggah $file_name <br/>";
            } else {
                echo implode(", ", $errors);
            } 
        }else {
            echo "Gagal mengunggah file " . $_FILES['images']['name'][$i].", Ekstensi file yang diperbolehkan hanya JPG, PNG, JPEG, GIF <br/>";
        }
        }
    }
}
?>