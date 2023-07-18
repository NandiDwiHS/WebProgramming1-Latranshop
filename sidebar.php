<link href='https://fonts.googleapis.com/css?family=Belanosima' rel='stylesheet'>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Belanosima', sans-serif;
    font-size: 18px;
    color:black;
}

.user-cart span{
    
    padding-right:3px; 
    padding-left:3px;  
    border-radius:10px; 
    font-size:18px;
    margin-left:-1.2rem;
}

/*********** Gaya Dasbor Admin **********/
  .card{
      padding:20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 8px 5px 5px #3B3131;
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
  }
    /************************** for sidebar ***********************************/

    /*sidebar menu */
  .sidebar {
      height: 100%; 
      width: 0; 
      position: fixed;
      z-index: 1; 
      top: 0;
      left: 0;
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%); 
      overflow-x: hidden;
      padding-top: 60px; 
      transition: 0.5s; 
    }

    /* The sidebar links */
    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 22px;
      color: black;
      display: block;
      transition: 0.3s;
    }
    
   
    .sidebar .side-header{
          margin-left: 30px;
          margin-bottom: 8px;
          color: black;
      }
    
    .sidebar a:hover {
      background-color: white;
    }

    /* Posisi dan gaya tombol tutup (pojok kanan atas)*/
    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 2px;
      font-size: 34px;
      margin-left: 50px;
    }

    /* Tombol yang digunakan untuk membuka sidebar*/
    .openbtn {
      font-size: 20px;
      cursor: pointer;
      padding: 10px 15px;
      border: none;
      background: rgb(238,174,202);
      border-radius:10px;
    }
    .openbtn:hover {
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%); 
    }

    /* Konten halaman gaya - gunakan ini jika Anda ingin mendorong konten halaman ke kanan saat Anda membuka navigasi samping */
    #main {
      transition: margin-left .2s; /* Jika Anda menginginkan efek transisi */
      padding: 20px;
    }

    /* Pada layar yang lebih kecil, dengan tinggi kurang dari 450px, ubah gaya sidenav (padding lebih sedikit dan ukuran font lebih kecil) */
    @media screen and (max-height: 450px) {
      .sidebar {padding-top: 15px;}
      .sidebar a {font-size: 18px;}
    }

     /************************ login dan mendaftar styling  ******************************/

   .card-container.card-account {
    max-width: 500px;
    padding: 30px 30px;
   }

  .btn {
     font-weight: 700;
     height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

  /*Komponen Kartu*/
.card-account{
  background-color: #ECDAC9;
  /* just in case there no content*/
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  margin-top: 40px;
  /* Bayangan dan batas bulat */
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}

/*
* Form styles
*/
.profile-name-card {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
}

.reauth-email {
  display: block;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
  direction: ltr;
  height: 44px;
  font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.form-signin .form-control:focus {
  border-color: #ab9787;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #8a7a6d;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #8a7a6d;
}

.btn.btn-signin {
  
  background-color: #584e46;
  padding: 2px;
  font-weight: 700;
  font-size: 16px;
  height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  border: none;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
  background-color: #a56a39;
}


.box {
  position: relative;
  background-color: #000;
}

.image {
  opacity: 1;
  display: block;
  max-width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
  object-fit: contain;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.box:hover .image {
  opacity: 0.3;
}

.box:hover .middle {
  opacity: 1;
}

.text {
  background-color: #584e46;
  color: #fff;
  font-size: 16px;
  padding: 6px;
  border-radius: 5px;
}

/* *******************  Keranjang untuk masuk Gaya ikon   ********************* */
.cart-login-btn{
  margin:5px;
  border-style: outset;
}
.cart-login-btn a i{
  padding: 10px;
  font-size:30px; 
  color:#584e46;              
}
.cart-login-btn a i:hover{  
  color: grey;
}


/* ****************************   footer  *************************** */
.footer-hover{
  color: white;
}

.footer-hover:hover{
  color: #ECDAC9;
  text-decoration: none;
}

    </style>
<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="logo billa.png" width="120" height="120"> 
    <h5 style="margin-top:10px;">Hello, Admin!!</h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:black">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Home</a>
    <a href="#customers"  onclick="showCustomers()" ><i class="fa fa-users"></i> Customers</a>
    <a href="#notification" onclick="showNotification()"><i class="fa fa-bell"></i> Notification</a>
    <a href="#category"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Category</a>
    <a href="#sizes"   onclick="showSizes()" ><i class="fa fa-th"></i> Sizes</a>
    <a href="#productsizes"   onclick="showProductSizes()" ><i class="fa fa-th-list"></i> Product Sizes</a>    
    <a href="#products"   onclick="showProductItems()" ><i class="fa fa-th"></i> Products</a>
    <a href="#orders" onclick="showOrders()"><i class="fa fa-list"></i> Orders</a>
    <a href="form login.php" onclick="return confirm('Apakah Anda yakin ingin keluar?') ? logout() : false;"><i class="fa fa-sign-out"></i> Logout</a>
    
  
  <!---->
</div>
 
<div id="main">
   <button class="openbtn" onclick="openNav()"><i class="fa fa-list"></i></button>
</div>


