<!-- <!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn-tambah">Tambah Anggota</a>
        <?php
        /*include('koneksi.php');
        $query = "SELECT * FROM anggota order by id desc";
        $result = mysqli_query($koneksi, $query);
        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            echo "<table>";
            echo "<tr><th>No</th><th>Nama</th><th>Jenis Kelamin</th><th>Alamat</th><th>No. Telp</th><th>Aksi</th></tr>";
            while ($row = mysqli_fetch_array($result)) {
                $kelamin = ($row["jenis_kelamin"] === 'L') ? 'Laki-Laki' : 'Perempuan';
                echo "<tr>
                      <td>" . $no++ . "</td><td>" . $row["nama"] . "</td>
                      <td>" . $kelamin . "</td><td>" . $row["alamat"] . "</td>
                      <td>" . $row["no_telp"] . "</td>
                      <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> |
                      <a href='#' onclick='konfirmasiHapus(" . $row["id"] . ", \"" . $row["nama"] . "\")'>Hapus</a></td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada data.";
        }
        mysqli_close($koneksi);
        */
        ?>
    </div>
    <script>
        function konfirmasiHapus(id, nama) {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data dengan Nama " + nama + "?");
            if (konfirmasi) {
                window.location.href = "proses.php?aksi=hapus&id=" + id;
            }
        }
    </script>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Data anggota</h2>
        <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
        <br><br>
        <?php
        include('koneksi.php');
        $query = "SELECT * FROM anggota order by id desc";
        $result = mysqli_query($koneksi, $query);
        ?>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis kelamin</th>
                    <th>Alamat</th>
                    <th>No telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /*$no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $kelamin = ($row["jenis_kelamin"] == 'L') ? "Laki-laki" : "Perempuan";
                    ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $row["nama"] ?>
                        </td>
                        <td>
                            <?= $kelamin ?>
                        </td>
                        <td>
                            <?= $row["alamat"] ?>
                        </td>
                        <td>
                            <?= $row["no_telp"] ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="edit.php?id=<?= $row["id"] ?>">Edit</a>
                            <a class="btn btn-danger" href='#' data-toggle='modal'
                                data-target='#hapusModal<?= $row["id"] ?>'>Hapus</a>
                        </td>
                    </tr>
                    <div class='modal fade' id='hapusModal<?= $row["id"] ?>' tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?= "Apakah anda yakin ingin menghapus data dengan nama " . $row['nama'] . "?" ?>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?= $row["id"] ?>">Hapus</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }*/
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->

<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTT-8">
    <meta ame="viewport" content="width=device-width, initial-scale-1.0">
    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity=
    "sha384-fnmDCqb11w1lj8lytjo7mOUStjsKC4pOpQbqy17RrhN7udi9RwhKkMHpvLbIG9Sr" crossorigin="anonymous">  
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Data Anggota</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php" style="color: #fff;">
        CRUD Dengan Ajax
    </a>
    </nav>
    <div class="container">
    <h2 align="center" style="margin: 30px;">Data Anggota</h2>
    
    <form method="post" class="form-data" id="form-data">
    <div class="row">
    <div class="col-sm-g">
    <div class="form-group">
        <label>Nama</label>
        <input type="hidden" name="id" id="id">
        <input type="text" name="nama" id="nama" class="form-control" required="true">
    </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label>Jenis Kelamin</label><br>
            <input type="radio" name="jenis_kelamin" id="jenkell" value="L" required="true"> Laki-lak-
            <input type="radio" name="jenis_kelamin" id="jenkel2" value="p"> Perempuan
        </div>
    </div>
</div>
<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
</div>
<div class="form-group">
    <label>No Telepon</label>
</div>
<div class="form-group">
    <label>No Telepon</label>
    <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
</div>
<div class="form-group">
    <button type="button" name="simpan" id="simpan" class="btn btn-primary">
<i class="fa fa-save"></i> Simpan
    </button>
</div>
</form>
<hr>
    <div class="data"></div>
</div>
<div class="text-center"> <?php echo date('Y'); ?> Copyright:
    <a href="https://google.com/"> Desain Dan Pemrograman Web</a>
</div>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

< <!-- DataTable -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> <
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //Mengirimkan Token Keamanan
        $.ajaxSetup({
            headers: {
                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $('.data').load("data.php");
    });
</script>
</body>
</html>