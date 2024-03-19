<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Pembuatan associative array di dalam PHP -->
    <?php
        $Dosen = [
            'nama' => 'Nabilah Rahmah Diyanah',
            'domisili' => 'Sidoarjo',
            'jenis_kelamin' => 'Perempuan'];
    
    echo "Nama : {$Dosen ['nama']} <br>";
    echo "Domisili : {$Dosen ['domisili']} <br>";
    echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
    ?>
</body>
</html>