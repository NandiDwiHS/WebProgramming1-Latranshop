<!DOCTYPE html>
<html>
<head>
    <title>REVIEW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Belanosima' rel='stylesheet'>
    <style>
    /* Gaya CSS untuk tata letak Bagian Navbar Dan Header */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("bg1.jpg");
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
           color:white;     
        }
        
        .berjalan p {
           animation: marquee 25s linear infinite;
           height: 2px;
        }
        
        
       @keyframes marquee {
       0% { transform: translateX(100%); }
       100% { transform: translateX(-100%); }
       }
       
    

/* Gaya CSS untuk tata letak Bagian isi konten Review */
.box {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  border: 0px solid #ccc;
  border-radius: 8px;
  
  
}

.animated-icon {
  text-align: center;
  margin-bottom: 20px;

}

.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 2fr);
  grid-gap: 20px;
  
}

.grid-item {
    text-align: center;
  border: 3px solid black;
  border-radius: 8px;
  padding: 20px;
  height:300px;
  background: rgb(238,174,202);
  background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}

.product-image {
  width: 80%;
  height: auto;
  margin-bottom: 10px;
}

.rating {
  color: gold;
  font-size: 20px;
  margin-top: -17px;

}

.star {
  display: inline-block;
}

/* Animasi CSS contoh untuk ikon */
@keyframes example-animation {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.animated-icon {
  animation: example-animation 2s linear infinite;
}

/* Gaya CSS untuk tata letak Bagian footer*/
footer{
          font-family: 'Caprasimo', cursive;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        text-align:center;
        margin-top:100px;
       }
       
    .grid-item h4{
        font-family: 'Belanosima', sans-serif;
    }

    .grid-item p{
        font-family: 'Belanosima', sans-serif;
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
    <a class="nav-link"href="#">Review</a>
  </li>
</ul>
<div class="berjalan">
        <p>Selamat datang di LATRANSHOP, tempat terbaik untuk menemukan produk berkualitas,Selamat berbelanja! </p>
        </div>
</div>

<div class="box">
  <div class="animated-icon"></div>
  <div class="grid-container">
    <div class="grid-item">
      <img src="baju wanita.png" alt="Product Image 1" class="product-image">
      <h4>Baju Wanita</h4>
      <p>Sangat Bagus, Kualitas terbaik</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <div class="grid-item">
      <img src="baju pria.png" alt="Product Image 1" class="product-image">
      <h4>Baju Pria</h4>
      <p>Bahan Adem, Elegan</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <div class="grid-item">
      <img src="tas wanita.png" alt="Product Image 1" class="product-image">
      <h4>Tas Wanita</h4>
      <p>Sangat Bagus, Praktis</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <div class="grid-item">
      <img src="tas pria.png" alt="Product Image 1" class="product-image">
      <h4>Tas Pria</h4>
      <p>Praktis,Kualitas Terbaik</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <div class="grid-item">
      <img src="sepatu wanita.png" alt="Product Image 1" class="product-image">
      <h4>Sepatu Wanita</h4>
      <p>Kualitas Sangat Baik</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <div class="grid-item">
      <img src="kacamata.png" alt="Product Image 1" class="product-image">
      <h4>Kacamata</h4>
      <p>Kualitas Sangat Baik,Elegan</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <div class="grid-item">
      <img src="topi pria.png" alt="Product Image 1" class="product-image">
      <h4>Topi Pria</h4>
      <p>Kualitas Sangat Baik</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <div class="grid-item">
      <img src="celana pria.png" alt="Product Image 1" class="product-image">
      <h4>Celana Pria</h4>
      <p>Sangat Bagus, Nyaman </p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>

    <div class="grid-item">
      <img src="sepatu pria.png" alt="Product Image 10" class="product-image">
      <h4>Sepatu Pria</h4>
      <p>Sangat Bagus,elegan</p>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>
  </div>
</div>


   
<footer>(C)All Right Reserved by Latranshop</footer>   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>