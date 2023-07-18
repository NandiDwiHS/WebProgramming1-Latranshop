<!DOCTYPE html>
<html>
<head>
    <title>REGISTRASI</title>
    <style>
        /* Gaya CSS untuk tata letak dan tampilan form */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            text-align:center;
            border-radius:30px;
            background-color:transparent black;
            background-color: rgba(0, 0, 0, 0.7);
            color:white;
        }
        
        h2 {
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            margin-left:80px;
        }
        
        .form-group label {
            display: block;
        }
        
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 70%;
            padding: 10px;
            border-radius:10px;
            text-align:center;
        }
        
        .form-button {
            text-align: center;
        }
        
        .form-button button {
            padding: 10px 20px;
            background-color: black;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration:none;
        }
        
        .form-button button:hover {
            background-color:grey;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .login-link a {
            color: white;
            text-decoration: none;
        }

        .login-link a:hover{
            color:red;
        }
        
        
      
    </style>
</head>

<body background="bg1.jpg">
    <div class="container">
        <h2>REGISTRATION FORM</h2>
        <form method="POST" action="daftar.php">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email"placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <input type="radio" id="role" name="role" value="admin">
                <label for="">Admin</label>
                <input type="radio" id="role" name="role" value="member">
                <label for="">Member</label>
            </div>
            <div class="form-button">
                <button type="submit" id="btn-register" name="submit">Register </button>
            </div>
        </form>
        <div class="login-link">
            <p>Sudah punya akun? <a href="form login.php">Login disini</a></p>
        </div>
    </div>
</body>
</html>