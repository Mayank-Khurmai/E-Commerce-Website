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


<?php
if(! $_SESSION)
{
    $mysession2= NULL;
}
else
{
    $mysession2 = $_SESSION['emailadd'];
}
    $mysession2=$mysession2;
    $db2 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql2 = "SELECT * FROM carttable WHERE emailadd='$mysession2'";
    $records2 = mysqli_query($db2, $sql2);
    $details2 = mysqli_fetch_assoc($records2);
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

th{
    text-align: center;
    }    

td{
    text-align: center;
    }    

#tdbg1, th{
    background-color: yellowgreen;
    }
    
#tdbg2{
    background-color: yellowgreen;
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
    <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:24px"><span id="cartno"><sup>0</sup></span></i></a></li>
 </ul>
</div>
</div>
</nav>
<div id="white-space-nav"></div>
    

<div id="side-fix-div-hth"></div>
    
 <div id="product-desc-outer-contact">
        
<form method="post" action="contact.php">
<fieldset id="signup-fieldset">
<legend>My Cart</legend>
<table id="contact-table" border="1" >
<tr>
    <th> Sr. No.</th>
<th>  <?php echo "Product Name" ?>  </th>
<th>  <?php echo "Price" ?>  </th>
<th>  <?php echo "Delete" ?>  </th>
</tr>
<tr>
    <td> 1</td>
<td>  <?php echo $details2['pone']; ?>  </td>
<td>  <?php echo $details2['ppone']; ?>  </td>
<td><i class="fa fa-trash" aria-hidden="true" style="cursor:pointer" onclick="remove1()"></i></td>
</tr>
<tr>
    <td>2</td>
<td>  <?php echo $details2['ptwo']; ?>  </td>
<td>  <?php echo $details2['pptwo']; ?> </td>
<td><i class="fa fa-trash" aria-hidden="true" style="cursor:pointer" onclick="remove2()"></i></td>
</tr>
<tr>
    <td>3</td>
<td>  <?php echo $details2['pthree']; ?>  </td>
<td>  <?php echo $details2['ppthree']; ?>  </td>
<td><i class="fa fa-trash" aria-hidden="true" style="cursor:pointer" onclick="remove3()"></i></td>
</tr>
<tr>
    <td>4</td>
<td>  <?php echo $details2['pfour']; ?>  </td>
<td>  <?php echo $details2['ppfour']; ?>  </td>
<td><i class="fa fa-trash" aria-hidden="true" style="cursor:pointer" onclick="remove4()"></i></td>
</tr>
<tr>
    <td>5</td>
<td>  <?php echo $details2['pfive']; ?>  </td>
<td>  <?php echo $details2['ppfive']; ?> </td>
<td><i class="fa fa-trash" aria-hidden="true" style="cursor:pointer" onclick="remove5()"></i></td>
</tr>
<tr>
    <td colspan="2" id="tdbg1">Total</td>
<td colspan="2" id="tdbg2">
   <?php 
         $a = $details2['ppone'];
         $b = $details2['pptwo'];
         $c = $details2['ppthree'];
         $d = $details2['ppfour'];
         $e = $details2['ppfive'];
         $f = ($a + $b + $c + $d + $e);
         echo $f;
    ?>
</td>
</tr>
</table>
<br>
    <div id="bybtn">
        <input type="submit" value="Buy Now" class="btn">
    </div>
</fieldset>    
</form>

</div>
    
    
</div>    
  
    
    <script>
     function remove1()
        {
            window.alert("<?php $k = $details2['pone']; echo  "$k , Removed from the Cart"; ?>");
            window.open("remove1.php", "_self");
        }

    function remove2()
        {
            window.alert("<?php $k = $details2['ptwo']; echo  "$k , Removed from the Cart"; ?>");
            window.open("remove2.php", "_self");
        }
    function remove3()
        {
            window.alert("<?php $k = $details2['pthree']; echo  "$k , Removed from the Cart"; ?>");
            window.open("remove3.php", "_self");          
        }
    function remove4()
        {
            window.alert("<?php $k = $details2['pfour']; echo  "$k , Removed from the Cart"; ?>");
            window.open("remove4.php", "_self");
        }
        
    function remove5()
        {
            window.alert("<?php $k = $details2['pfive']; echo  "$k , Removed from the Cart"; ?>");
            window.open("remove5.php", "_self");
        }
    </script>
</body>
</html>
