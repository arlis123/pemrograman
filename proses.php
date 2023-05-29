<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $kode = $_POST['kode_mata_kuliah'];
            $deskripsi = $_POST['deskripsi'];

            $query = "INSERT INTO mata_kuliah VALUES(null, '$nama', '$kode', '$deskripsi')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
                 //echo"data berhasil ditambahkan <a href='index.php'>[home]</a>";
            } else {
                echo $query;
            }
        }
        }
    if ($_POST['aksi'] == "edit"){
            //echo "Edit Data <a href='index.php'>[Home]</a>";
            //var_dump($_POST);
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $kode = $_POST['kode_mata_kuliah'];
            $deskripsi = $_POST['deskripsi'];

            $query = "UPDATE mata_kuliah SET nama='$nama', kode_mata_kuliah='$kode', deskripsi='$deskripsi' WHERE id='$id';";

            $sql = mysqli_query($conn, $query);

            if ($sql){
                header("location: index.php");
                
            }

    }

    if (isset($_GET['hapus'])){
        $mata_kuliah = $_GET['hapus'];
        $query = "DELETE FROM mata_kuliah WHERE id = '$mata_kuliah';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
        } else {
            echo $query;
        }
    }
?>