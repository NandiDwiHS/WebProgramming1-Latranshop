<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
<style>
.navbar {
    background-color: #3B3131;
    background: rgb(238,174,202);
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}

.navbar header {
    padding: 20px;
    text-align: center;
    font-family: 'Caprasimo', cursive;
    color:white;
    text-shadow: -1px 0 black, 0 5px black, 5px 0 black, 0 -1px black;
    margin-top: 5px; 
    margin-left:400px;
    
}

.navbar1 img{
    float: left;
    width:80px;
    height:80px;
    margin-left:-555px;
}
</style>

 <nav  class="navbar">
 <header>
        <h1>Admin Latranshop</h1>
</header>
    <a class="navbar1" href="./index.php">
        <img src="logo billa.png">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:black;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            
            <?php
        } ?>
    </div>  
</nav>
