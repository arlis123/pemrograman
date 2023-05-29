<?php
    include 'koneksi.php';

    $query = "SELECT * FROM mata_kuliah";
    $sql = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
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
    <nav class="navbar bg-body-tertiary" >
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <h1>SIAKAD</h1>
            Ujian Tengah Semester (UTS)
        </a>
        </div>
    </nav>
    <div class="container-fluid">
        <figure>
        <blockquote class="blockquote">
            <p class="mt-3">JAWABAN NO.1</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            MATA KULIAH<cite title="Source Title"></cite>
        </figcaption>
    </figure>
    <a href="index1.php" type="button" class="btn btn-secondary mb-3">No.2</a>
    <a href="index2.php" type="button" class="btn btn-secondary mb-3">No.3</a><br>
    <a href="kelola.php" type="button" class="btn btn-primary mb-3"> Tambah</a>
    <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kode Matakuliah</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($result = mysqli_fetch_assoc($sql)){
                ?>
                    <tr>
                        <td>
                            <?php echo $result['ID']; ?>
                        .</td>
                        <td>
                            <?php echo $result['nama']; ?>
                        </td>
                        <td>
                            <?php echo $result['kode_mata_kuliah']; ?>
                        </td>
                        <td>
                            <?php echo $result['deskripsi']; ?>
                        </td>
                        <td>
                            <a href="kelola.php?ubah=<?php echo $result['ID']; ?>" type="button" class="btn btn-success btn-sm"> Edit</a>
                            <a href="proses.php?hapus=<?php echo $result['ID']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('apakah anda yankin menghapus data tersebut ?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    
</body>
</html>