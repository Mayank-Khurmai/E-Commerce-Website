<?php
session_start();
?>


<?php
if(! $_SESSION)
{
    $mysession= NULL;
}
else
{
    $mysession = $_SESSION['emailadd'];
}
    $mysession=$mysession;
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
<link rel="stylesheet" href="css.css">
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
    <?php

    if(! $_SESSION)
    {
        echo " Welcome ,Guest ";
    }
    else
    {
     echo $details['uname']; ?> -- <?php echo $details['emailadd'];
    }     
     ?>
</div>

<div id="menu">
 <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="access.php">Accesories</a></li>
    <li><a href="offer.php">Offers Zone</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="fcontact.php">Contact Us</a></li>
    <?php

    if(! $_SESSION )
    {
        echo '<li><a href="logout.php">Login</a></li>';
    }
    else
    {
        echo '<li><a href="logout.php">Logout</a></li>';
    }

    ?>
    
   
    <li><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:24px"><span id="cartno"><sup>0</sup></span></i></a></li>
 </ul>
</div>
</div>
</nav>
<div id="white-space-nav"></div>
    
    
<div id="side-fix-div">

<div id="search-by-category-div">
<h1 id="search-by-category">Search By Category</h1>    
</div> 
    

<div id="search-by-category-div2"> 

<table width="100%" height="300px">
<tr>
<td><p id="tel">Pin Code</p></td>
<td><input type ="tel" max="6"></td>
</tr>
<tr>
<td><p id="product-type">Product Type</p></td>
<td>
<select name="product-category-type">
<option value="all-rating">------Product Category------</option>
<option value="zero-rating">TV &amp; Appliances </option>
<option value="one-rating">Mens Wear</option>
<option value="two-rating">Womens Wear</option>
<option value="three-rating">Home &amp; Furniture</option>
<option value="four-rating">Electronics</option>
<option value="five-rating">Sports Wear</option>
</select>    
</td>
</tr>
<tr>
<td><p id="rating">Choose rating</p></td>
<td>
<select name="price-range">
<option value="all-rating">------Product Rating------</option>
<option value="five-rating">All type</option>
<option value="zero-rating">0</option>
<option value="one-rating">1</option>
<option value="two-rating">2</option>
<option value="three-rating">3</option>
<option value="four-rating">4</option>
<option value="five-rating">5</option>
</select>    
</td>
</tr>
<tr>
<td><p id="price-range">Price Range</p></td> 
<td><span><sup>50</sup></span><input type="range" min="50" max="10000"><span><sup>10000</sup></span></td>
</tr>
<tr>
<td><input type="submit" value="Search"></td>
</tr>
</table>    

    
</div>     

</div>

<div id="side-right-div">

    
    
<div id="cat-c">
<a href="productinfo.php?id=c1">
    <div class="size">
    <div class="s-img" id="cat-img-c1"></div>
    <?php echo "<span><center><small>Kids Vockey-Tockey <br> 35% Off </small><br> Rs. <b><big>1000</big></b> | <strike><small>Rs. 1500</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=c2">
    <div class="size">
    <div class="s-img" id="cat-img-c2"></div>
    <?php echo "<span><center><small> Hfid Speaker <br> 20% Off </small><br> Rs. <b><big>1750</big></b> | <strike><small>Rs. 2180</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=c3">
    <div class="size">
    <div class="s-img" id="cat-img-c3"></div>
    <?php echo "<span><center><small>2-USB Speaker <br> 35% Off </small><br> Rs. <b><big>640</big></b> | <strike><small>Rs. 970</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=c4">
    <div class="size">
    <div class="s-img" id="cat-img-c4"></div>
    <?php echo "<span><center><small>Resberi Pi <br> 14% Off </small><br> Rs. <b><big>1200</big></b> | <strike><small>Rs. 1380</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=c5">
    <div class="size">
    <div class="s-img" id="cat-img-c5"></div>
    <?php echo "<span><center><small>Mobile Stand <br> 53% Off </small><br> Rs. <b><big>230</big></b> | <strike><small>Rs. 480</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=c6">
    <div class="size">
    <div class="s-img" id="cat-img-c6"></div>
    <?php echo "<span><center><small>USB Hardisk <br> 10% Off </small><br> Rs. <b><big>1770</big></b> | <strike><small>Rs. 1980</small></strike><center></span>"; ?>
    </div> 
</a>  
</div>    

    
    
<div id="cat-d">
<a href="productinfo.php?id=d1">
    <div class="size">
    <div class="s-img" id="cat-img-d1"></div>
    <?php echo "<span><center><small>Android Galaxy <br> 15% Off </small><br> Rs. <b><big>16700</big></b> | <strike><small> 19800</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=d2">
    <div class="size">
    <div class="s-img" id="cat-img-d2"></div>
    <?php echo "<span><center><small>Touchscreen Android <br> 8% Off </small><br> Rs. <b><big>12700</big></b> | <strike><small> 13800</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=d3">
    <div class="size">
    <div class="s-img" id="cat-img-d3"></div>
    <?php echo "<span><center><small>Samsung Galaxy <br> 10% Off </small><br> Rs. <b><big>26700</big></b> | <strike><small> 28800</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=d4">
    <div class="size">
    <div class="s-img" id="cat-img-d4"></div>
    <?php echo "<span><center><small>Vivo Triple V9 <br> 15% Off </small><br> Rs. <b><big>18500</big></b> | <strike><small> 21900</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=d5">
    <div class="size">
    <div class="s-img" id="cat-img-d5"></div>
    <?php echo "<span><center><small>Motorola Green <br> 5% Off </small><br> Rs. <b><big>36500</big></b> | <strike><small> 37900</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=d6">
    <div class="size">
    <div class="s-img" id="cat-img-d6"></div>
    <?php echo "<span><center><small>Panasonic Multi <br> 20% Off </small><br> Rs. <b><big>12700</big></b> | <strike><small> 15800</small></strike><center></span>"; ?>
    </div> 
</a>  
</div>

    
    
    
    
 
    
    

 
    
     
    
<div id="cat-k">
<a href="productinfo.php?id=k1">
    <div class="size">
    <div class="s-img" id="cat-img-k1"></div>
    <?php echo "<span><center><small>Boss Speakers <br> 5% Off </small><br> Rs. <b><big>2300</big></b> | <strike><small>Rs. 2400</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=k2">
    <div class="size">
    <div class="s-img" id="cat-img-k2"></div>
    <?php echo "<span><center><small>Home Theatre <br> 10% Off </small><br> Rs. <b><big>1350</big></b> | <strike><small>Rs. 1500</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=k3">
    <div class="size">
    <div class="s-img" id="cat-img-k3"></div>
    <?php echo "<span><center><small>Amazon Alexa <br> 17% Off </small><br> Rs. <b><big>6000</big></b> | <strike><small>Rs. 7200</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=k4">
    <div class="size">
    <div class="s-img" id="cat-img-k4"></div>
    <?php echo "<span><center><small>Sony Speakers<br> 10% Off </small><br> Rs. <b><big>2500</big></b> | <strike><small>Rs. 2800</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=k5">
    <div class="size">
    <div class="s-img" id="cat-img-k5"></div>
    <?php echo "<span><center><small>Kingston Speaker <br> 15% Off </small><br> Rs. <b><big>1200</big></b> | <strike><small>Rs. 1380</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=k6">
    <div class="size">
    <div class="s-img" id="cat-img-k6"></div>
    <?php echo "<span><center><small>Home Speakers <br> 15% Off </small><br> Rs. <b><big>1000</big></b> | <strike><small>Rs. 1150</small></strike><center></span>"; ?>
    </div> 
</a>  
</div>     
    
</div>
    
</div>    
    
 
</body>
</html>
