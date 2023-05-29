<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $program_studi = $_POST['program_studi'];

            $query = "INSERT INTO mahasiswa VALUES(null, '$nama', '$nim', '$program_studi')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index2.php");
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
            $nim = $_POST['nim'];
            $program_studi = $_POST['program_studi'];

            $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', program_studi='$program_studi' WHERE id='$id';";

            $sql = mysqli_query($conn, $query);

            if ($sql){
                header("location: index2.php");
                
            }

    }

    if (isset($_GET['hapus'])){
        $mata_kuliah = $_GET['hapus'];
        $query = "DELETE FROM mahasiswa WHERE id = '$mahasiswa';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index2.php");
        } else {
            echo $query;
        }
    }
?>