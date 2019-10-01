<?php
error_reporting(0);
session_start();
?>


<?php
    $mysession = $_SESSION['emailadd'];
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
<link rel="stylesheet" href="animate.css">
<style>
*{
    box-sizing: border-box;    
    }    
#btn{
    width: 50%;
    height: auto;
    margin: 0 auto;
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
#menu ul li a:hover{
    background-color: brown;
    border-radius: 6px;
    cursor: not-allowed;
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
#add-field{
    width: 80%;
    margin: 0 auto;
    margin-top: 10px;
    padding: 2%;
    padding-right: 15%;
    padding-left: 15%;
    border: 2px solid black;
    }    
table{
    width: 100%;
    }
input{
    width: 80%;
    height: 25px;
    }
select{
    width: 80%;
    height: 25px;
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
<input type="search" name="search" onkeyup="searchfn()" id="search-box" placeholder="Search the Products"/>
<input type="submit" value="Search Now" id="search-btn"/>
</form>
</div>
    
<div id="right-nav"> 

    
<div id="right-nav-upper1">
    <i class="fa fa-user" style="font-size:20px; margin-right:10px; margin-left:10px;"></i>
    <?php echo $details['uname']; ?> -- <?php echo $details['emailadd']; ?> -- <?php echo "[Admin]"; ?>
    
<div id="right-nav-upper2">
    <span id="login-as"><a href="index.php">Logout as Admin</a></span>
</div>
</div>

<div id="menu">
 <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Accesories</a></li>
    <li><a href="#">Offers Zone</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">Logout</a></li>
     <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:24px"><span id="cartno"><sup>0</sup></span></i></a></li>
 </ul>
</div>
</div>
</nav>
<div id="white-space-nav"></div>
    
    
<div id="side-fix-div">

<div id="search-by-category-div">
<a href="adminhome.php"><h1 id="search-by-category" class="animated zoomIn infinite">Welcome to C-Panel</h1></a>

<div id="btn">

<a href="addproduct.php"><button class="btn-size">Add Product</button></a>
<a href="remproduct.php"><button class="btn-size">Remove Product</button></a>
<a href="updateproduct.php"><button class="btn-size">Update Product</button></a>
<a href="deleteuser.php"><button class="btn-size">Remove User</button></a>

    
</div>

</div> 
    

<div id="search-by-category-div2"> 

    

    
</div>     

</div>

<div id="side-right-div">     
    <div id="an-div">
        <form method="post" action="productadd.php" enctype="multipart/form-data">   
        <fieldset id="add-field">
        <legend>Add Product</legend>
        <table>
        <tr>
        <td>Product Name</td>
        <td><input type="text" placeholder="Product Name" name="pname"></td>
        </tr>
        <tr>
        <td>Product M.R.P</td>
        <td><input type="text" placeholder="Product M.R.P" name="pmrp"></td>
        </tr>
        <tr>
        <td>Product Price</td>
        <td><input type="text" placeholder="Product Price" name="pprice"></td>
        </tr>
        <tr>
        <td>Price Save</td>
        <td><input type="text" placeholder="Price Save" name="psave"></td>
        </tr>
        <tr>
        <td>Price Off</td>
        <td><input type="text" placeholder="Price Off" name="off"></td>
        </tr>
        <tr>
        <td>Product Availability</td>
        <td>
<select name="pavail">
<option value="Currently Available" >Currently Available</option>
<option value="Currently Unavailable">Currently Unavailable</option>
</select>    
</td>
        </tr>
        <tr>
        <td>Product Details 1</td>
        <td><input type="text" name="pla"></td>
        </tr>
        <tr>
        <td>Product Details 2</td>
        <td><input type="text" name="plb"></td>
        </tr>
        <tr>
        <td>Product Details 3</td>
        <td><input type="text" name="plc"></td>
        </tr>
        <tr>
        <td>Product Details 4</td>
        <td><input type="text" name="pld"></td>
        </tr>
        <tr>
        <td>Product Details 5</td>
        <td><input type="text" name="ple"></td>
        </tr>
        <tr>
        <td>Product Description</td>
        <td><textarea rows="10" cols="49" placeholder="Write Product Description Here!" name="pdesc"></textarea></td>
        </tr>
        <tr>
        <td>Upload Image</td>
        <td><input type="file"  name="pimgadd"></td>
        </tr>
        <tr>
        <td><input type="submit" name="addbtn" value="Add Now"></td>
        </tr>
            
            
        </table>
        </fieldset>
        </form> 
            
        </div>
</div>
    
</div>    
    

</body>
</html>