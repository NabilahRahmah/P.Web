<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiupload Gambar</title>
</head>
<body>
    <h2>Unggah Gambar</h2>
    <form action="proses_uploadGambar.php" method="POST" enctype="multipart/form-data">
        <input
            type="file"
            name="images[]"
            multiple="multiple"
            accept=".img, .png, .gif, .jpg, .jpeg">
        <input type="submit" value="Unggah">
</form>
</body>
</html>