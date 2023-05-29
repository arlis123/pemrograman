<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $nidn = $_POST['nidn'];
            $jenjang_pendidikan = $_POST['jenjang_pendidikan'];

            $query = "INSERT INTO dosen VALUES(null, '$nama', '$nidn', '$jenjang_pendidikan')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index1.php");
                 //echo"data berhasil ditambahkan <a href='index.php'>[home]</a>";
            } else {
                echo $query;
            }
        }
        }
    if ($_POST['aksi'] == "edit"){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $nidn = $_POST['nidn'];
            $jenjang_pendidikan = $_POST['jenjang_pendidikan'];

            $query = "UPDATE dosen SET nama='$nama', nidn='$nidn', jenjang_pendidikan='$jenjang_pendidikan' WHERE id='$id';";

            $sql = mysqli_query($conn, $query);

            if ($sql){
                header("location: index1.php");
                
            }

    }

    if (isset($_GET['hapus'])){
        $dosen = $_GET['hapus'];
        $query = "DELETE FROM dosen WHERE id = '$dosen';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index1.php");
        } else {
            echo $query;
        }
    }
?>