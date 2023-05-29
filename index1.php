<?php
    include 'koneksi.php';

    $query = "SELECT * FROM dosen";
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
            <p class="mt-3">JAWABAN NO.2</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            DOSEN<cite title="Source Title"></cite>
        </figcaption>
    </figure>
    <a href="index.php" type="button" class="btn btn-secondary mb-3">No.1</a>
    <a href="index2.php" type="button" class="btn btn-secondary mb-3">No.3</a><br>
    <a href="kelola1.php" type="button" class="btn btn-primary mb-3"> Tambah</a>
    <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIDN</th>
                    <th>Jenjang Pendidikan</th>
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
                            <?php echo $result['nidn']; ?>
                        </td>
                        <td>
                            <?php echo $result['jenjang_pendidikan']; ?>
                        </td>
                        <td>
                            <a href="kelola1.php?ubah=<?php echo $result['ID']; ?>" type="button" class="btn btn-success btn-sm"> Edit</a>
                            <a href="proses1.php?hapus=<?php echo $result['ID']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('apakah anda yankin menghapus data tersebut ?')">Hapus</a>
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