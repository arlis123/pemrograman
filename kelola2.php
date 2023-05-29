<!DOCTYPE html>
<?php
    include 'koneksi.php';

    $id ='';
    $nama ='';
    $nim ='';
    $program_studi ='';

    if(isset($_GET['ubah'])){
        $id = $_GET['ubah'];
        $query = "SELECT * FROM mahasiswa WHERE id = '$id';";
        $sql = mysqli_query( $conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $nama = $result['nama'];
        $nim = $result['nim'];
        $program_studi = $result['program_studi'];
        
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
        <form method="POST" action="proses2.php">
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
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input required  type="text" name="nim"class="form-control" id="nim" value="<?php echo $nim;?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="program_studi" class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <input required  type="text" name="program_studi" class="form-control" id="program_studi" value="<?php echo $program_studi;?>">
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
                <a href="index2.php" type="button" class="btn btn-danger">
                    Batal
                </a>
            </div>
        </div>
    </div> 
        </form>
        
</body>
</html>