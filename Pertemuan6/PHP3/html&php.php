<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dalam HTML dan Sebaliknya</title>
</head>
<body>
    <p>Tanggal Hari ini : <?php echo date("d M Y")?></p>

    <?php
    echo '<html>';
    echo '<head><tittle>Cara02</tittle><head>';
    echo '<body>';
    echo '<p>Tanggal Hari ini : ' .date('d M Y'). '</p>';
    echo '</body>';
    echo '</html>';
    ?>
</body>
</html>