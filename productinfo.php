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
<head>
<title>My Shop</title>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="css2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
a{
    text-decoration: none;
    }    

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
    background-image: url( <?php echo "images/".$details1['pimgadd']; ?> );
    background-size: cover;
}
#fbtn{
    height: 80px;
    width: 250px;
    margin: 0 auto;
}

.btn{
    height:60px;
    width: 110px;
    float: left;
    margin: 5px;
    font-family: cursive;
    background-color: aqua;
    border-style: inset;
    border-radius: 8%;
}  
#content{
    margin-left: 3%;
    color: red;
    font-family: inherit;
     }

.btn:hover{
    height:60px;
    width: 110px;
    font-family: cursive;
    font-weight: bold;
    background-color: aqua;
    border-style: inset;
    border-radius: 8%;
    cursor: pointer;
}
#rate2{
    height: 70px;
    width: 190px;
    margin: 0 auto;
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

       
        
        <i class="fa fa-star-o" id="stara" style="font-size:36px"></i>
        <i class="fa fa-star-o" id="starb" style="font-size:36px"></i>
        <i class="fa fa-star-o" id="starc" style="font-size:36px"></i>
        <i class="fa fa-star-o" id="stard" style="font-size:36px"></i>
        <i class="fa fa-star-o" id="stare" style="font-size:36px"></i>
        <?php echo $details1['rating'];  ?> [<?php echo $details1['trating'];  ?>]- Rating
        
        <br><br>
        <h2 id="avilablity"><?php echo $details1['pavailable'];  ?></h2>
        
        <br>
        <ul>
        <li><?php echo $details1['pla'];  ?></li>
        <li><?php echo $details1['plb'];  ?></li>
        <li><?php echo $details1['plc'];  ?></li>
        <li><?php echo $details1['pld'];  ?></li>
        <li><?php echo $details1['ple'];  ?></li>
        </ul>
        
        <ul type="square">
        <li><h3><b>Quality Type :</b> <?php echo $details1['pquality'];  ?></h3></li>
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
        <a href="productinfophp.php?id=<?php echo $details1['pid'];  ?>"><button class="btn">Add to the Cart</button></a>
        <a href="#"><button class="btn">Proceed To Buy</button></a>
        </div>
            
        <div id="rate2">
        <a href='productinforate.php?id=1&pid=<?php echo $mysession1; ?>' target="_blank">
            <i class="fa fa-star-o" id="staraa" style="font-size:36px" onclick="starone();"></i>
        </a>
        <a href='productinforate.php?id=2&pid=<?php echo $mysession1; ?>' target="_blank">
            <i class="fa fa-star-o" id="starbb" style="font-size:36px" onclick="startwo();"></i>
        </a>
        <a href='productinforate.php?id=3&pid=<?php echo $mysession1; ?>' target="_blank">
            <i class="fa fa-star-o" id="starcc" style="font-size:36px" onclick="starthree();"></i>
        </a>
        <a href='productinforate.php?id=4&pid=<?php echo $mysession1; ?>' target="_blank">
            <i class="fa fa-star-o" id="stardd" style="font-size:36px" onclick="starfour();"></i>
        </a>
        <a href='productinforate.php?id=5&pid=<?php echo $mysession1; ?>' target="_blank">
            <i class="fa fa-star-o" id="staree" style="font-size:36px" onclick="starfive();"></i> 
        </a>
        
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
    var m = document.getElementById("cartno");
    m.innerHTML = <?php $x = $x-1; echo $x ?>;
    
    
    a = document.getElementById("stara");
    b = document.getElementById("starb");
    c = document.getElementById("starc");
    d = document.getElementById("stard");
    e = document.getElementById("stare");
    f = "<?php echo $details1['rating'];  ?>" ;  
        
    if(f>4.5)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star"); 
          c.setAttribute("class", "fa fa-star"); 
          d.setAttribute("class", "fa fa-star"); 
          e.setAttribute("class", "fa fa-star"); 
        }
    else if(f>4)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star"); 
          c.setAttribute("class", "fa fa-star"); 
          d.setAttribute("class", "fa fa-star"); 
          e.setAttribute("class", "fa fa-star-half-empty"); 
        }
    else if(f>3.5)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star"); 
          c.setAttribute("class", "fa fa-star"); 
          d.setAttribute("class", "fa fa-star"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
    else if(f>3)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star"); 
          c.setAttribute("class", "fa fa-star"); 
          d.setAttribute("class", "fa fa-star-half-empty"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
    else if(f>2.5)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star"); 
          c.setAttribute("class", "fa fa-star"); 
          d.setAttribute("class", "fa fa-star-o"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
    else if(f>2)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star"); 
          c.setAttribute("class", "fa fa-star-half-empty"); 
          d.setAttribute("class", "fa fa-star-o"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
    else if(f>1.5)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star"); 
          c.setAttribute("class", "fa fa-star-o"); 
          d.setAttribute("class", "fa fa-star-o"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
    else if(f>1)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star-half-empty"); 
          c.setAttribute("class", "fa fa-star-o"); 
          d.setAttribute("class", "fa fa-star-o"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
    else if(f>0.5)
        {
          a.setAttribute("class", "fa fa-star"); 
          b.setAttribute("class", "fa fa-star-o"); 
          c.setAttribute("class", "fa fa-star-o"); 
          d.setAttribute("class", "fa fa-star-o"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
    else if(f>0)
        {
          a.setAttribute("class", "fa fa-star-half-empty"); 
          b.setAttribute("class", "fa fa-star-o"); 
          c.setAttribute("class", "fa fa-star-o"); 
          d.setAttribute("class", "fa fa-star-o"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
    else
        {
          a.setAttribute("class", "fa fa-star-o"); 
          b.setAttribute("class", "fa fa-star-o"); 
          c.setAttribute("class", "fa fa-star-o"); 
          d.setAttribute("class", "fa fa-star-o"); 
          e.setAttribute("class", "fa fa-star-o"); 
        }
        
        
        
        
        
        
        //Rating System Coding
        
        
        
    aa = document.getElementById("staraa");
    bb = document.getElementById("starbb");
    cc = document.getElementById("starcc");
    dd = document.getElementById("stardd");
    ee = document.getElementById("staree");
    
    aa.onmouseover = function(){mone()};    
    bb.onmouseover = function(){mtwo()};
    cc.onmouseover = function(){mthree()};
    dd.onmouseover = function(){mfour()};
    ee.onmouseover = function(){mfive()};
        
       
    bb.onclick = function(){mtwo()};
    cc.onclick = function(){mthree()};
    dd.onclick = function(){mfour()};
    ee.onclick = function(){mfive()};
        
        
    function mone()
        {
            aa.setAttribute("class", "fa fa-star");
            aa.onmouseout = function(){mm()};
        }
    function mtwo()
        {
            aa.setAttribute("class", "fa fa-star");
            bb.setAttribute("class", "fa fa-star");
            aa.onmouseout = function(){mm()};
            bb.onmouseout = function(){mm()};
        }
    function mthree()
        {
            aa.setAttribute("class", "fa fa-star");
            bb.setAttribute("class", "fa fa-star");
            cc.setAttribute("class", "fa fa-star");
            aa.onmouseout = function(){mm()};
            bb.onmouseout = function(){mm()};
            cc.onmouseout = function(){mm()};
        }
    function mfour()
        {
            aa.setAttribute("class", "fa fa-star");
            bb.setAttribute("class", "fa fa-star");
            cc.setAttribute("class", "fa fa-star");
            dd.setAttribute("class", "fa fa-star");
            aa.onmouseout = function(){mm()};
            bb.onmouseout = function(){mm()};
            cc.onmouseout = function(){mm()};
            dd.onmouseout = function(){mm()};
        }
    function mfive()
        {
            aa.setAttribute("class", "fa fa-star");
            bb.setAttribute("class", "fa fa-star");
            cc.setAttribute("class", "fa fa-star");
            dd.setAttribute("class", "fa fa-star");
            ee.setAttribute("class", "fa fa-star");
            aa.onmouseout = function(){mm()};
            bb.onmouseout = function(){mm()};
            cc.onmouseout = function(){mm()};
            dd.onmouseout = function(){mm()};
            ee.onmouseout = function(){mm()};
        }
          
    
        function mm()
        {
            aa.setAttribute("class", "fa fa-star-o");
            bb.setAttribute("class", "fa fa-star-o");
            cc.setAttribute("class", "fa fa-star-o");
            dd.setAttribute("class", "fa fa-star-o");
            ee.setAttribute("class", "fa fa-star-o");
        }
        
    
        
</script>
    
</body>
</html>