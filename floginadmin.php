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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Form</title>
<style>
*{
        box-sizing: border-box;
    }
    
body{
    background-color: aquamarine;
    border 10px
    }
a{
    text-decoration: none;
    color: darkslateblue;
    fontstyle italic
    }
    
#body-box{
    width: 990%;
    height: 820px;
    margin: 0 auto;
    border-color: darkred;
    border-width: 10px;
    border-style: groove;
    }    
#middle-div{
    width: 50%;
    height: 700px;
    margin: 0 auto;
    }
    
#web-head{
    width: 55%;
    height: 100
px;
    padding: 5px;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 35px;
    }
    
h1{
    text-align: center;
    font-weight: bold;
    font-size: 50px;
    font-family: sans-serif;
    }
    
#signin-fieldset{
    width: 55%;
    height: 310px; ji
    margin: 0 auto;
    border-color: black;
    border-width: 2px;
    border-style: dashed;
    border-radius: 10px;
    }
table{
    margin: 0 auto;
    margin-top: 25px;
    }
td{
    font-size: 17px;
    font-family: inherit;
    }
#option{
    width: 100%;
    font-size: 17px;
    font-family: inherit;
    }
#code{
    width: 65%;
    height: 35px;
    font-weight: bold;
    font-size: 15px;
    padding-left: 15%;
    }
    
#code2{
    width: 100%;
    height: 375px;  
    }
legend{
    font-family: cursive;
    font-size: 25px;
    font-weight: bold;
    }
#submit-btn{
    width: 120px;
    height: 40px;
    margin: 0 auto;
    background-color: cadetblue;
    }
</style>
    
</head>
<body>

<div id="body-box">
    
<div id="middle-div">

<div id="web-head"><h1>myshop<font color="red">.com</font></h1></div>     
    

<fieldset id="signin-fieldset">
<legend>Confirm Login</legend>
<table>
<tr>
<td>User Name</td>
<td><input type="email" name="loginmail" value="<?php echo $details['uname']; ?>" disabled="disabled"></td>
</tr>
<tr>
<td>E-mail id</td>
<td><input type="email" name="loginmail" value="<?php echo $details['emailadd']; ?>" disabled="disabled"></td>
</tr>
<tr>
<td>E-mail Password</td>
<td><input type="password" id="loginpassword" required="required" autocomplete="off"></td>
</tr>
<tr>
<td>Login As</td>
<td>
    <select id="option">
<option>Admin Account</option>
    </select>
</td>
</tr>
<tr>
<td>Admin Password</td>
<td><input type="password" id="loginpassword2" required="required"></td>
</tr>
<tr>
<td>
    <input type="text" name="code" id= "code" disabled="disabled">
    <i class="fa fa-refresh" aria-hidden="true"  style="cursor:pointer;" onclick="refresh1();"></i>
</td>
<td><input type="text" name="code2" id="code2" oninput="match();"  required="required"></td>
</tr>
    <tr>
        <td colspan="2">
<input type="checkbox" required="required">Agree To Terms and Conditions</td>    
    </tr>
<tr colspan="2">
<td colspan="2">
    <button id="submit-btn" name="loginbtn" disabled="disabled" style="cursor:not-allowed;" onclick="verify();">Login as Admin</button>
    <a href="index.php">Cancel</a>
</td>
</tr>
</table>
</fieldset>    

</div>
    
</div>
  
 <script>
    var n = "<?php echo $details['pass']; ?>";
    var c = document.getElementById("code");
     window.onload = function()
     {
        c.setAttribute("value", "<?php echo( rand(100000, 999999));  ?>");
     }
    function  refresh1()
     {
         c.setAttribute("value", "<?php echo( rand(100000, 999999));  ?>");
         var x = document.getElementById("submit-btn");
         x.setAttribute("style", "cursor:not-allowed;");
         x.setAttribute("style", "disabled:disabled;");
     }
      
    

     function match()
     {
    var e = document.getElementById("code").value;
    var f = document.getElementById("code2").value;
         if(e === f)
             {
                 var x = document.getElementById("submit-btn");
                 x.removeAttribute("disabled");
                 x.removeAttribute("style");
                 x.setAttribute("style", "cursor:pointer;");
             }
     }
     
     function verify()
     {
         var m = document.getElementById("loginpassword").value;
         var p = document.getElementById("loginpassword2").value;
            if(m===n && p === "admin")
               {
               window.location = 'http://localhost/website/adminhome.php';
               }
         else{
             window.alert("Admin, Login Verification Failed!");
             window.location = 'http://localhost/website/floginadmin.php';
         }
     }
    </script>
    
</body>
</html>
