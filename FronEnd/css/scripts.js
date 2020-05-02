/*signin*/
var MaxTries = 4;

function validate()
{
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
    
if ( username == "admin" && password == "12345678")
{
window.location = 'Profile.html';
return false;
}
       
if ( username == "customer" && password == "12345678")
{
window.location = "Profile.html";
return false;
}
    
else{
MaxTries --;
    document.getElementById("somethingg").textContent = "**You have " + MaxTries + "  attempts to login";

if( MaxTries == 0)
{
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("button").disabled = true;
return false;
}
}
}


function check()
{
var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
    
if (username == "" || password == "")
{
document.getElementById("somethingg").textContent = "**username or password might be empty";
return false;
}
    
if(username.match(format))
{
    document.getElementById("somethingg").textContent = "**Invalid input";
return false;
}
    
if( username < 5)
{
     document.getElementById("somethingg").textContent = "**username can't be less than 5";
return false;
}
    
else if( password < 8)
{
    document.getElementById("somethingg").textContent = "**Password can't be less than 8";
return false;
}
    
else
{
    validate();
}
}


$(document).ready(function(){
  $('#boton').mouseover(function(){
    $("#boton").css("background-color", "grey");
  });
    
    $("#boton").mouseout(function(){
      $("#boton").css("background-color", "white");
  });
});
/*signin*/


/*menu*/
function openmenu(){
   document.getElementById("ccontainer").style.display = "none";
    document.getElementById("cccontainer").style.display = "none";
    document.getElementById("ccccontainer").style.display = "none";
    document.getElementById("cccccontainer").style.display = "none";
    document.getElementById("container").style.display = "none";
    document.getElementById("goback").style.display = "none";
    document.getElementById("Hdeals").style.display = "block";
    scroll(0,0);
}

function Displaycart() {
    document.getElementById("ccontainer").style.display = "none";
    document.getElementById("cccontainer").style.display = "none";
    document.getElementById("ccccontainer").style.display = "none";
    document.getElementById("cccccontainer").style.display = "none";
    document.getElementById("container").style.display = "block";
    document.getElementById("goback").style.display = "block";
    document.getElementById("Hdeals").style.display = "none"; 
    scroll(0,0);
}
function Displaychicken() {
    document.getElementById("ccontainer").style.display = "block";
    document.getElementById("cccontainer").style.display = "none";
    document.getElementById("ccccontainer").style.display = "none";
    document.getElementById("cccccontainer").style.display = "none";
    document.getElementById("container").style.display = "none";
    document.getElementById("goback").style.display = "block";
    document.getElementById("Hdeals").style.display = "none"; 
    scroll(0,0);
}
function Displaysandwhiches() {
    document.getElementById("ccontainer").style.display = "none";
    document.getElementById("cccontainer").style.display = "none";
    document.getElementById("ccccontainer").style.display = "none";
    document.getElementById("cccccontainer").style.display = "block";
    document.getElementById("container").style.display = "none";
    document.getElementById("goback").style.display = "block";
    document.getElementById("Hdeals").style.display = "none"; 
    scroll(0,0);
}
function Displaydrinks() {
    document.getElementById("ccontainer").style.display = "none";
    document.getElementById("cccontainer").style.display = "none";
    document.getElementById("ccccontainer").style.display = "block";
    document.getElementById("cccccontainer").style.display = "none";
    document.getElementById("container").style.display = "none";
    document.getElementById("goback").style.display = "block";
    document.getElementById("Hdeals").style.display = "none"; 
    scroll(0,0);
}
function Displaydeserts() {
    document.getElementById("ccontainer").style.display = "none";
    document.getElementById("cccontainer").style.display = "block";
    document.getElementById("ccccontainer").style.display = "none";
    document.getElementById("cccccontainer").style.display = "none";
    document.getElementById("container").style.display = "none";
    document.getElementById("goback").style.display = "block";
    document.getElementById("Hdeals").style.display = "none"; 
    scroll(0,0);
}

/*menu*/


/*cart*/

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger');
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }

    var addToCartButtons = document.getElementsByClassName('add');
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i];
        button.addEventListener('click', addToCartClicked);
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);
}

function purchaseClicked() {
    alert('Thank you for your purchase');
    var cartItems = document.getElementsByClassName('cart-items')[0];
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild);
    }
    updateCartTotal();
}

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateCartTotal();
}

function addToCartClicked(event) {
    
    var title = event.target.parentElement.parentElement.parentElement.getElementsByClassName('title')[0].innerText;
    var price = event.target.parentElement.parentElement.getElementsByClassName('price')[0].innerText;
    var imageSrc = event.target.parentElement.parentElement.parentElement.getElementsByClassName('img3')[0].src;
    
    addItemToCart(title, price, imageSrc);
    updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div');
    cartRow.classList.add('cart-row');
    var cartItems = document.getElementsByClassName('cart-items')[0];
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem);
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0];
    var cartRows = cartItemContainer.getElementsByClassName('cart-row');
    var total = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('cart-price')[0];
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0];
        var price = parseFloat(priceElement.innerText);
        var quantity = quantityElement.value;
        total = total + (price * quantity);
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('cart-total-price')[0].innerText = 'EGP ' + total;
}
/*cart*/