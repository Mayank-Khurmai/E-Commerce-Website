<?php
session_start();
?>


<?php
    $mysession = $_SESSION['emailadd'];
    $db = id="tag-lines">India`s largest Online e-commerce website</p>
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
<td id="nav-box-cart"><a href="#">Cart</a></td>
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
<tr>", "root", "", "myshopdb");
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
<link rel="stylesheet" href="animate.css">
<style>
*{
    box-sizing: border-box;    
    }    
#btn{
    width: 50%;
    height: auto;
    marghhzhwhshbs
    ansnnwnsnshbebwhjjsbs
   anenwnsjjwhwjbebeneje
   nsbwjwnmejwjejejne
   jsnnnwnjsjwjjwhwhhenww
   jsjjekwksiisjsjsjmskwkekje
   nsnmemskjwjwjjwjwjwjejjeje
   jjwjwjjwjwjjwjwjwjwjjsjsjs
   msjjjejwuwuushbejejjejjejwn
   mwjjejjeiejb3bbIeuu3hejnwnwm
   nsjwnwjjwjwhbwja8uhebebin: 0 auto;
    } 
.btn-size{
    width: 100%;
    height: 100px;
    margin: 5px;
    border-width: 2px;
    background-color: aquamarine;
    border-radius: 5px;
    font-weight: bold;
    font-size: 15px;
    border-style: outset;
    }
.btn-size:hover{
    width: 100%;
    height: 100px;
    margin: 5px;
    border-width: 2px;
    background-color: aquamarine;
    border-radius: 8px;
    font-weight: bold;
    font-size: 17px;
    border-style: inherit;
    cursor: pointer;
    }
#an-div{
    width: 100%;
    height: auto;
    }
#animated zoomIn infinite{
    margin: 0 auto;
    font-size: 50px;
    }
td{
    height: 40px;
    }
table{
    margin: 0 auto;
    margin-top: 2%;
    margin-bottom: 2%;
    }
th{
    background-color: greenyellow;
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
<input type="search" name="search" onkeyup="searchfn()" id="search-box" placeholder="Search the Products"/>
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
    
    
<div id="side-fix-div">

<div id="search-by-category-div">
<h1 id="search-by-category" class="animated zoomIn infinite">Welcome to C-Panel</h1>

<div id="btn">

<a href="addproduct.php"><button class="btn-size">Add Product</button></a>
<a href="remproduct.php"><button class="btn-size">Remove Product</button></a>
<a href="updateproduct.php"><button class="btn-size">Update Product</button></a>
<a href="deleteproduct.php"><button class="btn-size">Remove User</button></a>

    
</div>

</div> 
    

<div id="search-by-category-div2"> 

    

    
</div>     

</div>

<div id="side-right-div">     
    <div id="an-div">
      
    <?php    
        
    $db = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql = "SELECT * FROM productinfo";
    $records = mysqli_query($db, $sql);
        
        echo "<table border='2' width='70%'>";
        echo "<tr> <th back>Product Id</th> <th> Product Name </th> <th>Delete</th>  ";
             while($row = $records->fetch_assoc()) 
             {
                echo   "<tr> <td align='center'>" .$row["pid"].  "</td> <td align='center'>" .$row["pname"].  "</td> <td align='center'><i class='fa fa-trash' aria-hidden='true' style='cursor:pointer'></i</td> </tr>";
             }
        
        echo "</table>";
        
        ?>
        
            
        </div>
</div>
    
</div>    
    

</body>
</html>
