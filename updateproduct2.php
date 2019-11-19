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
<?php
    $a = $_GET['id'];
    $db1 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql1 = "SELECT * FROM productinfo WHERE pid='$a'";
    $records1 = mysqli_query($db1, $sql1);
    $details1 = mysqli_fetch_assoc($records1);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Shop</title>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="css2.css">
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
#menu ul li a:hover{
    background-color: brown;
    border-radius: 6px;
    cursor: not-allowed;
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
table{
    width: 100%;
    }
input{
    width: 80%;
    height: 25px;
    }
#select-avail{
    width: 80%;
    height: 25px;
    }
#select-four{
    width: 39%;
    }
#td-one{
    width: 25%;
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
     <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:24px"></i></a></li>
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
<a href="userquery.php"><button class="btn-size">User Queries</button></a>
<a href="deleteuser.php"><button class="btn-size">Remove User</button></a>

    
</div>

</div> 
    

<div id="search-by-category-div2"> 

    

    
</div>     

</div>

<div id="side-right-div">     
    <div id="an-div">
        <form method="post" action="updateproductphp.php?id= <?php echo $_GET['id']; ?> " enctype="multipart/form-data">   
        <fieldset id="add-field">
        <legend>Review &amp; Update Product</legend>
        <table>
        
        <tr>
        <td id="td-one">Product Id</td>
        <td><input type="text" disabled="disabled" name="pid" value="<?php echo $_GET['id']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Product Name</td>
        <td><input type="text" placeholder="Product Name" name="pname" value="<?php echo $details1['pname']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Product M.R.P</td>
        <td><input type="text" id="pmrp" placeholder="Product M.R.P" name="pmrp" value="<?php echo $details1['pmrp']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Product Price</td>
        <td><input type="text" id="pprice" placeholder="Product Price" oninput="saveoff();"name="pprice" value="<?php echo $details1['pprice']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Price Save</td>
        <td><input type="text" id="psave" placeholder="Price Save" name="psave" ></td>
        </tr>
        <tr>
        <td id="td-one">Price Off</td>
        <td><input type="text" id="poff" placeholder="Price Off" name="off"></td>
        </tr>
        <tr>
        <td id="td-one">Product Category</td>
        <td>
<select id="select-four" name="cata">
<option value="All" <?php if($details1['cata']=="All") echo "selected=\"selected\""; ?>>All types</option>
<option value="TV and Appliances" <?php if($details1['cata']=="TV and Appliances") echo "selected=\"selected\""; ?>>TV and Appliances </option>
<option value="Mens Products" <?php if($details1['cata']=="Mens Products") echo "selected=\"selected\""; ?>>Mens Products</option>
<option value="Womens Products" <?php if($details1['cata']=="Womens Products") echo "selected=\"selected\""; ?>>Womens Products</option>
<option value="Furnitures" <?php if($details1['cata']=="Furnitures") echo "selected=\"selected\""; ?>>Furnitures</option>
<option value="Electronics" <?php if($details1['cata']=="Electronics") echo "selected=\"selected\""; ?>>Electronics</option>
<option value="Clothes and Fashion" <?php if($details1['cata']=="Clothes and Fashion") echo "selected=\"selected\""; ?>>Clothes and Fashion</option>
<option value="Beauty Products" <?php if($details1['cata']=="Beauty Products") echo "selected=\"selected\""; ?>>Beauty Products</option>
<option value="Accessories" <?php if($details1['cata']=="Accessories") echo "selected=\"selected\""; ?>>Accessories</option>
<option value="Home and Grocery" <?php if($details1['cata']=="Home and Grocery") echo "selected=\"selected\""; ?>>Home and Grocery</option>
<option value="Mobiles and Laptops" <?php if($details1['cata']=="Mobiles and Laptops") echo "selected=\"selected\""; ?>>Mobiles and Laptops</option>
<option value="Health and Sports Wear" <?php if($details1['cata']=="Health and Sports Wear") echo "selected=\"selected\""; ?>>Health and Sports Wear</option>
</select>   
<select id="select-four" name="catb">
<option value="All" <?php if($details1['catb']=="All") echo "selected=\"selected\""; ?>>All types</option>
<option value="TV and Appliances" <?php if($details1['catb']=="TV and Appliances") echo "selected=\"selected\""; ?>>TV and Appliances </option>
<option value="Mens Products" <?php if($details1['catb']=="Mens Products") echo "selected=\"selected\""; ?>>Mens Products</option>
<option value="Womens Products" <?php if($details1['catb']=="Womens Products") echo "selected=\"selected\""; ?>>Womens Products</option>
<option value="Furnitures" <?php if($details1['catb']=="Furnitures") echo "selected=\"selected\""; ?>>Furnitures</option>
<option value="Electronics" <?php if($details1['catb']=="Electronics") echo "selected=\"selected\""; ?>>Electronics</option>
<option value="Clothes and Fashion" <?php if($details1['catb']=="Clothes and Fashion") echo "selected=\"selected\""; ?>>Clothes and Fashion</option>
<option value="Beauty Products" <?php if($details1['catb']=="Beauty Products") echo "selected=\"selected\""; ?>>Beauty Products</option>
<option value="Accessories" <?php if($details1['catb']=="Accessories") echo "selected=\"selected\""; ?>>Accessories</option>
<option value="Home and Grocery" <?php if($details1['catb']=="Home and Grocery") echo "selected=\"selected\""; ?>>Home and Grocery</option>
<option value="Mobiles and Laptops" <?php if($details1['catb']=="Mobiles and Laptops") echo "selected=\"selected\""; ?>>Mobiles and Laptops</option>
<option value="Health and Sports Wear" <?php if($details1['catb']=="Health and Sports Wear") echo "selected=\"selected\""; ?>>Health and Sports Wear</option>
</select>
<select id="select-four" name="catc">
<option value="All" <?php if($details1['catc']=="All") echo "selected=\"selected\""; ?>>All types</option>
<option value="TV and Appliances" <?php if($details1['catc']=="TV and Appliances") echo "selected=\"selected\""; ?>>TV and Appliances </option>
<option value="Mens Products" <?php if($details1['catc']=="Mens Products") echo "selected=\"selected\""; ?>>Mens Products</option>
<option value="Womens Products" <?php if($details1['catc']=="Womens Products") echo "selected=\"selected\""; ?>>Womens Products</option>
<option value="Furnitures" <?php if($details1['catc']=="Furnitures") echo "selected=\"selected\""; ?>>Furnitures</option>
<option value="Electronics" <?php if($details1['catc']=="Electronics") echo "selected=\"selected\""; ?>>Electronics</option>
<option value="Clothes and Fashion" <?php if($details1['catc']=="Clothes and Fashion") echo "selected=\"selected\""; ?>>Clothes and Fashion</option>
<option value="Beauty Products" <?php if($details1['catc']=="Beauty Products") echo "selected=\"selected\""; ?>>Beauty Products</option>
<option value="Accessories" <?php if($details1['catc']=="Accessories") echo "selected=\"selected\""; ?>>Accessories</option>
<option value="Home and Grocery" <?php if($details1['catc']=="Home and Grocery") echo "selected=\"selected\""; ?>>Home and Grocery</option>
<option value="Mobiles and Laptops" <?php if($details1['catc']=="Mobiles and Laptops") echo "selected=\"selected\""; ?>>Mobiles and Laptops</option>
<option value="Health and Sports Wear" <?php if($details1['catc']=="Health and Sports Wear") echo "selected=\"selected\""; ?>>Health and Sports Wear</option>
</select>
<select id="select-four" name="catd">
<option value="All" <?php if($details1['catd']=="All") echo "selected=\"selected\""; ?>>All types</option>
<option value="TV and Appliances" <?php if($details1['catd']=="TV and Appliances") echo "selected=\"selected\""; ?>>TV and Appliances </option>
<option value="Mens Products" <?php if($details1['catd']=="Mens Products") echo "selected=\"selected\""; ?>>Mens Products</option>
<option value="Womens Products" <?php if($details1['catd']=="Womens Products") echo "selected=\"selected\""; ?>>Womens Products</option>
<option value="Furnitures" <?php if($details1['catd']=="Furnitures") echo "selected=\"selected\""; ?>>Furnitures</option>
<option value="Electronics" <?php if($details1['catd']=="Electronics") echo "selected=\"selected\""; ?>>Electronics</option>
<option value="Clothes and Fashion" <?php if($details1['catd']=="Clothes and Fashion") echo "selected=\"selected\""; ?>>Clothes and Fashion</option>
<option value="Beauty Products" <?php if($details1['catd']=="Beauty Products") echo "selected=\"selected\""; ?>>Beauty Products</option>
<option value="Accessories" <?php if($details1['catd']=="Accessories") echo "selected=\"selected\""; ?>>Accessories</option>
<option value="Home and Grocery" <?php if($details1['catd']=="Home and Grocery") echo "selected=\"selected\""; ?>>Home and Grocery</option>
<option value="Mobiles and Laptops" <?php if($details1['catd']=="Mobiles and Laptops") echo "selected=\"selected\""; ?>>Mobiles and Laptops</option>
<option value="Health and Sports Wear" <?php if($details1['catd']=="Health and Sports Wear") echo "selected=\"selected\""; ?>>Health and Sports Wear</option>
</select>
</td>
    </tr>
            
        <tr>
        <td id="td-one">Buyers Rating</td>
        <td><input type="text" disabled="disabled" value="<?php echo $details1['rating']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Product Quality</td>
        <td>
            <select id ="select-avail" name="pquality">
                <option value="Original" <?php if($details1['pquality']=="Original") echo "selected=\"selected\""; ?>>Original or Branded</option>
                <option value="Local" <?php if($details1['pquality']=="Local") echo "selected=\"selected\""; ?>>Local or Duplicate</option>
            </select>    
        </td>
        </tr>
            
        <tr>
        <td id="td-one">Product Availability</td>
        <td>
<select id ="select-avail" name="pavail">
<option value="Currently Available" <?php if($details1['pavailable']=="Currently Available") echo "selected=\"selected\""; ?>>Currently Available</option>
<option value="Currently Unavailable" <?php if($details1['pavailable']=="Currently Unavailable") echo "selected=\"selected\""; ?>>Currently Unavailable</option>
</select>    
</td>
        </tr>
        <tr>
        <td id="td-one">Product Details 1</td>
        <td><input type="text" name="pla" placeholder="Product Details 1" value="<?php echo $details1['pla']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Product Details 2</td>
        <td><input type="text" name="plb" placeholder="Product Details 2" value="<?php echo $details1['plb']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Product Details 3</td>
        <td><input type="text" name="plc" placeholder="Product Details 3" value="<?php echo $details1['plc']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Product Details 4</td>
        <td><input type="text" name="pld" placeholder="Product Details 4" value="<?php echo $details1['pld']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one" id="td-one">Product Details 5</td>
        <td><input type="text" name="ple" placeholder="Product Details 5" value="<?php echo $details1['ple']; ?>"></td>
        </tr>
        <tr>
        <td id="td-one">Product Description</td>
        <td><textarea rows="10" cols="49" placeholder="Product Description" name="pdesc"><?php echo $details1['pdesc']; ?></textarea></td>
        </tr>
        <tr>
        <td id="td-one">Update Image</td>
        <td><input type="file" accept="image/*" id="imgurl" name="imgadd" onchange="preview();"></td>
        </tr>
        <tr>
        <td colspan="2">
            <div style="width:200px; height:200px; border:1px solid black; float:left; background:url(images/<?php echo $details1['pimgadd']; ?>); background-size:cover;"></div>
            <h1 style="float:left; margin-top:80px;">=></h1>
            <div id="preview-div" style="width:200px; height:200px; border:1px solid black; float:left;"></div>
        </td>
        </tr>
        <tr>
        <td id="td-one"><input type="submit" name="addbtn" value="Update Now"></td>
        </tr>
            
            
        </table>
        </fieldset>
        </form> 
            
        </div>
</div>
    
</div>    
    
 <script>
     
     window.onload=function(){
         
    var a = document.getElementById("pmrp").value;
    var b = document.getElementById("pprice").value;
    var c = document.getElementById("psave");
    var d = document.getElementById("poff");
    
    var e = a-b;
    var f = parseInt(((a-b)/a)*100);
        
         c.setAttribute("value", e);
         c.setAttribute("placeholder", e);
         d.setAttribute("value", f);
         d.setAttribute("placeholder", f);
     }
     function saveoff()
     {
    var a = document.getElementById("pmrp").value;
    var b = document.getElementById("pprice").value;
    var c = document.getElementById("psave");
    var d = document.getElementById("poff");
    
    var e = a-b;
    var f = parseInt(((a-b)/a)*100);
        
         c.setAttribute("placeholder", e);
         c.setAttribute("value", e);
         d.setAttribute("value", f);
         d.setAttribute("placeholder", f);
     }
    function preview(){
         var input = document.getElementById("imgurl");
         var freader = new FileReader();
         freader.readAsDataURL(input.files[0]);
         freader.onloadend = function(event){
                    var prdiv = document.getElementById("preview-div");
                    prdiv.style.background = "url("+event.target.result+")";
                    prdiv.style.backgroundSize = "cover";
                }
     }
    </script>
</body>
</html>