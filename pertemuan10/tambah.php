<?php 
require 'functions.php';
// koneksikan ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"])){
    // cek apakah data berhasil di tambahkan atau tidak
    if(tambah($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>;
            ";
    } else {
        echo  "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>;
        ";
    }
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tmbah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for='nama'>nama :</label>
                <input type='text' name='nama' id='nama' required >
            </li>
            <li>
                <label for='nim'>nim :</label>
                <input type='text' name='nim' id='nim' required>
            </li>
                <li><label for='email'>email :</label>
                <input type='text' name='email' id='email' required>
            </li>
            <li>
                <label for='prodi'>prodi :</label>
                <input type='text' name='prodi' id='prodi' required>
            </li>
            <li>
                <label for='gambar'>gambar :</label>
                <input type='text' name='gambar' id='gambar' required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>


    </form>
</body>
</html>