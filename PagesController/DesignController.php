<!--start upper bar -->
<!--start upper bar -->
	<div class="upper-bar">
	    <div class="container">
	        <div class="row">
		      <div class="col-sm">
			    <span>Welcome : </span> 
             
                           <i class="fas fa-user"></i> <span><?php  echo $_SESSION['usName'];?></span> 
			  </div>
			  <div class="col-sm">
			    <span>We Are Here to Serve!</span>
				<a class="get-quote" href="Login.php">Sign Out</a>
			  </div>
		    </div>
	    </div>
	</div>
	<!-- end upper bar -->
   <header>
        <div class="main-top-header">
            <div class="top-header">
                <div class="logo">
                    <a href="Home.htm">
                    <img src="img/logo.png" img title="Home">
                    </a>
                    
                    
                        </div>
                    <div class="wrap">
                  
                         <form class="search" action="../FronEnd/Category1.php" method="GET">
                             <input type="text" placeholder="Search.." name="search" class="searchTerm">
                  </form>   
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
                    <li><a class="active" href="index.html">Home</a></li>
                    
                    <li><a href="Supp.php">Menu</a></li>
                    <li><a href="menu.php">Deals & Offers</a></li>
                         <?php
                    if($_SESSION['usType']==1)
                    {
                        echo 
                        '
                       <li><a href="Users.php">Users</a></li>
                       <li><a href="Purchase.php">Tranasction</a></li>
                        ';
                        
                    }
                
                ?>
                    <?php
                     if($_SESSION['usType']!=1)
                    {
                        echo 
                        '
                        <li><a href="COVID-19%20measures.html">COVID-19</a></li>
                        <li><a href="Purchase.php">Purchase</a></li>
                        ';
                        
                    }
                
                ?>
                   
                 <li> 
                      <div class="dropdown">
                          <a>Service</a>
                                <div class="dropdown-content">                                    
                                    <a href="Location.php"> Location</a>
                                    <a href="FAQ.php">FAQ</a>
                                    <a href="AboutUS.php">About us</a> 
                                   <a href="Contactus.php">Contact us</a>
                                    
                                </div>
                            </div> 
                        </li>
                </ul>
            </div>
        </nav>
        </header>
                <!--end navbar -->