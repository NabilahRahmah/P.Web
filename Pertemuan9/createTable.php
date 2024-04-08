<?php 
    $hostname = "localhost";
    $username = "root"; 
    $password = "";
    $database = "prakwebdb";
    $connect = mysqli_connect($hostname, $username, $password, $database);

    if ($connect) {
        echo "Koneksi ke MYSQL berhasil <br>";
    } else {
        echo "Koneksi ke MYSQL gagal <br>" . mysqli_connect_error();
    }

    //query tambah tabel user menggunakan fungsi musqli_query()
    $sql = "CREATE TABLE 'prakwebdb'.'user'
            ('id' INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            'username' VARCHAR(50) NOT NULL,
            'password' VARCHAR(50) NOT NULL,)";

    //query memasukkan ke tabel user menggunakan fungsi musqli_query()
    $sql = "INSERT INTO `user` (`id`, `username`, `password`) 
    VALUES (NULL, 'test123', 'test123')";

    if (mysqli_query($connect, $sql)) {
        echo "Table User berhasil dibuat";
    } else {
        echo "Table User gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>