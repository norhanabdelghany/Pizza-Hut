<?php 
    require_once '../PagesController/LoginCheck.php';
?>

<!DOCTYPE html>
<html>
                <head>
        <meta charset ="utf-8">
        <title>Profile</title>
                    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">            
        <link rel="icon" type="image/png" href="img/logo.png" sizes="100x94" />
        <link rel="stylesheet" type="text/css" href="css/style4.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="css/Fontawesome/css/all.min.css">
           <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">           
                    
    </head> 
    <body style="background: url(https://i.pinimg.com/236x/5e/99/c0/5e99c0b362c9edeed865ebc91dd59efc.jpg); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover">
            <!-- Header -->
<div class="container">
  <div class="profile-header">
    <div class="profile-img">
        <img src="img/defuserimg.png" width="200" alt="Profile Image" style="background-color: #ffffff">
    </div>
              
    <div class="profile-nav-info">
      <h3 class="user-name"><?php  echo $_SESSION['usName'];?></h3>
      <div class="address">
        <p id="state" class="state">Cairo,</p>
        <span id="country" class="country">Egypt.</span>
      </div>

    </div>
    <div class="profile-option">
      <div class="notification">
        <a href="Cart.html">
          <i class="fa fa-shopping-cart"></i>
        <span class="cart">3</span>
          </a>
      </div>
    </div>
      <div class="logo">
        <a href="Home.htm">
            <img src="img/Untitled.png" img title="Home">
                    </a>
                        </div>
        
  </div>

  <div class="main-bd">
    <div class="left-side">
      <div class="profile-side">
        <p class="mobile-no"><i class="fa fa-phone"></i> +<?php  echo $_SESSION['usPhone'];?></p>
        <p class="user-mail"><i class="fa fa-envelope"></i><?php  echo $_SESSION['usEmail'];?></p>
        <div class="user-bio">
          <h3>Bio</h3>
          <p class="bio">
            Hello! I'm 21 Years Old<br>This Project For Internet Programming Module Using Html,CSS,JS For Year Two After Prep ..<br>I Hope You Like It.
          </p>
        </div>
        <div class="profile-btn">
          <button class="chatbtn" id="chatBtn"><i class="fa fa-comment"></i> Chat</button>
          <a class="createbtn" id="Create-post"  href="Login.php"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
        <div class="user-rating">
          <h3 class="rating">4.9</h3>
          <div class="rate">
            <div class="star-outer">
              <div class="star-inner">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <span class="no-of-user-rate"><span>13m</span>&nbsp;&nbsp;reviews</span>
          </div>

        </div>
      </div>

    </div>
    <div class="right-side">

      <div class="nav">
        <ul>
          <li onclick="tabs(0)" class="user-post active">My Profile</li>
          <li onclick="tabs(1)" class="user-review">Reviews</li>
          <li onclick="tabs(2)" class="user-setting"> Settings</li>
        </ul>
      </div>
      <div class="profile-body">
        <div class="profile-posts tab">
          <h1 style=" font-variant: small-caps; font-family: sans-serif; font-weight: bold; font-size: 60px; color: crimson;">Personal Details</h1>
            <form action="details">
          <div class="input-container">
            <i  class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="<?php  echo $_SESSION['usName'];?>" name="name" disabled="">
          </div>
            

          <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="<?php  echo $_SESSION['usEmail'];?>" name="email" disabled="">
          </div>

          <div class="input-container">
            <i style="transform: rotateY(0deg)" class="fa fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="<?php  echo $_SESSION['usPhone'];?>" name="mob" disabled="">
          </div>

                  <?php
                    if($_SESSION['usType']!=1)
                    {
                        echo 
                        '
                            <div class="input-container">
            <i style="transform: rotateY(0deg)" class="fa fa-phone icon"></i>
            <input class="input-field" type="text" placeholder="User" name="type" disabled="">
          </div>
                        ';
                    }
                    
        ?>
	
	<!-- End service -->
        	<!-- Start service for admin -->
                <?php
                    if($_SESSION['usType']==1)
                    {
                        echo 
                        '
                            <div class="input-container">
            <i style="transform: rotateY(0deg)" class="fa fa-user-secret fa-1x icon"></i>
            <input class="input-field" type="text" placeholder="Admin" name="type" disabled="">
          </div>
                        ';
                        
                    }
                
                ?>
	


                
                <a class="cancel" href="index.php" >Back</a>
        </form>
                </div>
          
          
          
        <div class="profile-reviews tab">
            <h1 style=" font-variant: small-caps; font-family: sans-serif; font-weight: bold; font-size: 60px; color: crimson;">reviews</h1>
          <p>We had lunch here a few times while on the island visiting family and friends. The servers here are just wonderful and have great memories it seems. We sat on the ocean front patio and enjoyed the view with our delicious wine and lunch. Must try!</p>
            <br>
            <br>
            <span style="color: crimson;font-size: 25px; margin-right: 25px" class="heading">User Rating</span>
        <span style="font-size: 25px" class="fa fa-star checked"></span>
        <span style="font-size: 25px" class="fa fa-star checked"></span>
        <span style="font-size: 25px" class="fa fa-star checked"></span>
        <span style="font-size: 25px" class="fa fa-star checked"></span>
        <span style="font-size: 25px" class="fa fa-star checked"></span>
        <p>4.9 average based on 13m reviews.</p>
        <hr style="border:3px solid #f1f1f1">

        <div class="roww">
          <div class="side">
            <div>5 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-5"></div>
            </div>
          </div>
          <div class="side right">
            <div>12,612,342</div>
          </div>
          <div class="side">
            <div>4 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-4"></div>
            </div>
          </div>
          <div class="side right">
            <div>391,859</div>
          </div>
          <div class="side">
            <div>3 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-3"></div>
            </div>
          </div>
          <div class="side right">
            <div>21</div>
          </div>
          <div class="side">
            <div>2 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-2"></div>
            </div>
          </div>
          <div class="side right">
            <div>9</div>
          </div>
          <div class="side">
            <div>1 star</div>
          </div>
          <div class="middle">
            <div class="bar-container">
              <div class="bar-1"></div>
            </div>
          </div>
          <div class="side right">
            <div>1</div>
          </div>
        </div>

        </div>
        <div class="profile-settings tab">
          <div class="account-setting">
          <h1 style=" font-variant: small-caps; font-family: sans-serif; font-weight: bold; font-size: 60px; color: crimson;">Change Password</h1>
            <form action="details">
            <form  action="#" onsubmit="return validation()">		

                <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Current Password" id="cpass" name="psw">
          <span id="passwords" class="text-danger font-weight-bold"> </span>
                </div>
                           <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="New Password" id="pass" name="pass">
          <span id="passwords" class="text-danger font-weight-bold"> </span>
                </div>
                           <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Confirm Password"  id="confpass" name="pass ">
            <span id="passwords" class="text-danger font-weight-bold"> </span>                   
          </div>

                
          <button type="submit" class="save">Save</button>
          <button type="submit" class="cancel">Cancel</button>
        </form>
          
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
        
        
        <script src="jquery/jquery.js"></script>
        
        <script>
      const tabBtn = document.querySelectorAll(".nav ul li");
const tab = document.querySelectorAll(".tab");

function tabs(panelIndex) {
  tab.forEach(function(node) {
    node.style.display = "none";
  });
  tab[panelIndex].style.display = "block";
}
tabs(0);

        </script>
    
        
        <script>
            $(".nav ul li").click(function() {
  $(this).addClass("active").siblings().removeClass("active");
});
        </script>
        
        <script>
        let bio = document.querySelector(".bio");
const bioMore = document.querySelector("#see-more-bio");
const bioLength = bio.innerText.length;

function bioText() {
  bio.oldText = bio.innerText;

  bio.innerText = bio.innerText.substring(0, 100) + "...";
  bio.innerHTML += `<span onclick='addLength()' id='see-more-bio'>See More</span>`;
}
bioText();
        </script>
        <script>
        function addLength() {
  bio.innerText = bio.oldText;
  bio.innerHTML +=
    "&nbsp;" + `<span onclick='bioText()' id='see-less-bio'>See Less</span>`;
  document.getElementById("see-less-bio").addEventListener("click", () => {
    document.getElementById("see-less-bio").style.display = "none";
  });
}
if (document.querySelector(".alert-message").innerText > 9) {
  document.querySelector(".alert-message").style.fontSize = ".7rem";
}

        </script>
        
        <script>
        		function validation(){
            var old =  document.getElementById('cpass').value;     
            var pass = document.getElementById('pass').value;
	       var repass = document.getElementById('confpass').value;
	
            
            if(old == ""){
            document.getElementById('passwords').innerHTML =" ** Please fill the password field";
            return false;
			}
			
            if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
                    
            if(repass == ""){
			document.getElementById('repass').innerHTML =" ** Please fill the re-password field";				return false;
			}
			
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}


			if(pass!=repass){
				document.getElementById('repass').innerHTML =" ** This password doesn't match the confirmed password";
				return false;
			}



			
        
                }
            
        </script>
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
