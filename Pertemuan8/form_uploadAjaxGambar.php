<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_multiAjaxGambar.php" method="POST" id="upload-form" enctype="multipart/form-data">
    <input type="file" name="images[]" multiple="multiple" id="image">
    <input type="submit" name="submit" value="Unggah">
    </form>
<div id="status"></div>

<script>
    $(document).ready(function() {
    $('#upload-form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'proses_multiAjaxGambar.php',
            data: formData,
            cache: false,
            contentType: false,
            processData:false,
            success:function(response) {
                $('#status').html(response);
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah gambar.');
            }
        });
    })
});
</script>
</body>
</html>