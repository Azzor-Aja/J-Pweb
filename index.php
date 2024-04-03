<?php 
    include './config/config.php';
    $id = $_GET['id'];
    $siswa = "SELECT * FROM siswa WHERE no = '$id'";
    $sql = mysqli_query($connect, $siswa);
    $data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php if(!isset($id)) {?>
        <fieldset>
            <legend>Update</legend>
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
        <?php }  ?>

        <?php if (isset($id)) {  ?>
        <fieldset>
            <legend>Register</legend>
            <form action="" method="post">
                <label for="username"> Name :</label>
                <input type="text" name="nama" id="angka1" value="<?= $data ['nama']?>" required>
                <br>
                <br>
                <label for="username"> Username :</label>
                <input type="text" name="user" id="angka2"  value="<?= $data ['username']?>" required>
                <br>
                <br>
                <label for="username"> Email :</label>
                <input type="text" name="email" id="angka1"  value="<?= $data ['email']?>" required>
                <br>
                <br>
                <label for="username"> Password :</label>
                <input type="Password" name="pass" id="angka2"  value="<?= $data ['pass']?>" required>
                <br>
                <br>
                <label for="username"> Jenis Kelamin :</label>
                <input type="radio" name="jeka" value="Laki-laki  <?php if ($data['jenis_kelamin']== 'Laki-laki') echo 'checked'; ?>" >Laki - Laki
                <input type="radio" name="jeka" value="Perempuan  <?php if ($data['jenis_kelamin']== 'Perempuan') echo 'checked'; ?>">Perempuan
                <br>
                <br>
                agama :
                <select name="agama" id="#">
                    <option value="Islam <?php if ($data["agama"]== "Islam") echo "selected"; ?>">Islam</option>
                    <option value="Hindu <?php if ($data["agama"]== "Hindu") echo "selected"; ?>">Hindu</option>
                    <option value="Kristen Prostestan <?php if ($data["agama"]== "Kristen Prostestan") echo "selected"; ?>">Kristen Prostestan</option>
                    <option value="Kristen Katolik <?php if ($data["agama"]== "Kristen Katolik") echo "selected"; ?>">Kristen Katolik</option>
                    <option value="Budha <?php if ($data["agama"]== "Budha") echo "selected"; ?>">Budha</option>
                    <option value="Khonghucu <?php if ($data["agama"]== "Khonghucu") echo "selected"; ?>">Khonghucu</option>
                </select>
                <br>
                <br>
                <button type="submit" name="submit">input</button>
            </form>
        </fieldset>
    <?php } ?>

    <?php 
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $user = $_POST['user'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $jeka = $_POST['jeka'];
            $agama = $_POST['agama'];
            
            if (!isset ($id)) {
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
            }

            else if (isset ($id)) {
                $sql ="UPDATE siswa SET nama ='$nama', username ='$user', email ='$email', pass = '$password', jenis_kelamin = '$jeka', agama ='$agama' WHERE no = $id";
                $kondisi = mysqli_query($connect, $sql);

                if(mysqli_query($connect, $sql)){
                    echo"<script>
                            alert(\"berhasil\")
                        </script>";
                }else{
                    echo"<script>
                            alert(\"gagal\")
                        </script>";
                }                
            }
         }
        ?>
</body>
</html>