<?php
	require 'config.php';
	if(isset($_POST["submit"])){
		$name = $_POST["name"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirmPassword = $_POST["confirm-password"];
	    $role = $_POST["role"];
		$duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE ussername = '$username' OR email = '$email'");
		if(mysqli_num_rows($duplicate) > 0){
			echo "<script>alert('Username atau Email sudah terpakai)</script>";
		}
		else{
			if($password == $confirmPassword){
				$query = "INSERT INTO tb_user VALUES('','$name', '$username', '$email', '$password','$role')";
				mysqli_query($conn,$query);
				echo "<script>alert('Registrasi Berhasil');
								window.location.href ='form login.php';</script>";
				
			}
			else{
				echo "<script>alert('Password Tidak Cocok')</script>";
			}
		}
		
	}
	
	?>
