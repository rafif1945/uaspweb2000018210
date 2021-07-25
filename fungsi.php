<?php

$conn=mysqli_connect("localhost","root","","uaspweb");

if(isset($_POST['kirim'])){
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $prodi=$_POST['prodi'];

    $addmhs=mysqli_query($conn, "insert into mahasiswa(nama,nim,prodi) values('$nama','$nim','$prodi')");
    if($addmhs){
        header('location:input.php');
    }else{
        echo 'Gagal';
        header('location:input.php');
    }


}
if(isset($_POST['updatemhs'])){
    $idm=$_POST['idmhs'];
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $prodi=$_POST['prodi'];

    $update=mysqli_query($conn, "update mahasiswa set nama='$nama', nim='$nim', prodi='$prodi' where idmhs='$idm'");
    if($update){
        header('location:edit.php');
    }
    else{
        echo'Gagal';
        header('location:edit.php');
    }

}
?>