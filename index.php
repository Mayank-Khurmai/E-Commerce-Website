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
    <li><a href="logout.php">Logout</a></li>
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

<div id="cat-a">
<a href="productinfo.php?id=a1">
    <div class="size">
    <div class="s-img" id="cat-img-a1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 32% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
    </div>
</a>
<a href="productinfo.php?id=a2">
    <div class="size">
    <div class="s-img" id="cat-img-a2"></div>
    <?php echo "<span><center><small>Sreats Men's Regular <br> 22% Off </small><br> Rs. <b><big>550</big></b> | <strike><small>Rs. 710</small></strike><center></span>"; ?>
    </div>
</a>
<a href="productinfo.php?id=a3">
    <div class="size">
    <div class="s-img" id="cat-img-a3"></div> 
    <?php echo "<span><center><small>Lion's roar Shirt <br> 35% Off </small><br> Rs. <b><big>770</big></b> | <strike><small>Rs. 1180</small></strike><center></span>"; ?>
    </div> 
</a>
<a href="productinfo.php?id=a4">
    <div class="size">
    <div class="s-img" id="cat-img-a4"></div>
    <?php echo "<span><center><small>Dennim Blue  <br> 42% Off </small><br> Rs. <b><big>790</big></b> | <strike><small>Rs. 1340</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=a5">
    <div class="size">
    <div class="s-img" id="cat-img-a5"></div>
    <?php echo "<span><center><small>Lingo Men's Cotton <br> 30% Off </small><br> Rs. <b><big>470</big></b> | <strike><small>Rs. 680</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=a6">
    <div class="size">
    <div class="s-img" id="cat-img-a6"></div>
    <?php echo "<span><center><small>Campus Stura Men's <br> 10% Off </small><br> Rs. <b><big>540</big></b> | <strike><small>Rs. 600</small></strike><center></span>"; ?>
    </div> 
</a>  
</div>
    
    
    
<div id="cat-b">
<a href="productinfo.php?id=b1">
    <div class="size">
    <div class="s-img" id="cat-img-b1"></div>
    <?php echo "<span><center><small>Quirky T-shirt <br> 50% Off </small><br> Rs. <b><big>400</big></b> | <strike><small>Rs. 780</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=b2">
    <div class="size">
    <div class="s-img" id="cat-img-b2"></div>
    <?php echo "<span><center><small>Nighty Kurti <br> 50% Off </small><br> Rs. <b><big>550</big></b> | <strike><small>Rs. 1100</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=b3">
    <div class="size">
    <div class="s-img" id="cat-img-b3"></div>
    <?php echo "<span><center><small>Elvis Crop <br> 48% Off </small><br> Rs. <b><big>620</big></b> | <strike><small>Rs. 1180</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=b4">
    <div class="size">
    <div class="s-img" id="cat-img-b4"></div>
    <?php echo "<span><center><small>Party Frok <br> 30% Off </small><br> Rs. <b><big>450</big></b> | <strike><small>Rs. 650</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=b5">
    <div class="size">
    <div class="s-img" id="cat-img-b5"></div>
    <?php echo "<span><center><small>Style Villi T-shirt <br> 20% Off </small><br> Rs. <b><big>770</big></b> | <strike><small>Rs. 960</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=b6">
    <div class="size">
    <div class="s-img" id="cat-img-b6"></div>
    <?php echo "<span><center><small>Party Fashion Gown <br> 17% Off </small><br> Rs. <b><big>1070</big></b> | <strike><small>Rs. 1280</small></strike><center></span>"; ?>
    </div> 
</a>  
</div>
    

    
    
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

    
    
<div id="cat-e">
<a href="productinfo.php?id=e1">
    <div class="size">
    <div class="s-img" id="cat-img-e1"></div>
    <?php echo "<span><center><small>Handball <br> 50% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 1340</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=e2">
    <div class="size">
    <div class="s-img" id="cat-img-e2"></div>
    <?php echo "<span><center><small>Baseball And Softball <br> 48% Off </small><br> Rs. <b><big>570</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=e3">
    <div class="size">
    <div class="s-img" id="cat-img-e3"></div>
    <?php echo "<span><center><small>Gym Running <br> 13% Off </small><br> Rs. <b><big>8000</big></b> | <strike><small>Rs. 9100</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=e4">
    <div class="size">
    <div class="s-img" id="cat-img-e4"></div>
    <?php echo "<span><center><small>Cricket Bat <br> 50% Off </small><br> Rs. <b><big>500</big></b> | <strike><small>Rs. 1000</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=e5">
    <div class="size">
    <div class="s-img" id="cat-img-e5"></div>
    <?php echo "<span><center><small>Cricket kit <br> 15% Off </small><br> Rs. <b><big>2000</big></b> | <strike><small>Rs. 2300</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=e6">
    <div class="size">
    <div class="s-img" id="cat-img-e6"></div>
    <?php echo "<span><center><small>Badminton Set <br> 25% Off </small><br> Rs. <b><big>750</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
    </div> 
</a>  
</div>    

    
    
<div id="cat-f">
<a href="productinfo.php?id=f1">
    <div class="size">
    <div class="s-img" id="cat-img-f1"></div>
    <?php echo "<span><center><small>Study Table <br> 5% Off </small><br> Rs. <b><big>2700</big></b> | <strike><small>Rs. 2800</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=f2">
    <div class="size">
    <div class="s-img" id="cat-img-f2"></div>
    <?php echo "<span><center><small>Dinning Table <br> 13% Off </small><br> Rs. <b><big>6000</big></b> | <strike><small>Rs. 6880</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=f3">
    <div class="size">
    <div class="s-img" id="cat-img-f3"></div>
    <?php echo "<span><center><small>Soft Sofa <br> 7% Off </small><br> Rs. <b><big>2700</big></b> | <strike><small>Rs. 2900</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=f4">
    <div class="size">
    <div class="s-img" id="cat-img-f4"></div>
    <?php echo "<span><center><small>Vertical Table <br> 12% Off </small><br> Rs. <b><big>700</big></b> | <strike><small>Rs. 800</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=f5">
    <div class="size">
    <div class="s-img" id="cat-img-f5"></div>
    <?php echo "<span><center><small>Bharat Safe <br>8% Off </small><br> Rs. <b><big>7000</big></b> | <strike><small>Rs. 7500</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=f6">
    <div class="size">
    <div class="s-img" id="cat-img-f6"></div>
    <?php echo "<span><center><small>Double Bed <br> 13% Off </small><br> Rs. <b><big>8500</big></b> | <strike><small>Rs. 9700</small></strike><center></span>"; ?>
    </div> 
</a>  
</div> 
 
    
    
<div id="cat-g">
<a href="productinfo.php?id=g1">
    <div class="size">
    <div class="s-img" id="cat-img-g1"></div>
    <?php echo "<span><center><small>Boys White Shoes <br> 32% Off </small><br> Rs. <b><big>600</big></b> | <strike><small>Rs. 900</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=g2">
    <div class="size">
    <div class="s-img" id="cat-img-g2"></div>
    <?php echo "<span><center><small>Desnis Black Shoes <br> 10% Off </small><br> Rs. <b><big>1300</big></b> | <strike><small>Rs. 1450</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=g3">
    <div class="size">
    <div class="s-img" id="cat-img-g3"></div>
    <?php echo "<span><center><small>Adidas Shoes <br> 13% Off </small><br> Rs. <b><big>2400</big></b> | <strike><small>Rs. 2750</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=g4">
    <div class="size">
    <div class="s-img" id="cat-img-g4"></div>
    <?php echo "<span><center><small>Adidas Black <br> 5% Off </small><br> Rs. <b><big>2200</big></b> | <strike><small>Rs. 2300</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=g5">
    <div class="size">
    <div class="s-img" id="cat-img-g5"></div>
    <?php echo "<span><center><small>Gradient Shoes <br> 45% Off </small><br> Rs. <b><big>1100</big></b> | <strike><small>Rs. 2000</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=g6">
    <div class="size">
    <div class="s-img" id="cat-img-g6"></div>
    <?php echo "<span><center><small>Multi Color Shoes <br> 22% Off </small><br> Rs. <b><big>700</big></b> | <strike><small>Rs. 900</small></strike><center></span>"; ?>
    </div> 
</a>  
</div> 

    
    
<div id="cat-h">
<a href="productinfo.php?id=h1">
    <div class="size">
    <div class="s-img" id="cat-img-h1"></div>
    <?php echo "<span><center><small>Redlix Watch <br> 10% Off </small><br> Rs. <b><big>2000</big></b> | <strike><small>Rs. 2200</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=h2">
    <div class="size">
    <div class="s-img" id="cat-img-h2"></div>
    <?php echo "<span><center><small>Wrist Watch <br> 15% Off </small><br> Rs. <b><big>1700</big></b> | <strike><small>Rs. 1980</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=h3">
    <div class="size">
    <div class="s-img" id="cat-img-h3"></div>
    <?php echo "<span><center><small>Multi Shade Watch <br> 7% Off </small><br> Rs. <b><big>1470</big></b> | <strike><small>Rs. 1580</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=h4">
    <div class="size">
    <div class="s-img" id="cat-img-h4"></div>
    <?php echo "<span><center><small>Wodden Style Watch <br> 47% Off </small><br> Rs. <b><big>800</big></b> | <strike><small>Rs. 1500</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=h5">
    <div class="size">
    <div class="s-img" id="cat-img-h5"></div>
    <?php echo "<span><center><small>Golden Watch <br> 17% Off </small><br> Rs. <b><big>1000</big></b> | <strike><small>Rs. 1200</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=h6">
    <div class="size">
    <div class="s-img" id="cat-img-h6"></div>
    <?php echo "<span><center><small>Proffesional Watch <br> 7% Off </small><br> Rs. <b><big>1400</big></b> | <strike><small>Rs. 1500</small></strike><center></span>"; ?>
    </div> 
</a>  
</div> 

    
    
    
<div id="cat-i">
<a href="productinfo.php?id=i1">
    <div class="size">
    <div class="s-img" id="cat-img-i1"></div>
    <?php echo "<span><center><small>Plastic Mug-Plate <br> 45% Off </small><br> Rs. <b><big>1300</big></b> | <strike><small>Rs. 2300</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=i2">
    <div class="size">
    <div class="s-img" id="cat-img-i2"></div>
    <?php echo "<span><center><small>Cup-Plate Set<br> 25% Off </small><br> Rs. <b><big>300</big></b> | <strike><small>Rs. 390</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=i3">
    <div class="size">
    <div class="s-img" id="cat-img-i3"></div>
    <?php echo "<span><center><small>Plastic Boxes <br> 40% Off </small><br> Rs. <b><big>500</big></b> | <strike><small>Rs. 850</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=i4">
    <div class="size">
    <div class="s-img" id="cat-img-i4"></div>
    <?php echo "<span><center><small>Tea Cup <br> 55% Off </small><br> Rs. <b><big>150</big></b> | <strike><small>Rs. 330</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=i5">
    <div class="size">
    <div class="s-img" id="cat-img-i5"></div>
    <?php echo "<span><center><small>Blue Plate Set <br> 22% Off </small><br> Rs. <b><big>550</big></b> | <strike><small>Rs. 700</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=i6">
    <div class="size">
    <div class="s-img" id="cat-img-i6"></div>
    <?php echo "<span><center><small>Wine Glass <br> 17% Off </small><br> Rs. <b><big>200</big></b> | <strike><small>Rs. 240</small></strike><center></span>"; ?>
    </div> 
</a>  
</div>
    
    
<div id="cat-j">
<a href="productinfo.php?id=j1">
    <div class="size">
    <div class="s-img" id="cat-img-j1"></div>
    <?php echo "<span><center><small>Head &amp Soulder <br> 50% Off </small><br> Rs. <b><big>90</big></b> | <strike><small>Rs. 180</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=j2">
    <div class="size">
    <div class="s-img" id="cat-img-j2"></div>
    <?php echo "<span><center><small>Dove Shampoo <br> 50% Off </small><br> Rs. <b><big>120</big></b> | <strike><small>Rs. 240</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=j3">
    <div class="size">
    <div class="s-img" id="cat-img-j3"></div>
    <?php echo "<span><center><small>Herbal Facewash <br> 40% Off </small><br> Rs. <b><big>250</big></b> | <strike><small>Rs. 400</small></strike><center></span>"; ?>
    </div> 
</a> 
<a href="productinfo.php?id=j4">
    <div class="size">
    <div class="s-img" id="cat-img-j4"></div>
    <?php echo "<span><center><small>Hair Fall Shampoo <br> 22% Off </small><br> Rs. <b><big>320</big></b> | <strike><small>Rs. 410</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=j5">
    <div class="size">
    <div class="s-img" id="cat-img-j5"></div>
    <?php echo "<span><center><small>Indulekha <br> 30% Off </small><br> Rs. <b><big>350</big></b> | <strike><small>Rs. 500</small></strike><center></span>"; ?>
    </div> 
</a>  
<a href="productinfo.php?id=j6">
    <div class="size">
    <div class="s-img" id="cat-img-j6"></div>
    <?php echo "<span><center><small>Wow Shampoo <br> 22% Off </small><br> Rs. <b><big>220</big></b> | <strike><small>Rs. 280</small></strike><center></span>"; ?>
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
</a></div>     
    
</div>
    
</div>    
    
 
</body>
</html>
