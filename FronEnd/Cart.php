<?php
    require_once '../PagesController/LoginCheck.php';
    require_once '../PagesController/CartController.php';
    $cc=new CartController();
    $cc->checkIsSet();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Menu</title> <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="css/Cart1.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="javascript.js"></script>
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        
        
        <link rel="stylesheet" type="text/css" href="css/Fontawesome/css/all.min.css">
           <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">
        
    </head> 
    <body style="background: url(https://i.pinimg.com/236x/5e/99/c0/5e99c0b362c9edeed865ebc91dd59efc.jpg); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover">
                <head>
        <meta charset ="utf-8">
        <title>Home</title>
                    
        <link rel="icon" type="image/png" href="img/logo.png" sizes="100x94" />
        <link rel="stylesheet" type="text/css" href="css/style4.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <style>
                    </style>              
    </head> 
    <body style="background: url(https://i.pinimg.com/236x/5e/99/c0/5e99c0b362c9edeed865ebc91dd59efc.jpg); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover">
        
                    <!--Header-->
        <header>
        <div class="main-top-header">
            <div class="top-header">
                <div class="logo">
                    <a href="Home.htm">
                    <img src="img/logo.png" img title="Home">
                    </a>
                        </div>
                    <div class="wrap">
                  <input type="search" class="searchTerm" 
                         placeholder="Search">
                  <i style="    box-sizing: border-box;padding: 10px; width: 42.5px; height: 42.5px; position: absolute; top: 0; right: 0; border-radius: 50%; color: crimson; text-align: center; font-size: 1.2em; transition: all 1s" class="fa fa-search"></i>
                </div>
                        <div class="Top">
                    <ul>
                        
                        <li>
                            <span style="text-transform: uppercase; text-decoration: none; color:crimson; font-size: 600">Welcome :
             
                                <i style="color:white" class="fas fa-user"></i> <i style="text-decoration: none; color:white; font-size: 300"><?php  echo $_SESSION['usName'];?></i>
                             </span>
                        <a href="Profile.php">
                            <span class="lnr lnr-user"></span>
                            </a>
                            <a  href="Profile.php">Profile</a> 
                        </li> 
                        <li>
                            <a href="Cart.php">
                            <span class="lnr lnr-cart"></span>
                            </a>
                            <a onclick="Displaycart()" href="#">Cart</a> 
                        </li>
                        <li >
                         <span class="lnr lnr-clock"></span>
                            Opening Hours 10.00 - 02:00
                        </li>
                        <li>
                        <a href="Contactus.html">
                            <span  class="lnr lnr-phone-handset"></span></a>
                            Hotline: 19000
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <nav>
            <div class="Top">
                <ul>
                    <li><a class="active" href="Home.htm">Home</a></li>
                    
                    <li><a href="Supp.php">Menu</a></li>
                    <li><a href="Supp.php">Deals & Offers</a></li>
                    <li><a href="COVID-19%20measures.html">COVID-19</a></li>
                    <li><a href="Contact%20us.html">Contact us</a></li>
                  <li> 
                      <div class="dropdown">
                                <a  href = "More.html">More</a>
                                <div class="dropdown-content">
                                   <a href="SignUp.html">Sign up</a>                                    
                                    <a href="Login.html">Login</a>
                                    
                                    <a href="Location.html"> Location</a>
                                    <a href="FAQ.html">FAQ</a>
                                    <a href="AboutUS.html">About us</a> 
                                    
                                </div>
                            </div> 
                        </li>
                </ul>
            </div>
        </nav>
        </header>

	<div class="containercart">
		<div class="heading">
		  <h1>
			<span class="shopper"></span> Shopping Cart
		  </h1>
		  
	  <a href="#" class="visibility-cart transition is-open">X</a>    
		</div>
		
		<div class="cart transition is-open">
		  
		  
<!--                              <button class="btn btn-update" onclick="document.location = \'Cart.php?dell=5\'"  >Clear Cart</button>;-->
                  
		  
		  
		  <div class="table">
			
			<div class="layout-inline row th">
			  <div class="col col-pro">Product</div>
			  <div class="col col-price align-center "> 
				Seller
			  </div>
			  <div class="col col-qty align-center">Quantity</div>
			  <div class="col">TAX</div>
			  <div class="col">Price</div>
			</div>
                      <?php
                        $cc->cartOrders();
                      ?>

			         
		</div>
		  
                    <a href="order.php" class="btn btn-update">Order Now</a>
		
	  </div>
	</div>
<!--Footer-->     
<footer>
       
    <div class="footer">
     <div class ="inner_footer">
        <div class="footer_box">
         <div class="logo_container">
          <a href="Home.htm">
                    <img src="img/logo.png" img title="Home">
                    </a>
            </div>
         </div>
        <div class="footer_box">
         <ul>
         <h4>Menu</h4>
             <li><a href="menu.html">Pizza</a></li>
             <li><a href="menu.html">Deals</a></li>
             <li><a href="menu.html">Chicken</a></li>
             <li><a href="menu.html">Drinks</a></li>
             <li><a href="menu.html">Desserts</a></li>
            </ul>
        </div>
        
                <div class="footer_box">
         <ul>
         <h4>About us</h4>
             <li><a href="AboutUS.html">Our story</a></li>
             <li><a href="FAQ.html">FAQ</a></li>
             <li><a href="COVID-19%20measures.html">COVID-19 MEASURES</a></li>
             
           
            </ul>
        </div>
      
            
          <div class="footer_box">
         <ul>
         <h4>My Account</h4>
             <li><a href="SignUp.html">Sign Up</a></li>
             <li><a href="Login.html">Log In</a></li>
             <li><a href="Profile.html">My Account</a></li>
            </ul>
        </div>
         <div class="footer_box">
         <ul>
         <h4>Customer Service</h4>
             <li><a href="Contact%20us.html">Contact Us</a></li>
             <li><a href="Location.html">Our Location</a></li>
            </ul>
        </div>
          <div class="footer_box">
              <div class="social_media">
         <ul>
         <h4>  Follow Us On  </h4>
             <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Facebook_icon_2013.svg" width="32" style="width: 32px;"></a>
             <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" width="32" style="width: 32px;"></a>
             <a href="#"><img src="https://upload.wikimedia.org/wikipedia/en/9/9f/Twitter_bird_logo_2012.svg" width="32" style="width: 32px;"></a>
             <a href="#"><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></a>
              
            </ul>
              </div>
        </div>
        
        </div>
         </div>
     
     </footer>
        
		<!--End of Footer-->
	  <script src="js/jquery-3.3.1.min.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
  <script src="js/cart.js"></script>
</body>
</html>
