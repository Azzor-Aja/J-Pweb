<?php 
    include '../config/config.php';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th width="20">No</th>
        <th width="60">Nama</th>
        <th width="60">Username</th>
        <th width="60">Email</th>
        <th width="60">Password</th>
        <th width="60">Jenis Kelamin</th>
        <th width="60">Agama</th>
        <th width="30">Delete</th>
        <th width="30">Update</th>
    </tr>

    <?php 
     $no = 1;
     $mysqli = "SELECT * FROM siswa";
     $qry = mysqli_query($connect, $mysqli);
    while ($data = mysqli_fetch_array($qry)) {
    ?>
    <tr>
        <th><?= $data["no"] ?></th>
        <th><?= $data["nama"] ?></th>
        <th><?= $data["username"] ?></th>
        <th><?= $data["email"] ?></th>
        <th><?= $data["password"] ?></th>
        <th><?= $data["jenis_kelamin"] ?></th>
        <th><?= $data["agama"] ?></th>
        <th><i style="cursor: pointer;" class="fa-solid fa-trash"></i></i></th>
        <?php 
        $update = "SELECT * FROM siswa";
        $id = $data["no"];
        ?>
        <th><a href="../index.php?id= <?php echo $id ?>"><i style="cursor: pointer;"  class="fa-solid fa-plus"></i></a></th>
    </tr>
    <?php } ?>


    </table>
</body>
</html>