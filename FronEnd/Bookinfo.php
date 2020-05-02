<?php 

    require_once '../PagesController/LoginCheck.php';
    if(isset($_GET['submit']))
    {
        if($_GET['quaAllow']>=$_GET['qua'])
        {
            header("Location: Cart.php?qua=".$_GET['qua']."&bookid=".$_GET['bookid']);
        }  else {
            header("Location: http://localhost/FoodCenter/FronEnd/Bookinfo.php?cat=".$_GET['cat']."&catname=".$_GET['catname']."&book=".$_GET['bookid']);
        }
        
      
        
    }
    
    require_once '../PagesController/bookInfoController.php';
    require_once '../PagesController/CategoryController.php';
    $cat=new CategoryController();
    $rowCat=$cat->getCategoreyByID($ret[0]->getCategory());
    
    
?>

<!DOCTYPE html>
<html>
    <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="javascript.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        
        
        <link rel="stylesheet" type="text/css" href="css/Fontawesome/css/all.min.css">
           <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">
            
    </head>
                <head>
        <meta charset ="utf-8">
        <title>Home</title>
                    
        <link rel="icon" type="image/png" href="img/logo.png" sizes="100x94" />
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="css/SinglebookInfo.css">
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
    <!----- Header End! ------>
        
<!--bookinfo-->

        <div class='all'>
        <div class='bookinfo'>
            <?php echo '<img src="img/'.$ret[0]->getImage().'" alt="Shield Of Hades" width=280px height=400px>';?>
            <ul>
                <li>     <b>Name:</b> <?php echo $ret[0]->getName()?></li>
                <li>     <b>Delivery Time:</b> <?php echo $ret[0]->getAuthor()?></li>
                                <li>     <b>Size:</b> <?php echo $ret[0]->getCondition()  ?></li>
                                <li>     <b>Category:</b> <?php echo $rowCat[0]->getName(); ?></li>
                <li>     <b>Quantity:</b> <?php echo $ret[0]->getStock()?></li>
                <li>     <b>Meal Code:</b> <?php echo $ret[0]->getIsbn() ?></li>
                <li>     <b>Price:</b> <?php echo '$'.$ret[0]->getPrice()  ?></li>
            </ul>
            <br>
                <?php 
                        if($_SESSION['usId']!=$ret[0]->getCustomer_id() && $_SESSION['usType']!=1 && $ret[0]->getStock()>=1)
                        {
                           //echo '<button type="button" onclick="document.location = \'Cart.php?bookid='.$ret[0]->getId().'\'" class="fa fa-shopping-cart" >Add To Cart</button>';
                           echo '<form  method="get">
                                <span style="background-color: rgb(255, 0, 0);color: white;font-size: 25px; font-weight: bold;">Choose Quantity</span>
                                <div class="col"> 
                                <a href="#" class="qty qty-minus">-</a>
                                                      <input type="numeric" name="qua" value="1" />
                                                    <a href="#" class="qty qty-plus">+</a>
                                                    
                                </div>
                                <input name="bookid" value="'.$ret[0]->getId().'" hidden="">
                                <input name="quaAllow" value="'.$ret[0]->getStock().'" hidden="">
                                <input name="cat" value="'.$_GET['cat'].'" hidden="">
                                <input name="catname" value="'.$_GET['catname'].'" hidden="">
                                <input type="submit" name="submit" id="addcart" value="Add to Cart">
                              </form> ';
                        }else if ($ret[0]->getStock()<1)
                        {
                            echo '<button type="button" disabled=""  class="fa fa-shopping-cart" >Not Available</button>';
            
                        }
                        ?>
            
            </div>
        <div class="overview1 text-center" >
            <div class="container">
                    <h2 class="h1">Description</h2>
                    <p>
                        <?php echo $ret[0]->getDescription()?>
                    </p>
                    <?php 
                    if(isset($_GET['cat']))
                    {
                        echo '<a style="text-decoration:none" href="Category1.php?cat='.$_GET['cat'].'&catname='.$_GET['catname'].'">View Other Meals</a>';
                    }elseif ($_GET['search']) {
                        echo '<a style="text-decoration:none" href="Category1.php?search='.$_GET['search'].'">View Other Meals</a>';
                    }
                    ?>
                    
                    
        
                </div>
            </div>
            <!-- End Overview -->
       

        </div>
        <!--book info-->
        
        
       
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