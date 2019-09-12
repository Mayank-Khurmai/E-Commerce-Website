<?php
session_start();
?>


<?php
    $mysession = $_SESSION['emailadd'];
    $db = mysqli_connect("localhost", "root", "", "projectdb");
    $sql = "SELECT * FROM registertable WHERE emailadd='$mysession'";
    $records = mysqli_query($db, $sql);
    $details = mysqli_fetch_assoc($records);
?>


<!DOCTYPE html>
<html>
<head>
<title>My Shop</title>
<link rel="stylesheet" href="css2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <li><a href="index.php">Accesories</a></li>
    <li><a href="index.php">Today's Deal</a></li>
    <li><a href="index.php">Offer Zone</a></li>
    <li><a href="fcontact.php">Contact Us</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:24px"></i></a></li>
 </ul>
</div>
</div>
</nav>
<div id="white-space-nav"></div>
    
    
<div id="side-fix-div-photo"></div>
    
    <div id="product-desc-outer">
    
        <div id="product-name-div">
        <h1>Dennis Men's Shirt</h1>
        </div>
        
        <table>
        <tr>
        <td>M.R.P : </td>  
        <td><strike>Rs. 980</strike></td>
        </tr>
        <tr>
        <td>Price : </td> 
        <td><big><b><font color="red">Rs. 670</font></b></big></td>
        </tr>
        <tr>
        <td>You Save : </td>
        <td><font color="red">Rs. 310</font></td>
        </tr>
        <tr>
        <td></td>
        <td><small>Inclusive Of all taxes</small></td>
        </tr>
        </table>

        <br>
        
        <h2 id="avilablity">Currently Available</h2>
        
        <br>
        
        <ul>
        <li>Available in all the Sizes</li>
        <li>Pure Cotton Shirt</li>
        <li>Fashionable Shirt</li>
        <li>Available in the Black, Blue, Red and Orange Colour</li>
        <li>Attractive Western Design</li>
        </ul>
        
        <br>
        
        <h2 id="avilablity">Special offers and product promotions</h2>
        
        <br>

        <ul>
        <li>Get 5% cashback on a minimum purchase of Rs 2000 with HDFC Bank Debit Cards Here's how (terms and conditions apply)</li>
        <li>Get GST invoice and save up to 28% on business purchases. Sign up for free Here's how (terms and conditions apply)</li>
        <li>Flat Rs.50 back on minimum order of Rs.50 using UPI. For Android App customers only. Valid once during offer period. Cashback within 10 days. Set up UPI Here's how (terms and conditions apply)</li>
        <li>Available in the Black, Blue, Red and Orange Colour</li>
        <li>Attractive Western Design</li>
        </ul>
        
        <br>
        
        <h2 id="avilablity">Product Description</h2>
        
        <br>   
            
        <p>New Tide Plus with extra power detergent, now with the added power of bar, has been developed to bring you brilliant whiteness on your clothes. It removes dirt even from washed clothes to give you even better cleaning. The enzyme formula in the washing powder helps in washing away the toughest stains on the clothes, thus making them look bright and fresh. Kids often soil their clothes, especially school uniforms, with tough-to-remove stains and dirt. Tide Plus with extra power is a fine detergent powder which dissolves easily in water and quickly generates foam. The superior formulation can remove dirt even from difficult-to-clean areas like collars and cuffs and leaves behind a wonderful fragrance. The product works on both white and colored clothes. Extra power refers to vs previous Tide Plus. Tide, a unit of procter and gamble, is the world’s oldest and most trusted detergent brand and is the market leader in 23 countries around the world.</p>    
            
    </div>
    
</div>    
    
</body>
</html>