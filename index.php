<?php
require 'fungsi.php';

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Daftar Mahasiswa Fakultas Teknik Industri</title>
    <link href="style.css" rel="stylesheet">
    </head>
<body class="bindex">
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
<div class="lyt-mhs">
    <br><br>
    <h2>Daftar Mahasiswa</h2><br>
    <table class="table-mhs" width="100%" cellspacing="0">
        <thead>
        <tr class="trr">
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Program Studi</th>
        </tr>
        </thead>
        <tbody class="tbd">
            <?php
                $ambildatamhs=mysqli_query($conn, "select * from mahasiswa");
                $i=1;
                while($data=mysqli_fetch_array($ambildatamhs)){
                    $no=$data['idmhs'];
                    $nama=$data['nama'];
                    $nim=$data['nim'];
                    $prodi=$data['prodi'];
                

            ?>
            <tr>
                <td><?=$i++;?></td>
                <td><?=$nama;?></td>
                <td><?=$nim;?></td>
                <td><?=$prodi;?></td>
            </tr>
            <?php
                };
            ?>
        </tbody>
    </table>
</div>
</body>
</html>