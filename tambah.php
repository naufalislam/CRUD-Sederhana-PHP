<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<a href="index.php">Kembali</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    //pengondisian untuk menjalankan perintah tambah data.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $usrname = $_POST['username'];
        $pwd = $_POST['password'];

        // import koneksi
        include_once("config.php");

        //melakukan validasi
        if($nama == ''){
            echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
        }else if($email == ''){
            echo "<h4 style='color:red'>Email Belum Di Masukkan !</h4>";
        }else if($usrname == ''){
            echo "<h4 style='color:red'>Username Belum Di Masukkan !</h4>";
        }else if($pwd == ''){
            echo "<h4 style='color:red'>Password Belum Di Masukkan !</h4>";
        }else{

            // query tmmbah data
        $result = mysqli_query($mysqli, "INSERT INTO user(nama,email,username,password) VALUES('$nama','$email','$usrname','$pwd')");

        // pemberitahuan sukses menambah data
        echo "Data berhasil ditambah. <a href='index.php'>Lihat data</a>";
        }
        

        
    }
    ?>
</body>
</html>