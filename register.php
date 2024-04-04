<?php 
    include './config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Form Register Sederhana ||</title>
</head>
<body>
    <fieldset>
        <legend>Register</legend>
            <form action="" method="post">
                <label for="username"> Name :</label>
                <input type="text" name="nama" id="angka1" required>
                <br>
                <br>
                <label for="username"> Username :</label>
                <input type="text" name="user" id="angka2" required>
                <br>
                <br>
                <label for="username"> Email :</label>
                <input type="text" name="email" id="angka1" required>
                <br>
                <br>
                <label for="username"> Password :</label>
                <input type="Password" name="pass" id="angka2" required>
                <br>
                <br>
                <label for="username"> Jenis Kelamin :</label>
                <input type="radio" name="jeka" value="Laki-laki" >Laki - Laki
                <input type="radio" name="jeka" value="Perempuan">Perempuan
                <br>
                <br>
                agama :
                <select name="agama" id="#">
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Kristen Prostestan">Kristen Prostestan</option>
                    <option value="Kristen Katolik">Kristen Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
                <br>
                <br>
                <button type="submit" name="submit">input</button>
            </form>
    </fieldset>
    <?php 
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $user = $_POST['user'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $jeka = $_POST['jeka'];
            $agama = $_POST['agama'];
            
            $sql ="insert into siswa (nama, username, email, pass, jenis_kelamin, agama)
            values ('$nama', '$user', '$email', '$password', '$jeka', '$agama')";

            if(mysqli_query($connect, $sql)){
                echo"<script>
                        alert(\"berhasil\")
                    </script>";
            }else{
                echo"<script>
                        alert(\"gagal\")
                    </script>";
            }
        }?>
</body>
</html>