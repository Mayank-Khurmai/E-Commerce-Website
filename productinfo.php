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

<?php
    $mysession1 = $_GET['id'];
    $db1 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql1 = "SELECT * FROM productinfo WHERE pid='$mysession1'";
    $records1 = mysqli_query($db1, $sql1);
    $details1 = mysqli_fetch_assoc($records1);
?>

<?php
    $mysession2 = $_SESSION['emailadd'];
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
    
    #side-fix-div-photo{
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
    background-image: url( <?php echo $details1['pimgadd']; ?> );
    background-size: cover;
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
    
    
<div id="side-fix-div-photo"></div>
    
    <div id="product-desc-outer">
    
        <div id="product-name-div">
            
            
        <h1><?php echo $details1['pname'];  ?></h1>
        </div>
        
        <table>
        <tr>
        <td>M.R.P : </td>  
        <td><strike>Rs. <?php echo $details1['pmrp'];  ?></strike></td>
        </tr>
        <tr>
        <td></td>
        <td><?php echo $details1['off'];  ?>% Off</td>
        </tr>
        <tr>
        <td>Price : </td> 
        <td><big><b><font color="red">Rs. <?php echo $details1['pprice'];  ?></font></b></big></td>
        </tr>
        <tr>
        <td>You Save : </td>
        <td><font color="red">Rs. <?php echo $details1['psave'];  ?></font></td>
        </tr>
        <tr>
        <td></td>
        <td><small>Inclusive Of all taxes</small></td>
        </tr>
        </table>

        <br>
        
        <h2 id="avilablity"><?php echo $details1['pavailable'];  ?></h2>
        
        <br>
        
        <ul>
        <li><?php echo $details1['pla'];  ?></li>
        <li><?php echo $details1['plb'];  ?></li>
        <li><?php echo $details1['plc'];  ?></li>
        <li><?php echo $details1['pld'];  ?></li>
        <li><?php echo $details1['ple'];  ?></li>
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
          
        <p><?php echo $details1['pdesc'];  ?>  </p>
        <br>
        <div id="fbtn">
        <button class="btn" onclick="cartadd()">Add To Cart</button>
        <button class="btn">Proceed to Buy</button>
        </div>
            
    </div>
    
</div>    

<script>
 function cartadd()
    {
 
       window.alert("<?php $k = $details1['pname']; echo  "$k , Added to the Cart"; ?>");   
        
        
<?php
    $db4 = mysqli_connect("localhost", "root", "", "myshopdb");
    $a = $_SESSION['emailadd'];
    $b = $details1['pname'];
    $c = $details1['pprice'];
    $p = $details2['ppone']; 
    $q = $details2['pptwo'];
    $r = $details2['ppthree']; 
    $s = $details2['ppfour'];
       if ($p == 0) 
        {
        $sql4 = "UPDATE carttable SET pone='$b' , ppone='$c' WHERE emailadd='$a'";
        mysqli_query($db4, $sql4);
        }
        else if ($q == 0)
        {   
        $sql4 = "UPDATE carttable SET ptwo='$b' , pptwo='$c' WHERE emailadd='$a'";
        mysqli_query($db4, $sql4);
        }
        
        else if ($r == 0)
        {   
        $sql4 = "UPDATE carttable SET pthree='$b' , ppthree='$c' WHERE emailadd='$a'";
        mysqli_query($db4, $sql4);
        }
        else if ($s == 0)
        {   
        $sql4 = "UPDATE carttable SET pfour='$b' , ppfour='$c' WHERE emailadd='$a'";
        mysqli_query($db4, $sql4);
        }
        else
        {   
        $sql4 = "UPDATE carttable SET pfive='$b' , ppfive='$c' WHERE emailadd='$a'";
        mysqli_query($db4, $sql4);
        }


?>
            
    }
</script>
    
</body>
</html>
