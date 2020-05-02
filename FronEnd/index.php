<?php 
    require_once '../PagesController/LoginCheck.php';
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
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <style>
                    </style>              
    </head> 
    <body style="background: url(https://i.pinimg.com/236x/5e/99/c0/5e99c0b362c9edeed865ebc91dd59efc.jpg); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover">
        
                    <!--Header-->

	<?php
          require_once '../PagesController/DesignController.php';
        ?>    <!----- Header End! ------>
        <script>
	var i = 0; // Start point
	var images = [];
	var time = 3000;

	// Image List
	images[0] = '2ndfree-en.jpg';
	images[1] = 'Hatrick EN.jpg';
	images[2] = 'hut saver Pan EN.jpg';
	images[3] = 'My Box EN.jpg';

	// Change Image
	function changeImg(){
		document.slide.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;

</script>

<div class="image-slide">
<img name="slide" width="1030" height="350px">
    
        </div>
        
        <div class="covid">
        <img src="img/indianapolis-circa-february-2017-pizza-260nw-572078815.jpg"    alt="">
            <div class="covid-update">
            <h1>COVID-19 Update</h1>
            <p>The well-being of our people and customers is our top priority, so we are taking precautions to protect your health. All restaurants are encouraged to move to Drive-Thru, Delivery and Walk-In Take-Out and close down all dine-in seating. Find out more about McDonald's response to COVID-19.*</p>
                 <button class="button" id="bttn">Pizza Hut's newsroom</button>
            </div>
        </div>
        
        
        <div class="sections">
        <div class="first-section">
            <img src="img/screen-0.jpg" alt="">
            <h2>Mobile Order & Pay</h2>
            <p>Pick up your order. Select Drive Thru pick up  <br> and tell us your order code at the speaker.</p>
            <button class="button" id="bttn">Use App</button>
            </div>
        <div class="second-section">
            <img src="img/Deals.jpeg" alt="">
            <h2>Deals</h2>
            <p>Try one large pizza with your favourite toppings and <br> get it Half-priced.</p>
            <button class="button " id="bttn">Browse deals</button>
            </div>
        
        
        </div>
  <div class="sections">
        <div class="first-section">
            <img src="img/PH_Student-Meal-500-x-500.jpg" alt="">
            <h2>Student meals</h2>
            <p>Get free soft drinks for any size when ordering student <br> meals. Joy Included.</p>
            <button class="button" id="bttn">Learn more</button>
            </div>
        <div class="second-section">
            <img src="img/PizzaHutPull_Embedded.jpg" alt="">
            <h2>Nutrition Calculator</h2>
            <p>Explore our nutrition facts and learn more about your <br> favorite Pizza hut’s menu items.</p>
            <button class="button" id="bttn">Get Nutrition Details</button>
            </div>
        
        
        </div>
        
     
        
    </body>
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
    
    
</html>