<!DOCTYPE html>
<html>
<head>
<title>My Shop</title>
<link rel="stylesheet" href="css.css">
</head>
<body>

<div id="outer-box">
    
<header>
<h1 id="brand-name">myshop.com</h1>
<p id="tag-lines">India`s largest Online e-commerce website</p>
</header>
<div id="white-space-header"></div>
    
    
<nav>
<form>
<input type="search" name="search" id="search-box" placeholder="Search this site"/>
<input type="submit" value="Search Now" id="search-btn"/>
</form>
<table id="nav-table">
<tr>
<td id="nav-box"><a href="#">Home</a></td>
<td id="nav-box"><a href="#">Accesories</a></td>
<td id="nav-box"><a href="#">Today's Deal</a></td>
<td id="nav-box"><a href="#">Offer Zone</a></td>
<td id="nav-box"><a href="#">Contact Us</a></td>
<td id="nav-box-cart"><a href="#"><img src="images/cart.gif" alt="Cart" /></a></td>
</tr>
</table>
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
<div class="size">
    <div class="s-img" id="cat-img-a1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-a2"></div>
    <?php echo "<span><center><small>Sreats Men's Regular <br> 18% Off </small><br> Rs. <b><big>550</big></b> | <strike><small>Rs. 710</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-a3"></div>
    <?php echo "<span><center><small>Lion's roar Shirt <br> 25% Off </small><br> Rs. <b><big>770</big></b> | <strike><small>Rs. 1180</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-a4"></div>
    <?php echo "<span><center><small>Dennim Blue  <br> 35% Off </small><br> Rs. <b><big>790</big></b> | <strike><small>Rs. 1340</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-a5"></div>
    <?php echo "<span><center><small>Lingo Men's Cotton <br> 25% Off </small><br> Rs. <b><big>470</big></b> | <strike><small>Rs. 680</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-a6"></div>
    <?php echo "<span><center><small>campus Stura men's <br> 15% Off </small><br> Rs. <b><big>540</big></b> | <strike><small>Rs. 600</small></strike><center></span>"; ?>
    </div>  
</div>
    
    
    
<div id="cat-b">
<div class="size">
    <div class="s-img" id="cat-img-b1"></div>
    <?php echo "<span><center><small>Quirky T-shirt <br> 40% Off </small><br> Rs. <b><big>400</big></b> | <strike><small>Rs. 780</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-b2"></div>
    <?php echo "<span><center><small>Nighty Kurti <br> 50% Off </small><br> Rs. <b><big>550</big></b> | <strike><small>Rs. 1100</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-b3"></div>
    <?php echo "<span><center><small>Elvis Crop <br> 40% Off </small><br> Rs. <b><big>620</big></b> | <strike><small>Rs. 1180</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-b4"></div>
    <?php echo "<span><center><small>Party Frok <br> 23% Off </small><br> Rs. <b><big>450</big></b> | <strike><small>Rs. 650</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-b5"></div>
    <?php echo "<span><center><small>Style Villi T-shirt <br> 25% Off </small><br> Rs. <b><big>770</big></b> | <strike><small>Rs. 960</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-b6"></div>
    <?php echo "<span><center><small>Party Fashion Gown <br> 15% Off </small><br> Rs. <b><big>1070</big></b> | <strike><small>Rs. 1280</small></strike><center></span>"; ?>
</div>  
</div>
    

    
    
<div id="cat-c">
<div class="size">
    <div class="s-img" id="cat-img-c1"></div>
    <?php echo "<span><center><small>Kids Vockey-tockey <br> 25% Off </small><br> Rs. <b><big>1000</big></b> | <strike><small>Rs. 1500</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-c2"></div>
    <?php echo "<span><center><small> Hfid Speaker <br> 20% Off </small><br> Rs. <b><big>1750</big></b> | <strike><small>Rs. 2180</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-c3"></div>
    <?php echo "<span><center><small>2-USB Speaker <br> 35% Off </small><br> Rs. <b><big>640</big></b> | <strike><small>Rs. 970</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-c4"></div>
    <?php echo "<span><center><small>Resberi Pi <br> 10% Off </small><br> Rs. <b><big>1200</big></b> | <strike><small>Rs. 1380</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-c5"></div>
    <?php echo "<span><center><small>Mobile Stand <br> 40% Off </small><br> Rs. <b><big>230</big></b> | <strike><small>Rs. 480</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-c6"></div>
    <?php echo "<span><center><small>USB Hardisk <br> 15% Off </small><br> Rs. <b><big>1770</big></b> | <strike><small>Rs. 1980</small></strike><center></span>"; ?>
</div>  
</div>    

    
    
<div id="cat-d">
<div class="size">
    <div class="s-img" id="cat-img-d1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-d2"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-d3"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-d4"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-d5"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-d6"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
</div>

    
    
<div id="cat-e">
<div class="size">
    <div class="s-img" id="cat-img-e1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-e2"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-e3"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-e4"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-e5"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-e6"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
</div>    

    
    
<div id="cat-f">
<div class="size">
    <div class="s-img" id="cat-img-f1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-f2"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-f3"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-f4"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-f5"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-f6"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
</div> 
 
    
    
<div id="cat-g">
<div class="size">
    <div class="s-img" id="cat-img-g1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-g2"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-g3"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-g4"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-g5"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-g6"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
</div> 

    
    
<div id="cat-h">
<div class="size">
    <div class="s-img" id="cat-img-h1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-h2"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-h3"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-h4"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-h5"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-h6"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
</div> 

    
    
<div id="cat-i">
<div class="size">
    <div class="s-img" id="cat-img-i1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-i2"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-i3"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-i4"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-i5"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-i6"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
</div> 

    
    
<div id="cat-j">
<div class="size">
    <div class="s-img" id="cat-img-j1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-j2"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-j3"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-j4"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-j5"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-j6"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
</div>  
 
    
    
<div id="cat-k">
<div class="size">
    <div class="s-img" id="cat-img-k1"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-k2"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-k3"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div> 
<div class="size">
    <div class="s-img" id="cat-img-k4"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-k5"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
<div class="size">
    <div class="s-img" id="cat-img-k6"></div>
    <?php echo "<span><center><small>Desnis Men's Shirt <br> 20% Off </small><br> Rs. <b><big>670</big></b> | <strike><small>Rs. 980</small></strike><center></span>"; ?>
</div>  
</div>     
    
</div>
    
</div>    
    
</body>
</html>