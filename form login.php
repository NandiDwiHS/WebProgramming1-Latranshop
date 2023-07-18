<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <style>
        /* Gaya CSS untuk tata letak dan tampilan container login */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;     
        }
        
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            background-color:transparent white;
            border-radius:20px;
            margin-top:170px;
           
        }
        
        .login-container h2 {
            margin-top: 0;
            
        }
        
        .logo-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            width:50px;
        }
        
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 50%;
            padding: 10px;
            border-radius:10px;
        }
        
        .form-group .logo-icon-small {
            width: 20px;
            height: 20px;
            margin-left: 5px;
        }
        
        .login-button {
            padding: 10px 20px;
            background-color: black;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration:none;
        }
        
        .login-button:hover{
            background-color:grey;
        }
    </style>
</head>

<body background="bg4.jpg">
    <div class="login-container">
        <h2>FORM L0GIN</h2>
        <form method="POST" action="ceklogin.php">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="username">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="password">
            </div>
            <button class="login-button" type="submit" id="btn-register" name="submit">Login</button>
            
            <a href="register.php" class="login-button">Register</a>
        </form>
    </div>
</body>
</html>