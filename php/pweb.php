<?php 
    include '../config/config.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/pweb.css">
    <title>Document</title>
</head>
<body>
    <div class="data-all">
        <div class="data">
            <div class="data-in">
                <h2 class="title">
                    Data Register
                    <div class="garis"></div>
                </h2>
                <div class="table">
                    <table>
                        <tr>
                            <th width="40">No</th>
                            <th width="120">Nama</th>
                            <th width="120">Username</th>
                            <th width="150">Password</th>
                            <th width="150">Jenis Kelamin</th>
                            <th width="120">Agama</th>
                            <th width="250">Email</th>
                            <th width="70">Delete</th>
                            <th width="70">Update</th>
                        </tr>
                        <?php 
                        $no = 1;
                        $mysqli = "SELECT * FROM siswa";
                        $qry = mysqli_query($connect, $mysqli);
                        while ($data = mysqli_fetch_array($qry)) {
                        ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <th><?= $data["nama"] ?></th>
                            <th><?= $data["username"] ?></th>
                            <th><?= $data["pass"] ?></th>
                            <th><?= $data["jenis_kelamin"] ?></th>
                            <th><?= $data["agama"] ?></th>
                            <th><?= $data["email"] ?></th>
                        <?php 
                            $update = "SELECT * FROM siswa";
                            $id = $data["no"];
                        ?>
                            <th><a href="../delete.php?id=<?= $id ?>"><i style="cursor: pointer;" class="fa-solid fa-xmark"></i></a></th>
                            <th><a href="../index.php?id=<?= $id ?>"><i style="cursor: pointer;"  class="fa-solid fa-plus"></i></a></th>
                        </tr>
                        <?php } ?>
                    </table>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>