<?php
require 'fungsi.php';
if(isset($_POST['login'])){
    $id=$_POST['email'];
    $pass=$_POST['password'];
    $cekdata=mysqli_query($conn, "SELECT * FROM login where id='$id' and password='$pass'");
    $cek=mysqli_num_rows($cekdata);
    if($cek>0){
        header('location:index.php');
    }else{
        header('location:login.php');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <link href="style.css" rel="stylesheet">
    </head>
<body class="login">
    <div class="container">
    <h3>Login</h3>
    <form method="post">
        <label>Email</label><br>
        <input name="email" type="email"><br>
        <label>Password</label><br>
        <input name="password" type="password"><br>
        <button type="btn btn-primary" name="login">Login</button><br>
    </form>


    </div>

</body>

</html>