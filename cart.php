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
<htmlll>
<head>
<title>My Shop</title>
<link rel="stylesheet" href="csts.css">
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
.btn1{
    height:60px;
    width: 100px;
    font-family: cursive;
    background-color: aqua;
    border-style: inset;
    border-radius: 8%;
}

.btn1:hover{
    height:60px;
    width: 100px;
    font-family: cursive;
    font-weight: bold;
    background-color: aqua;
    border-style: inset;
    border-radius: 8%;
    cursor: pointer;
}    

td{
    text-align: center;
    height: 25px;
    }    

#tdbg1, th{
    background-color: yellowgreen;
    height: 32px;
    }
    
#tdbg2{
    background-color: yellowgreen;
    }  
#content{
    margin-left: 3%;
    color: red;
    font-family: inherit;
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
    <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:24px"><sup><span id="cartno">0</span></sup></i></a></li>
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


    
<?php    
    $mysession2 = $_SESSION['emailadd'];
    $db = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql = "SELECT * FROM carttable WHERE emailadd='$mysession2'";
    $records = mysqli_query($db, $sql);
        echo "<table border='2' width='90%' align='center'>";
    
        echo "<tr> <th width='15%'> Sr. No. </th>  <th> Product Name </th>  <th width='22%'>Item Price</th>   <th width='12%'>Delete</th>  ";
        $x = 1; 
        $y = 0;
        while($row = $records->fetch_assoc()) 
             {
                $z = $row["pid"];
                echo   "<tr> <td align='center'>" .$x.  "</td><td align='center'>" .$row["pname"].  "</td> <td align='center'>" .$row["pprice"].  ".00</td> <td align='center'><a href="."removecart.php?id="."$z"."><i class='fa fa-trash' aria-hidden='true'></i></a></td> </tr>";
                $x = $x + 1;
                $y = $y + $row["pprice"];
            }
    
        echo "<tr>  <th colspan='2'> Total Cost </th>     <th colspan='2'>".$y.".00</th>  ";
    
        echo "</table>";
        
        ?>
     
    
<br>
    <div id="bybtn">
        <input type="submit" value="Buy Now" class="btn1">
    </div>
</fieldset>    
</form>

</div>
    
    
</div>    
  
<script>
    
    var a = document.getElementById("cartno");
    a.innerHTML = <?php $x = $x-1; echo $x ?>;
    
    </script>
   
</body>
</html>
