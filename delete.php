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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Delete Sederhana</title>
</head>
<body>
    
</body>
</html>