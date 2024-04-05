<?php 
    include '../config/config.php';  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/table.css">
    <title>Form Tabel Sederhana</title>
</head>
<body>
    <div class="data-all">
        <div class="data">
            <div class="data-in">
                <div class="content">
                    <div class="bar-title">
                        <h2 class="title">
                            Data Register
                        </h2>
                    </div>
                    <div class="item">
                        <div class="table">
                            <table>
                                <tr style="background-color:  rgba(59, 54, 54, 0.850); color: white;">
                                    <th width="40" style="font-weight:500;">No</th>
                                    <th width="120" style="font-weight:500;">Nama</th>
                                    <th width="120" style="font-weight:500;">Username</th>
                                    <th width="150" style="font-weight:500;">Password</th>
                                    <th width="150" style="font-weight:500;">Jenis Kelamin</th>
                                    <th width="120" style="font-weight:500;">Agama</th>
                                    <th width="250" style="font-weight:500;">Email</th>
                                    <th width="100" style="font-weight:500;">Edit</th>
                                </tr>
                                <?php 
                                $no = 1;
                                $mysqli = "SELECT * FROM siswa";
                                $qry = mysqli_query($connect, $mysqli);
                                while ($data = mysqli_fetch_array($qry)) {
                                ?>
                                <tr>
                                    <th style="font-weight: 500;"><?= $no++ ?></th>
                                    <th style="font-weight: 500;"><?= $data["nama"] ?></th>
                                    <th style="font-weight: 500;"><?= $data["username"] ?></th>
                                    <th style="font-weight: 500;"><?= $data["pass"] ?></th>
                                    <th style="font-weight: 500;"><?= $data["jenis_kelamin"] ?></th>
                                    <th style="font-weight: 500;"><?= $data["agama"] ?></th>
                                    <th style="font-weight: 500;"><?= $data["email"] ?></th>
                                <?php 
                                    $update = "SELECT * FROM siswa";
                                    $id = $data["no"];
                                ?>
                                    <th>
                                        <a href="../update.php?id=<?= $id ?>"><i style="cursor: pointer;" class="fa-solid fa-pencil"></i></a>
                                        <a href="../delete.php?id=<?= $id ?>"><i style="cursor: pointer;" class="fa-solid fa-trash"></i></a>
                                    </th>
                                </tr>
                                <?php } ?>
                            </table>
                            </div>
                            <div class="input">
                            <a href="../register.php">Tambah Data<i class="fa-solid fa-plus"></i></a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>