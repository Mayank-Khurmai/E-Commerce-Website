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
    
    
<div id="side-fix-div-hth"></div>
    
    <div id="product-desc-outer-contact">
        
<form method="post" action="contact.php">
<fieldset id="signup-fieldset">
<legend>Contact Us</legend>
<table id="contact-table">
<tr>
<td>Full Name</td>
<td><input type="text" name="cname" required="required"></td>
</tr>
<tr>
<td>E-mail id</td>
<td><input type="email" name="cemail" required="required"></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="tel>" name="cmobile" required="required"></td>
</tr>
<tr>
<td>Subject</td>
<td><input type ="text" name="csubject" required="required"></td>
</tr>
<tr>
<td colspan="2"><textarea name="ctext" cols="37" rows="15">Type Your Message Here</textarea></td>
</tr>
<tr>
<td colspan="2">
    <input type="submit" id="submit-btn-cnt" name="registerbtn" value="Submit Query">
</td>
</tr>
</table>
</fieldset>    
</form>

</div>
        
   
    
</div>    
    
</body>
</html>
