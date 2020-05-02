<?php 
    require_once '../PagesController/LoginCheck.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Menu</title> <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="css/style2.css">
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

    <!--Header-->

	<?php
          require_once '../PagesController/DesignController.php';
        ?>	
    <!----- Header End! ------>
<!----- Page Body ----->
        
<! –– menu  ––> 
        
<div id="Hdeals">
            <div class="name" id="center">
                <h1>Deals</h1>
            </div>


            <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">6 keto fried chicken</h4>
                </div>
                <div>
                    <img class="img3" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/20191011-keto-fried-chicken-delish-ehg-2642-1571677665.jpg" alt="ch" title="6 keto fried chicken">
                </div>
                <div class="des"> 6 keto fried chicken that's crispy, Low carb and crunchy, made with boneless thigh meat breaded in almond flour and parmesan cheese.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">55</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>




            <div class="group">
            <div class="chick">
                
                    <h4 class="title">6 CRISPY FRIED CHICKEN </h4>
                    
                    <img class="img3" src="img/chicken6.jpg" alt="ch" title="6 CRISPY FRIED CHICKEN">
                    
                <div class="des">It's a juicy, crusty 6 pieces of finger-licking good fried chicken. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">80</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    
    <div id="center">
     <h2>juicy chicken</h2><br>
    <p>To make this juicy and delectably crisp chicken, chef Mahmoud soaks it in a lemony brine, then coats and fries it. The chicken, which is served is one of the most popular dishes at the restaurant. </p><br>
        <img class="img3" src="https://i1.wp.com/sg.fdblogs.wpengine.com/wp-content/uploads/sites/2/2016/04/Choochoo.jpg?resize=768%2C510&ssl=1" alt="ch" title="Choo Choo Chicken">
        <img class="img3" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/20191011-keto-fried-chicken-delish-ehg-2642-1571677665.jpg" alt="ch" title="4 keto fried chicken"><br>
    
    <button id="chicken" onclick="Displaychicken()">Chicken</button>
    </div>
    <br>
    
    <div id="center">
     <h2> Delicious sandwiches</h2><br>
    <p>Sandwiches are perfect for breakfast, lunch and even dinner. Whether you're looking for a healthy vegetarian option or a tried and true classic sandwich, these delicious recipes don't disappoint. you can only get this excellent sandwich in at our restauraunt. </p><br>
        <img class="img3" src="img/sandwich3.jpg" alt="ch" title="The Duck Sandwich">
        <img class="img3" src="img/sandwich4.jpg" alt="ch" title="The Japanese Yakisoba Pan">
        <br>
    
    <button id="sandwiches" onclick="Displaysandwhiches()">sandwiches</button>
    </div>
    <br>
    
    <div id="center">
     <h2> Delicious drinks</h2><br>
    <p>There’s just something about summer that pushes us to turn to sugar-filled drinks to quench our thirst. Often times, it’s a soda or smoothie that is packed with more than a day’s worth of sugar. So what are you supposed to do on that hot summer day when water simply won’t do? Here are some of drinks on those scorching hot days. </p><br>
        <img class="img3" src="img/drink2.jpg" alt="ch" title="Shirley Temples">
        <img class="img3" src="img/drink4.jpg" alt="ch" title="Dole Whip Lemonade">
        <br>
    
    <button id="drinks" onclick="Displaydrinks()">drinks</button>
    </div>
    <br>
    
    <div id="center">
     <h2> Delicious desserts</h2><br>
    <p>These products captivate clients because they're so satisfying and enjoyable to eat. That's why including a delicious array of desserts. </p><br>
        <img class="img3" src="img/desert4.jpg" alt="ch" title="Vanilla Cheesecake with Cherry Topping">
        <img class="img3" src="img/desert6.jpg" alt="ch" title="Cinnamon-Apple Cake">
        <br>
    
    <button id="desserts" onclick="Displaydeserts()">desserts</button>
    </div>
    <br>
    
    
    
    
    </div>
        
<! –– menu  ––> 
<! –– chicken  ––>  
        <div id="ccontainer">
            <div class="name">
                <h1>chicken</h1>
            </div>


            <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">4 keto fried chicken</h4>
                </div>
                <div>
                    <img class="img3" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/20191011-keto-fried-chicken-delish-ehg-2642-1571677665.jpg" alt="ch" title="4 keto fried chicken">
                </div>
                <div class="des"> 4 keto fried chicken that's crispy, Low carb and crunchy, made with boneless thigh meat breaded in almond flour and parmesan cheese.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">49</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Jinjja Chicken </h4>
                </div>
                <div>
                    <img class="img3" src="https://i0.wp.com/sg.fdblogs.wpengine.com/wp-content/uploads/sites/2/2016/04/Jinjja-Wings-w-Fries.jpg?resize=768%2C508&ssl=1" alt="ch" title="Jinjja Chicken">
                </div>
                <div class="des"> chicken drumsticks covered with this rich combo and sprinkled with sesame seeds. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">54</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Choo Choo Chicken</h4>
                </div>
                <div>
                    <img class="img3" src="https://i1.wp.com/sg.fdblogs.wpengine.com/wp-content/uploads/sites/2/2016/04/Choochoo.jpg?resize=768%2C510&ssl=1" alt="ch" title="Choo Choo Chicken">
                </div>
                <div class="des"> offered perfect sizes and combos to share for two. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">59</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Oppa Chicken </h4>
                </div>
                <div>
                    <img class="img3" src="https://i2.wp.com/sg.fdblogs.wpengine.com/wp-content/uploads/sites/2/2016/04/Oppa-chicken.jpg?resize=768%2C510&ssl=1" alt="ch" title="Oppa Chicken">
                </div>
                <div class="des"> a very tender chicken with a crispy crust and thick Yangnyum sauce, which is a little sweet while being spicy and sharp.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">64</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Gochujang Chicken</h4>
                </div>
                <div>
                    <img class="img3" src="img/chicken5.jpg" alt="ch" title="Gochujang Chicken">
                </div>
                <div class="des">it’s a melt-in-your-mouth tender, slow-roast version that’s more similar to rotisserie chicken—except (bonus!) it gets slathered in the funky-spicy-sweet gochujang. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">69</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


            <div class="group">
            <div class="chick">
                
                    <h4 class="title">4 CRISPY FRIED CHICKEN </h4>
                    
                    <img class="img3" src="img/chicken6.jpg" alt="ch" title="4 CRISPY FRIED CHICKEN">
                    
                <div class="des">It's a juicy, crusty 4 piece of finger-licking good fried chicken. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">74</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<! –– chicken  ––>  
        
        
<! –– sandwiches  ––>  
        <div id="cccccontainer">
            <div class="name">
                <h1>sandwiches</h1>
            </div>


            <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Pulled Chicken with White Sauce</h4>
                </div>
                <div>
                    <img class="img3" src="img/sandwich1.jpg" alt="ch" title="Pulled Chicken with White Sauce">
                </div>
                <div class="des"> The mayo-based sauce is tangy and mildly spicy thanks to cider vinegar, horseradish and a potpourri of other spices.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">49</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Hawaiian Pulled Pork </h4>
                </div>
                <div>
                    <img class="img3" src="img/sandwich2.jpg" alt="ch" title="Hawaiian Pulled Pork">
                </div>
                <div class="des"> whole hogs slow-cooked in an underground oven, sometimes with a tangy sweet sauce that features pineapple. Perfect for a barbecue on the beach. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">54</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">The Duck Sandwich</h4>
                </div>
                <div>
                    <img class="img3" src="img/sandwich3.jpg" alt="ch" title="The Duck Sandwich">
                </div>
                <div class="des"> sheer-thin slices of duck bacon, duck pastrami and goat cheese (beer-infused, of course) spread between piping-hot, Kosher salt-flecked, pretzel bread. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">59</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">The Japanese Yakisoba Pan</h4>
                </div>
                <div>
                    <img class="img3" src="img/sandwich4.jpg" alt="ch" title="The Japanese Yakisoba Pan">
                </div>
                <div class="des"> This carb-heavy beauty is basically a noodle sandwich that starts w/ teriyaki beef or chicken on a French roll, then adds some chili sauce & yakisoba.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">64</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Fried Chicken Sandwiches </h4>
                </div>
                <div>
                    <img class="img3" src="img/sandwich5.jpg" alt="ch" title="Fried Chicken Sandwiches">
                </div>
                <div class="des">Tender juicy brined chicken with a deliciously crispy coating served on a lightly toasted bun.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">69</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


            <div class="group">
            <div class="chick">
                
                    <h4 class="title">SPICY BUTTERMILK FRIED CHICKEN SANDWICH </h4>
                    
                    <img class="img3" src="img/sandwich6.jpg" alt="ch" title="SPICY BUTTERMILK FRIED CHICKEN SANDWICH">
                    
                <div class="des">The perfect combination of flavors hot, crispy chicken melted cheese, bacon and that oh so dreamy Sriracha Mayo.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">74</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<! –– sandwiches  ––>  
        
        
        
<! –– drinks  ––> 
        <div id="ccccontainer">
            <div class="name">
                <h1>drinks</h1>
            </div>


            <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Virgin Pina Colada</h4>
                </div>
                <div>
                    <img class="img3" src="img/drink1.jpg" alt="ch" title="Virgin Pina Colada">
                </div>
                <div class="des"> You'll be instantly transported to the tropics.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">50</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Shirley Temples</h4>
                </div>
                <div>
                    <img class="img3" src="img/drink2.jpg" alt="ch" title="Shirley Temples">
                </div>
                <div class="des"> The nostalgic classic never goes out of the style. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">54</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Arnold Palmer</h4>
                </div>
                <div>
                    <img class="img3" src="img/drink3.jpg" alt="ch" title="Arnold Palmer">
                </div>
                <div class="des">Best of both worlds! </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">59</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Dole Whip Lemonade</h4>
                </div>
                <div>
                    <img class="img3" src="img/drink4.jpg" alt="ch" title="Dole Whip Lemonade">
                </div>
                <div class="des"> Just like the Disney fave!</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">20</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



            
            <div class="group">
            <div class="chick">
                
                    <h4 class="title">Frosted Lemonade</h4>
                    
                    <img class="img3" src="img/drink5.jpg" alt="ch" title="Frosted Lemonade">
                    
                <div class="des">If you love Chick-fil-A's frozen lemonade, you need to try this recipe.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">65</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


            <div class="group">
            <div class="chick">
                
                    <h4 class="title">Watermelon Lemonade </h4>
                    
                    <img class="img3" src="img/drink6.jpg" alt="ch" title="Watermelon Lemonade">
                    
                <div class="des">Most refreshing summer drink ever? We think so.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">74</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<! –– drinks  ––>            
        
<! –– desserts  ––> 
        <div id="cccontainer">
            <div class="name">
                <h1>desserts</h1>
            </div>


            <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Chocolate-Mint Bars</h4>
                </div>
                <div>
                    <img class="img3" src="img/desert1.jpg" alt="ch" title="Chocolate-Mint Bars">
                </div>
                <div class="des"> You'll love these Chocolate-Mint Bars if you're a big fan of the thin chocolate-mint Girl Scout cookies or Andes candies.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">50</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Bourbon-Pecan Tart with Chocolate Drizzle</h4>
                </div>
                <div>
                    <img class="img3" src="img/desert2.jpg" alt="ch" title="Bourbon-Pecan Tart with Chocolate Drizzle">
                </div>
                <div class="des"> Pecan pie is often purely sweet with no undertones, but the bourbon, molasses, and chocolate in this beautiful centerpiece dessert all add complexity of flavor. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">54</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Tiramisu</h4>
                </div>
                <div>
                    <img class="img3" src="img/desert5.jpg" alt="ch" title="Tiramisu">
                </div>
                <div class="des">its indulgent creamy flavor is indeed uplifting. With layers of ladyfingers, and grated chocolate, traditional tiramisu is a cross between a trifle and bread pudding. </div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">59</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Espresso Crinkles </h4>
                </div>
                <div>
                    <img class="img3" src="img/desert3.jpg" alt="ch" title="Espresso Crinkles">
                </div>
                <div class="des"> Unsweetened chocolate and instant espresso powder give depth of flavor to these sophisticated cookies.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">20</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="group">
            <div class="chick">
                <div>
                    <h4 class="title">Vanilla Cheesecake with Cherry Topping</h4>
                </div>
                <div>
                    <img class="img3" src="img/desert4.jpg" alt="ch" title="Vanilla Cheesecake with Cherry Topping">
                </div>
                <div class="des">In this rich cheesecake, we use the entire vanilla bean, so none of it is wasted: The seeds flavor the cheesecake, and the bean halves flavor the topping.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">69</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


            <div class="group">
            <div class="chick">
                
                    <h4 class="title">Cinnamon-Apple Cake </h4>
                    
                    <img class="img3" src="img/desert6.jpg" alt="ch" title="Cinnamon-Apple Cake">
                    
                <div class="des">this Cinnamon-Apple Cake is one of our most loved recipes and can be served as dessert or a breakfast coffee cake.</div>
                    <div class="button">
                        <span class="money">
                            <label>
                                <span class="sp">EGP</span>
                                <span class="price">74</span>
                            </label>
                        </span>
                        <div class="cart">
                            <button class="add">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
<! –– desserts  ––> 
                     
        
        
<! –– cart  ––>        
        <section id ="container">
            <div class="name">
                <h1>cart</h1>
            </div>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn" type="button">PURCHASE</button>
        </section>
<! –– cart  ––>  
        
        
        
        <button id="goback" onclick="openmenu()">Go Back</button><br/> <br/> <br/>
        
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
    
        
        
    </body>
</html>