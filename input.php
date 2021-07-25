<?php
require 'fungsi.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Input Mahasiswa</title>
        <link href="style.css" rel="stylesheet">
    </head>
<body class="binput">
<header>
    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Menu</a>
                <div class="dropdown-content">
                    <a href="input.php">Input Mahasiswa</a>
                    <a href="login.php">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</header>
    <div class="container-i">
        <h3>Input Mahasiswa</h3>
        <form method="post">
            <label>Nama</label><br>
            <input name="nama" type="text"><br>
            <label>NIM</label><br>
            <input name="nim" type="text"><br>
            <label>Program Studi</label><br>
            <input name="prodi" type="text"><br>
            <button type="submit"class="btn btn-primary"name="kirim">Kirim</button><br>

        </form>
    </div>   
</body>
</html>