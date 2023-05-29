<!DOCTYPE html>
<?php
    include 'koneksi.php';

    $id ='';
    $nama ='';
    $kode ='';
    $deskripsi ='';

    if(isset($_GET['ubah'])){
        $id = $_GET['ubah'];
        $query = "SELECT * FROM mata_kuliah WHERE id = '$id';";
        $sql = mysqli_query( $conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $nama = $result['nama'];
        $kode = $result['kode_mata_kuliah'];
        $deskripsi = $result['deskripsi'];
        
        //var_dump($result);

        //die();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>
    <title>uts</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-5" >
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        Ujian Tengah Semester (UTS)
        </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php">
            <div class="col-sm-10">
                <input type="hidden" name="id" value="<?php echo $id;?>" id="id">
            </div>

        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input required  type="text" name="nama" class="form-control" id="nama" value="<?php echo $nama;?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kode" class="col-sm-2 col-form-label">Kode matakuliah</label>
            <div class="col-sm-10">
                <input required  type="text" name="kode_mata_kuliah"class="form-control" id="kode" value="<?php echo $kode;?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
            <div class="col-sm-10">
                <textarea required  class="form-control" name="deskripsi" id="deskripsi" rows="3"><?php echo $deskripsi;?></textarea>
            </div>
        </div>
        <div class="mb-3 row mt-4">
            <div class="col">
                <?php
                    if(isset($_GET['ubah'])){
                ?>
                <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                    simpan perubahan
                </button>
                <?php
                    } else {
                ?>
                <button type="submit" name="aksi" value="add" class="btn btn-primary">
                    Tambahkan
                </button>
                <?php
                    }
                ?>
                <a href="index.php" type="button" class="btn btn-danger">
                    Batal
                </a>
            </div>
        </div>
    </div> 
        </form>
        
</body>
</html>