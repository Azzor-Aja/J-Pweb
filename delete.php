<?php 
    include'./config/config.php';
    $id = $_GET['id'];
    $no = "DELETE FROM siswa WHERE no = '$id'";
    $sql = mysqli_query($connect, $no);
    if ($sql) {
        echo 
        "<script>
            alert(\"Berhasil Menghapus Data\");
        </script>";
    }
    else {
        echo 
        "<script>
            alert(\"Gagal Menghapus Data\");
        </script>";
    }
?>