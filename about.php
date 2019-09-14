<?php
session_start();
?>


<?php
    $mysession = $_SESSION['emailadd'];
    $db = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql = "SELECT * FROM logininfo WHERE emailadd='$mysession'";
    $records = mysqli_query($db, $sql);
    $details = mysqli_fetch_assoc($records);
?>


<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>My Shop</title>
<link rel="stylesheet" href="css2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#side-fix-div-hth{
    width: 40%;
    height: 580px;
    position: fixed;
    padding: 10px;
    margin-top: 1%;
    margin-left: 2%;
    border-color: dimgrey;
    border-width: 3px;
    border-style: ridge;
    float: left;
    background-image: url(images/hth.jpg);
    background-size: cover;
}

legend{
    font-family: cursive;
    font-weight: bold;
    }    

p{
    text-align: justify;
    font-family: sans-serif;
    }
</style>
    
</head>
<body>

<div id="outer-box">
    
<header>
<h1 id="brand-name">myshop.com</h1>
<p id="tag-lines">India`s largest Online e-commerce website</p>
</header>
<div id="white-space-header"></div>
    
    
<nav>
<div id="left-nav"><form>
<input type="search" name="search" id="search-box" placeholder="Search this site"/>
<input type="submit" value="Search Now" id="search-btn"/>
</form>
</div>
    
<div id="right-nav"> 

    
<div id="right-nav-upper">
    <i class="fa fa-user" style="font-size:20px; margin-right:10px; margin-left:10px;"></i>
    <?php echo $details['uname']; ?> -- <?php echo $details['emailadd']; ?>
</div>

<div id="menu">
 <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="access.php">Accesories</a></li>
    <li><a href="offer.php">Offers Zone</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="fcontact.php">Contact Us</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:24px"><span id="cartno"><sup>0</sup></span></i></a></li>
 </ul>
</div>
</div>
</nav>
<div id="white-space-nav"></div>
    
    
<div id="side-fix-div-hth"></div>
    
    <div id="product-desc-outer-contact">
        

<fieldset id="signup-fieldset">
<legend>About Us</legend>

    
<p>
MyShop is one stop shop of all competitive (Bank, SSC, Railways etc.) based educational needs. The main objective of MyShop is to provide students with a facility of buying online educational products & services related to different competitive exams.
    <br>
    The Grahame Gardner MyShop service is available to all customers who would like their staff or students to purchase their specific garments online. This service is particularly popular with Colleges and Universities. The MyShop service is designed to streamline the ordering processes for your organisation
    <br>
    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fug
    <br>
    Run from my home studio in East London and curated and everything-ed by me, the Not The Kind gallery & gift shop is home to a colourful selection of design-led gifts, affordable art, homeware, stationery and Super Cool Accessories For Life. 

I only stock work by artists, designers and indie brands I truly love and enjoy. And so, with colours clashing and patterns splashing all over the place, I handpick items that, for whatever reason, make me feel giddy/excited/hysterical in the hope they might make you feel giddy/excited/hysterical too. 

Every last item featured in the shop has been chosen very specifically - either because it has a story attached or because it has inspired one. I'll share the stories with you. I might write them, I might film them, sing them... And I can't promise there won't come a time when I feel I just have to dance them.  

Not many people can say they started working in retail when they were 2 years old, but I can. Piss-poor customer service makes my toes bunch. That's why I promise to treat you nice. 
  <br>
    <b>---<u>THANK YOU</u></b>
</p>    
    
    
</fieldset>    


</div>
        
   
    
</div>    
    
</body>
</html>
