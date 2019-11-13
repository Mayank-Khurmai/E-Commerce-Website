<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['emailadd']))
{
    
    $mysession= " Empty";
}
else
{
    $mysession = $_SESSION['emailadd'];
}

    $mysession = $mysession;
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
<link rel="stylesheet" href="css2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>

#right-nav-upper1{
    width:48%;
    height:50px;
    z-index: 1;
    float: right;
    margin-top: 2px;
    font-size: 17px;
    margin-right: 10px;
    border-radius: 10px;
    position: relative;
    background-color: darkgray;
    padding: 10px;
}
#right-nav-upper2{
    width:100%;
    height:50px;
    z-index: 1;
    float: right;
    display: none;
    margin-top: -32px;
    margin-left: -9px;
    border-radius: 10px;
    position: absolute;
    background-color: darkgray;
    padding: 10px;
}

#right-nav-upper1:hover #right-nav-upper2{
   display: block;
    background-color: darksalmon;
    }
#login-as{
     font-size: 20px;
    margin-left: 28%;
    margin-top: 6%;
    }   
#content{
    margin-top: 0px;
    margin-left: 3%;
    color: red;
    font-family: inherit;
       } 
#content1{
    margin-left: 3%;
    margin-top: 1%;
    margin-bottom: -1%;
    font-family: inherit;
       }
#tdtwo{
    width: 70%;     
       }
#td2length{
    width: 100%;
       }
#sliderval1{
    width: 80%;
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
<div id="left-nav">
    <form method="post" action="search.php">
<input type="search" name="searchval" id="search-box" placeholder="Search the Products"/>
<input type="submit" name="search" value="Search Now" id="search-btn"/>
    </form>
</div>
    
<div id="right-nav"> 

   
<div id="right-nav-upper1">
    <i class="fa fa-user" style="font-size:20px; margin-right:10px; margin-left:10px;"></i>
    <?php echo $details['uname']; ?> -- <?php echo $details['emailadd']; ?>
    
<div id="right-nav-upper2">
    <span id="login-as"><a href="floginadmin.php">Login as Admin</a></span>
</div>
</div>


  
    
    
<div id="menu">
 <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="access.php">Accesories</a></li>
    <li><a href="offer.php">Offers Zone</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="fcontact.php">Contact Us</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="cart.php"><i class="fa fa-shopping-cart" style="font-size:24px"><sup><span id="cartno">0</span></sup></i></a></li>
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
<form method="post" action="searchcat.php">
<table width="100%" height="300px">

<tr>
<td><p id="product-type">Product Type</p></td>
<td id="tdtwo">
<select id="td2length" name="pcat">
<option value="All">All types</option>
<option value="TV and Appliances">TV and Appliances </option>
<option value="Mens Products">Mens Products</option>
<option value="Womens Products">Womens Products</option>
<option value="Furnitures">Furnitures</option>
<option value="Electronics">Electronics</option>
<option value="Clothes and Fashion">Clothes and Fashion</option>
<option value="Beauty Products">Beauty Products</option>
<option value="Accessories">Accessories</option>
<option value="Home and Grocery">Home and Grocery</option>
<option value="Mobiles and Laptops">Mobiles and Laptops</option>
<option value="Health and Sports Wear">Health and Sports Wear</option>
</select>    
</td>
</tr>
<tr>
<td><p id="rating">Choose rating</p></td>
<td id="tdtwo">
<select id="td2length" name="prating">
<option value="0">All types</option>
<option value="0">0+</option>
<option value="1">1+</option>
<option value="2">2+</option>
<option value="3">3+</option>
<option value="4">4+</option>
<option value="5">5+</option>
</select>    
</td>
</tr>
<tr>
<td><p id="prange">Price Range</p></td> 
<td id="tdtwo">
    <span><sup>10</sup></span><input type="range" name="prange" min="10" id="sliderval1" max="20000" oninput="slider();"><span><sup>20000</sup></span>
</td>
</tr>
<tr>
<td></td> 
<td id="tdtwo"><span id="sliderval2"></span></td>
</tr>
<tr>
<td><p id="product-type">Product Quality</p></td>
<td id="tdtwo">
<select id="td2length" name="pquality">
<option value="All">All types</option>
<option value="Original">Original or Branded</option>
<option value="Local">Local or Duplicate</option>
</select>    
</td>
</tr>
<tr>
<tr>
<td colspan="2"><input type="submit" value="Search" name="searchcat"></td>
</tr>
</table>    
</form>
    
</div>     

</div>

<div id="side-right-div">

<div id="side-right-div-border">
    
    

    <?php    
        
        $db = mysqli_connect("localhost", "root", "", "myshopdb");
        $sql = "SELECT * FROM productinfo";
        $records = mysqli_query($db, $sql);
        
    
     while($row = $records->fetch_assoc()) 
             {
        
        echo " <a href='productinfo.php?id=".$row['pid']." '><div id='all-size'> 
                <div id='all-img' style='background:url(images/".$row['pimgadd']."); background-size:cover;' ></div>
                <span><center><small>".$row["pname"]. "<br>" .$row["off"]. "% Off </small> 
                <br> Rs. <b><big>" .$row["pprice"]. "</big></b> | <strike><small>Rs." .$row["pmrp"]. "</small></strike><center></span>
               </div></a>
        "; 
     }
    
        ?>
  
</div>
    
</div>
    
</div>    
    
 
    
<script>
    <?php    
    $mysession2 = $_SESSION['emailadd'];
    $db = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql = "SELECT * FROM carttable WHERE emailadd='$mysession2'";
    $records = mysqli_query($db, $sql);
    $x = 1; 
    while($row = $records->fetch_assoc()) 
        {
          $x = $x + 1;
         }
     
        ?>
    var a = document.getElementById("cartno");
    a.innerHTML = <?php $x = $x-1; echo $x ?>;
    
     window.omload = slider();
    function slider(){
        var one = document.getElementById("sliderval1").value;
        var two = document.getElementById("sliderval2");
        two.innerHTML = "Rs. 0 to " + one;
    }
</script>

</body>
</html>