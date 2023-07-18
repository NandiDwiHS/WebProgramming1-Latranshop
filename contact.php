<!DOCTYPE html>
<html>
<head>
    <title>CONTACT</title>
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

        .container .search{
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

/* Gaya CSS untuk tata letak Bagian isi konten kontak */

.contact-box {
  display: flex;
  align-items: flex-start;
  max-width: 800px;
  margin:20px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  margin-left:350px;
  background: rgb(238,174,202);
  background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
  align-items:center;
  margin-left:245px;
}

.map-container {
  flex: 1;
}

.contact-info {
  flex: 1;
  padding-left: 20px;
}

.contact-info h2 {
  text-align: center;
  margin-bottom: 20px;
}

.inputBox {
  margin-bottom: 10px;
}

.map{
        width: 400px;
        height:350px;
    }

input[type="text"],
input[type="email"],
input[type="tel"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.submit-button {
  width: 100%;
  padding: 8px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.submit-button:hover {
  background-color: #45a049;
}

h2{
    font-family: 'Caprasimo', cursive;
    color: white;
  text-shadow: -1px 0 black, 0 3px black, 3px 0 black, 0 -1px black;
}

  /* Gaya CSS untuk tata letak Bagian footer*/ 
footer{
        font-family: 'Caprasimo', cursive;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        text-align:center;
        margin-top:100px;
}
       
</style>
</head>

<body>
<header>
<div class="container">
        <img src="logo latranshop 1.png" alt="Logo" class="logo">
        <h1 style="display: inline-block;">LATRANSHOP</h1>
        <form style="display: inline-block;">
            <input type="text" placeholder="Cari Barang Disini" name="search" class="search">
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
    <a class="nav-link" href="about.php">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="product.php">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact</a>
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



<div class="contact-box">
  <div class="map-container">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118686.73421714892!2d107.5828135503373!3d-6.91746378963133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd64be875e8b303%3A0x5a81ff54d5bc3ad4!2sBandung%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1626151246705!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <div class="contact-info">
    <h2>CONTACT US</h2>
    <form>
      <div class="inputBox">
        <input type="text" name="name" placeholder="Name">
      </div>
      <div class="inputBox">
        <input type="email" name="email" placeholder="Email">
      </div>
      <div class="inputBox">
        <input type="tel" name="number" placeholder="Number">
      </div>
      <input type="submit" value="Contact Now" class="submit-button">
    </form>
  </div>
</div>
<footer>(C)All Right Reserved by Latranshop</footer>   



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

   
</body>
</html>