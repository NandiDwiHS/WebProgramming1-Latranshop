<?php 

require 'config.php';

if (isset($_POST["submit"])) {
    $usernameEmail = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE ussername = '$usernameEmail' ");
    $row = mysqli_fetch_assoc($result);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            if ($password == $row["password"] && $row["role"] == "member") {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("Location: marketplace.php");
                exit();
            }
            elseif ($password == $row["password"] && $row["role"] == "admin") {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("Location: index.php");
                exit();
            }
            else {
                echo "<script>alert('Password salah');
                window.location.href ='form login.php';</script>";
            }
        } else {
            echo "<script>alert('Pengguna belum registrasi');</script>";
        }
    } else {
        echo "<script>alert('Terjadi kesalahan dalam query.');</script>";
    }
}
?>
