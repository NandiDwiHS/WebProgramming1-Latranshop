<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href='https://fonts.googleapis.com/css?family=Belanosima' rel='stylesheet'>
    <style>
        /* Gaya CSS untuk tata letak Bagian Navbar Dan Header */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
        }
        
        header {
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            color: #fff;
            padding: 10px;
        }
        
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }
        
        h1 {
            margin: 0;
            font-family: 'Caprasimo', cursive;
            color: white;
           text-shadow: 1px 4px 2px salmon, 0 0 25px black, 0 0 5px salmon; 
        }

        .container input{
            width:500px;
            height:35px;
            margin:5px;
            padding:10px;
        }
        .container button{
            height:35px;
            margin-left:525px;
            display:flex;
            margin-top:-38px;
            
        }

        .cart-container {
        display: flex;
        align-items: center;
        margin-left: 1200px;
        margin-top:-50px;
        padding-left:10px;
    }

       .cart-icon {
        height: 30px;
        width: 30px;
        margin-right: 5px;
    }

      .logo {
        height: 50px;
        width: 60x;
        margin-right: 10px;
    }
      .cart-container a{
        color:white;
        margin-left: -80px;
        text-decoration:none;
        display:flex;
        
      }


    .cart-container a:hover{
        color:black;
    }
        /* Gaya CSS untuk tata letak dan tampilan navbar */
       /* .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }*/
        
        .navbar-brand {
            margin: 0;
        }
        

        .nav {
            display: flex;
            justify-content: center;
            background-color:	#a6b8e3;
            padding: 10px;
            
        }
        
        .nav-item {
            margin-right: 10px;
        }
        
        .nav-link {
            padding: 10px 20px;
            color: #333;
            text-decoration: none;
            border: 1px solid transparent;
            border-radius: 5px;
        }
        
        
        .nav-link:hover {
            background-color: #333;
            color: #fff;
        }
        
       
        /* Animasi CSS contoh untuk Tulisan Berjalan */
        .berjalan {
           padding: 10px;
           overflow: hidden;
           font-family: 'Caprasimo', cursive;
           margin-top:-10px;            
        }
        
        .berjalan p {
           animation: marquee 25s linear infinite;
           height: 2px;
        }
        
        
        @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
        }

        /* Gaya CSS untuk Slider */
        .slider img{
            float: none;
            width:750px;
            height:350px;
        }

         /* Gaya CSS untuk tata letak dan tampilan container kategori */
        .kategori-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
           
        }
        
        .kategori-box {
            width: 200px;
            height: 200px;
            margin: 10px;
            border: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            border-radius:10px;
            
        }
        
        .kategori-box img {
            max-width: 1350px;
            max-height: 140px;
            margin-bottom: 10px;
        }
        
        .kategori-box p {
            text-align: center;
            font-family: 'Belanosima', sans-serif;
    
        }

        .kategori-box:hover{
            background-color: #333;
            color: #fff;
           
        }

        /* Gaya CSS untuk tata letak bagian footer */
        footer{
          font-family: 'Caprasimo', cursive;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        text-align:center;
        margin-top:50px;
       }
    </style>
</head>

<body>
<header>
    
    <div class="container">
        <img src="logo latranshop 1.png" alt="Logo" class="logo">
        <h1 style="display: inline-block;">LATRANSHOP</h1>
        <form style="display: inline-block;">
            <input type="text" placeholder="Cari Barang Disini" name="search" >
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="cart-container">
    <a href="form login.php" onclick="return confirm('Apakah Anda yakin ingin keluar?') ? logout() : false;"><i class="fa fa-sign-out"></i> Logout</a>
    </div>
</header>

<ul class="nav nav-tabs" >
  <li class="nav-item">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="product.php">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"href="review.php">Review</a>
  </li>
</ul>

<div class="content">
        <div class="berjalan">
        <p>Selamat datang di LATRANSHOP, tempat terbaik untuk menemukan produk berkualitas,Selamat berbelanja! </p>
        </div>
</div>
   
    <div class="slider" >
        <div>
            <center>
            <img src="slide 1.jpg" >
            </center>
        </div>
        <div>
            <center>
            <img src="bg1.jpg">
            </center>
        </div>
        <div>
            <center>
            <img src="slide 2.jpg">
            </center>
        </div>
        <div>
            <center>
            <img src="girl.1.jpg">
            </center>
        </div>
        <div>
            <center>
            <img src="slide 4.jpg">
            </center>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto:true,
            })
        })
    </script>

<div class="kategori-container">
   
        <div class="kategori-box">
            <img src="baju pria.png" alt="Baju Pria">
            <p>Baju Pria</p>
        </div>
        <div class="kategori-box">
            <img src="celana pria.png" alt="Celana Pria">
            <p>Celana Pria</p>
        </div>
        <div class="kategori-box">
            <img src="dress.png" alt="Dress Wanita">
            <p>Dress Wanita</p>
        </div>
        <div class="kategori-box">
            <img src="baju wanita.png" alt="Baju Wanita">
            <p>Baju Wanita</p>
        </div>
        <div class="kategori-box">
            <img src="topi pria.png" alt="Topi Pria">
            <p>Topi Pria</p>
        </div>
        <div class="kategori-box">
            <img src="sepatu pria.png" alt="Sepatu Pria">
            <p>Sepatu Pria</p>
        </div>
        <div class="kategori-box">
            <img src="sepatu wanita.png" alt="Sepatu Wanita">
            <p>Sepatu Wanita</p>
        </div>
        <div class="kategori-box">
            <img src="kacamata.png" alt="Kacamata">
            <p>Kacamata</p>
        </div>
        <div class="kategori-box">
            <img src="tas pria.png" alt="Tas Pria">
            <p>Tas Pria</p>
        </div>
        <div class="kategori-box">
            <img src="tas wanita.png" alt="Tas Wanita">
            <p>Tas Wanita</p>
        </div>
    </div>

    <footer>(C)All Right Reserved by Latranshop</footer>
</body>
</html>