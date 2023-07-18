<!DOCTYPE html>
<html>
<head>
    <title>PRODUCT</title>
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
        margin-left: 1240px;
        margin-top:-50px;
        padding-left:10px;
        }

       .cart1 img {
        height: 30px;
        width: 30px;
        margin-right: 45px;
        margin-top:25px;
        }


      .logo {
        height: 50px;
        width: 60x;
        margin-right: 10px;
        }

      .cart-container a{
        color:white;  
        margin-left: -100px;
        text-decoration:none;
      }

      
    
       .cart-container a:hover{
        color:black;
        }

        .cart1{
            display: flex;
            align-items: center;
            margin-left: 1200px;
            margin-top:-50px;
           padding-left:10px;
        }

        .cart1 button{
            border:none;
            background-color:transparent;
            margin-left:-100px;
        }

        .cart1 img:hover{
            background-color:rgba(0,0,204, 0.1);
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
        
       /* Gaya CSS untuk tata letak Bagian footer*/
        footer{
        font-family: 'Caprasimo', cursive;
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        text-align:center;
        margin-top:50px;
       }

       /* Gaya CSS untuk tampilan kotak produk */
       .produk-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
           
        }
        
        .produk-box {
            width: 200px;
            border: 5px solid #ccc;
            padding: 15px;
            border-radius:10px;
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            height:400px;
            align-items: center;
            flex-direction: column;
        }
        
        .produk-box img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        
        .produk-box h3 {
            font-size: 18px;
            margin-bottom: 15px;
            text-decoration:underline;
            padding-top:5px;
            font-family: 'Belanosima', sans-serif;
            
        }
        
        .produk-box p {
            margin:0;
            font-size: 13px;
            font-family: 'Belanosima', sans-serif;
           
    
        }

       
        
        /* CSS untuk tampilan halaman */
    .product {
      border: 0px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
    }
   
    
    /* CSS untuk modal box */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }
    
    .modal-content {
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
      margin: 10% auto;
      padding: 20px;
      border: 0px solid #888;
      width: 80%;
    }
    
    .modal-close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .produk-box .product button {
        background-color:	#4682B4;
        color:white;
        border:none;
        margin:10px;
        width:150px;
       border-radius:10px;
       text-align:center;
       margin-left:-10px;
    
    }

    .produk-box .product button:hover{
        background-color:rgba(0,0,204, 0.1);
    }
    .modal button{
        padding:10px;
        margin:10px;
        border-radius:15px;
        width:800px;
        align-items:center;
        margin-left:70px;
    }
    .modal button:hover{
        background-color:rgba(0,0,204, 0.1);
    }

    .modal h2{
        font-family:'Caprasimo', cursive;
        text-align:center;
        color:white;
        text-shadow: 0 0 5px #FF0000, 0 0 5px #0000FF;
        font-size:50px;

    }
    
    .modal ul{
        font-family:'Belanosima', sans-serif;
        font-size:20px;
    }

    .modal p{
        font-family: 'Belanosima', sans-serif;
        font-size:20px;
    }

    .product-box h4{
      font-size:9px;
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
 <a href="form login.php" style="margin-right: 110px; text-decoration:none;">Masuk</a>
    <a href="register.php">Daftar</a>
</div>
<div class="cart1">
    <button onclick="openCartModal()">
    <img id="cartImage" src="keranjang.png" alt="Keranjang"></button>
</header>

<script>function openCartModal() {
  // Mengambil elemen gambar berdasarkan ID
  var cartImage = document.getElementById("cartImage");
  
  // Mengubah atribut src untuk mengganti gambar dengan gambar keranjang yang berbeda
  cartImage.src = "keranjang.png";
  }
</script>

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
    <a class="nav-link"href="#">Review</a>
  </li>
</ul>

<div class="content">
        <div class="berjalan">
        <p>Selamat datang di LATRANSHOP, tempat terbaik untuk menemukan produk berkualitas,Selamat berbelanja! </p>
        </div>
</div>

    <div class="produk-container">
        <div class="produk-box">
            <img src="topi pria.png" alt="Produk 1">
            <div class="product">
            <h3>Topi Blackpanther</h3>
            <p>RP.105.000</p>
            <p>★★★★☆ (4.9/5)</p>
            <p>10RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <!--<button class="beli-button">Beli Sekarang</button>-->
            <button onclick="addToCart('Topi Hitam', 100000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="kacamata.png" alt="Produk 1">
            <div class="product">
            <h3>Kacamata GlamourGaze</h3>
            <p>RP.99.000</p>
            <p>★★★★☆ (4.8/5)</p>
            <p>12RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Kacamata', 70000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="baju pria.png" alt="Produk 1">
            <div class="product">
            <h3>Kemeja Trensetter</h3>
            <p>RP.150.000</p>
            <p>★★★★☆ (4.4/5)</p>
            <p>500+ terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Kemeja Sanglur', 65000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="baju wanita.png" alt="Produk 1">
            <div class="product">
            <h3>Blus Lengan Panjang</h3>
            <p>RP.275.000</p>
            <p>★★★★☆ (4.7/5)</p>
            <p>19RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Baju Tunik Premium', 75000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="tas wanita.png" alt="Produk 1">
            <div class="product">
            <h3>Tas Chidivha</h3>
            <p>RP.250.0000</p>
            <p>★★★★☆ (4.5/5)</p>
            <p>20RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Tas Shepora Premium', 102000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="tas pria.png" alt="Produk 1">
            <div class="product">
            <h3>Tas pria</h3>
            <p>RP.200.000</p>
            <p>★★★★☆ (4.8/5)</p>
            <p>25RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Tas Selendang ', 200000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="tas wanita.png" alt="Produk 1">
            <div class="product">
            <h3>Tas chidivha </h3>
            <p>RP.250.000</p>
            <p>★★★★☆ (4.3/5)</p>
            <p>13RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Dress Sharia Black', 250000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="sepatu wanita.png" alt="Produk 1">
            <div class="product">
            <h3>Sneakers Urbanstyle </h3>
            <p>RP.300.000</p>
            <p>★★★★☆ (4.2/5)</p>
            <p>16RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Sepatu Sneakers Premium', 300000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="sepatu pria.png" alt="Produk 1">
            <div class="product">
            <h3>Sepatu Sneakers </h3>
            <p>RP.200.000</p>
            <p>★★★★☆ (4.5/5)</p>
            <p>18RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Sepatu Sneakers Premium', 200000)">Add To Cart</button>
</div>
        </div>
        <div class="produk-box">
            <img src="celana pria.png" alt="Produk 1">
            <div class="product">
            <h3>Celana Classic Comfort </h3>
            <p>RP.189.000</p>
            <p>★★★★☆ (4.9/5)</p>
            <p>38RB + Terjual</p>
            <p>KOTA BANDUNG</p>
            <button onclick="addToCart('Celana Chino', 250000)">Add To Cart</button>
</div>
        </div>
   
    <!-- Modal box untuk menampilkan cart -->
    <div id="cartModal" class="modal">
      <div class="modal-content">
        <span class="modal-close" onclick="closeCartModal()">&times;</span>
        <h2>"Shopping Cart"</h2>
        <ul id="cartItems"></ul>
        <p id="totalPrice">Total Harga: $0</p>
        <button onclick="resetCart()">Reset Cart</button>
        <button onclick="checkout()">Checkout</button>
      </div>
    </div>
  </div>
  
  <script>
    // JavaScript untuk logika tambahkan ke dalam cart
    var cartItems = [];
    var totalPrice = 0;
    
    function addToCart(productName, price) {
      cartItems.push({ name: productName, price: price });
      totalPrice += price;
      alert("Barang Berhasil Di Masukan Ke Keranjang")
    }
    
    function resetCart() {
      cartItems = [];
      totalPrice = 0;
      updateCartModal();
    }
    
    function openCartModal() {
      var modal = document.getElementById("cartModal");
      modal.style.display = "block";
      updateCartModal();
    }
    
    function closeCartModal() {
      var modal = document.getElementById("cartModal");
      modal.style.display = "none";
    }
    
    function updateCartModal() {
      var cartList = document.getElementById("cartItems");
      var totalPriceElement = document.getElementById("totalPrice");
      
      // Bersihkan konten modal sebelum memperbarui
      cartList.innerHTML = "";
      
      // Tampilkan item cart yang sudah ditambahkan
      if (cartItems.length === 0) {
        var emptyCart = document.createElement("li");
        emptyCart.textContent = "Tidak ada item di cart.";
        cartList.appendChild(emptyCart);
      } else {
        for (var i = 0; i < cartItems.length; i++) {
          var listItem = document.createElement("li");
          listItem.textContent = cartItems[i].name + " (Rp. " + cartItems[i].price + ")";
          cartList.appendChild(listItem);
        }
      }
      
      // Perbarui total harga
      totalPriceElement.textContent = "Total Harga: Rp. " + totalPrice;
    }
    function checkout() {
      alert("Pesanan berhasil di Checkout");
      resetCart();
      updateCartModal();
    }
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <footer>(C)All Right Reserved by Latranshop</footer>
</body>
</html>