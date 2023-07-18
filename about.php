<!DOCTYPE html>
<html>
<head>
    <title>ABOUT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Belanosima' rel='stylesheet'>
    <style>
       /* Gaya CSS untuk tata letak Bagian Navbar Dan Header */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:	#FFF0F5;
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
        
        /* Gaya CSS untuk tata letak Bagian footer */

        footer{
        font-family: 'Caprasimo', cursive;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        text-align:center;
        margin-top:50px;
       }

       /* Gaya CSS untuk tata letak Bagian isi konten about*/

    .container2 {
        display: flex;
        justify-content: center;
        
    }

    .image {
        margin: 10px;
    }

    .image img {
        width: 250px;
        height: 200px;
        border-radius:10px;
    }
     
    .container3 {
        display: flex;
        justify-content: space-around;
        padding:20px;
        margin:20px;
        border-radius:15px;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }

   .box1 {
      text-align: center;
      margin-bottom: 20px;
      margin-right:50px;
      
    }

   .image1 img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: #ccc;
      margin-left:15px;
    }

    .caption1 {
       margin-top: 10px;
       font-family: 'Belanosima', sans-serif;
       font-size:20px;
    }

    .container4 {
        display: flex;
        align-items: center;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        margin:20px;
        padding:15px;
        border-radius:20px;
    }

    .logo1 {
        margin-right: 10px;
        width: 450px;
        height: auto;
    }

    .caption {
        font-size: 18px;
        font-weight: bold;
    }
    
    .container4 h1{
        text-decoration:underline;
        text-align:center;
    }

    .container4 p{
        padding:15px;
        font-family: 'Belanosima', sans-serif;
    }

    .rating{
       padding:10px;
       margin:10px;
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
<a href="form login.php" style="margin-right: 90px;">Masuk</a>
    <a href="register.php">Daftar</a>
</div>
</header>

<ul class="nav nav-tabs" >
  <li class="nav-item">
    <a class="nav-link" href="marketplace.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
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

<div class="container2">
    <div class="image">
        <img src="model.jpg" alt="Gambar 1" >
    </div>
    <div class="image">
        <img src="model3.jpg" alt="Gambar 2">
    </div>
    <div class="image">
        <img src="model4.jpg" alt="Gambar 3">
    </div>
</div>

<div class="container3">
        <div class="box1">
            <div class="image1" >
            <img src="billa.jpeg">
        </div>
            <div class="caption1">
                <p>Nabilla Putri Sahara</p>
                <p>17211018</p>
                <p>Frontend</p>
            </div>
        </div>
        <div class="box1">
            <div class="image1">
            <img src="nanda.jpeg">
            </div>
            <div class="caption1">
                <p>Nanda Dwi Husna</p>
                <p>17213038</p>
                <p>Backend</p>
            </div>
        </div>
        <div class="box1">
            <div class="image1">
            <img src="nandi.jpeg">
            </div>
            <div class="caption1">
                <p>Nandi Dwi Husni</p>
                <p>17213039</p>
                <p>Backend</p>
            </div>
        </div>
        <div class="box1">
            <div class="image1">
            <img src="hadi1.jpeg">
            </div>
            <div class="caption1">
                <p>Hadi Mirojul Falah</p>
                <p>17211021</p>
                <p>Frontend</p>
            </div>
        </div>
    </div>

<div class="container4">
<img src="logo latranshop 1.png" alt="Logo" class="logo1">
<div class="caption">
<h1>LATRANSHOP</h1>
<p>Selamat datang di LATRANSHOP! Kami adalah toko mode yang menyediakan berbagai macam pilihan fashion terkini untuk memenuhi kebutuhan gaya Anda. Dengan dedikasi kami terhadap tren terbaru dan komitmen untuk memberikan kualitas terbaik, kami bangga menjadi tujuan utama bagi pelanggan yang mencari pakaian dan aksesori fashion yang stylish dan trendi.<br><br>

1.Pilihan Fashion Terkini
Di LATRANSHOP, kami menghadirkan beragam pilihan fashion terkini untuk pria dan wanita. Mulai dari pakaian, sepatu, tas,  Anda dapat menemukan semua yang Anda butuhkan untuk tampil modis dan trendy dari kepala hingga kaki. Kami selalu mengikuti tren fashion terbaru dan bekerja sama dengan merek-merek terkenal serta desainer lokal dan internasional untuk memastikan bahwa pelanggan kami selalu mendapatkan pilihan terbaik.<br><br>

2.Kualitas dan Keaslian Terjamin
Kami memahami betapa pentingnya kualitas dan keaslian produk fashion bagi pelanggan kami.<br><br>

3.Gaya untuk Semua Kesempatan
LATRANSHOP memiliki koleksi yang sesuai dengan setiap kesempatan. Kami menawarkan berbagai gaya mulai dari gaya klasik hingga yang sedang tren, sehingga Anda dapat mengekspresikan diri dan menggali kreativitas fashion Anda.<br><br>

4.Pengalaman Belanja yang Menyenangkan
Di LATRANSHOP, kami menciptakan lingkungan belanja yang nyaman dan ramah pelanggan, di mana Anda dapat dengan mudah menjelajahi koleksi kami tanpa tekanan. <br><br>

5.Layanan Pelanggan yang Responsif
Kepuasan pelanggan adalah prioritas utama kami. Kami menyediakan layanan pelanggan yang responsif dan membantu.<br><br>

Jadi, jika Anda mencari tempat untuk menemukan pilihan fashion terkini yang berkualitas dan trendi, Latranshop adalah jawabannya. Bergabunglah dengan kami di situs web kami dan temukan gaya Anda sendiri dengan produk-produk terbaik dari Latranshop.</p>
</div>
</div>

<div class="rating">
<div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped" style="width: 10%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-success" style="width: 25%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-info" style="width: 50%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-warning" style="width: 75%"></div>
</div>
<div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped bg-danger" style="width: 100%"></div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <footer>(C)All Right Reserved by Latranshop</footer>
</body>
</html>