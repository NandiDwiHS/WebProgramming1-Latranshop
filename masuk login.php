<?php

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'Nabilla'AND $password == 'latrans21'){
        echo "<script>alert('Login Berhasil');</script>";
        include ('Beranda.php');
        exit;
    }else{
        echo "<script>alert('username dan password salah');</script>";

    }
    
}



?>







