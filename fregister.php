<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<style>
*{
        box-sizing: border-box;
    }
body{
    background-color: aquamarine;
    }

a{
    text-decoration: none;
    color: darkslateblue;
    }   
    
#body-box{
    width: 99%;
    height: 720px;
    margin: 0 auto;
    border-color: red;
    border-width: 10px;
    border-style: groove;
    } 

#web-head{
    width: 55%;
    height: 100px;
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
    
#middle-div{
    width: 50%;
    height: 700px;
    margin: 0 auto;
    }
#signup-fieldset{
    width: 55%;
    height: 350px;
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
legend{
    font-family: cursive;
    font-size: 25px;
    font-weight: bold;
    }
#submit-btn{
    width: 100px;
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
    
<form method="post" action="register.php">
<fieldset id="signup-fieldset">
<legend>Sign Up</legend>
<table>
<tr>
<td>Full Name</td>
<td><input type="text" name="username" required="required"></td>
</tr>
<tr>
<td>E-mail id</td>
<td><input type="email" name="email" required="required"></td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="tel>" name="mobile" required="required"></td>
</tr>
<tr>
<td>Address</td>
<td>
<select name="state">
<option value="all">-------Select State-------</option>
<option value="Delhi">Delhi</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Kashmir">Kashmir</option>
<option value="Laddhak">Laddhak</option>
<option value="Assam">Assam</option>
<option value="Mizoram">Mizoram</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Goa">Goa</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Kerala">Kerala</option>
<option value="West Bengal">West Bengal</option>
<option value="Karnatka">Karnatka</option>
<option value="Maharastra">Maharastra</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Gujarat">Gujarat</option>
<option value="Chattisgarh">Chattisgarh</option>
<option value="Uttrakhand">Uttrakhand</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Sikkhim">Sikkhim</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Telangana">Telangana</option>
</select>    
</td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" required="required"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="password2" required="required"></td>
</tr>
<tr>
<td colspan="2"><input type="checkbox" name ="checkbox" required="required" id="check">
    <small>Agree to Terms and Conditions</small></td>
</tr>
<tr colspan="2">
<td colspan="2">
    <input type="submit" id="submit-btn" name="registerbtn" value="Register Now">
    <a href="flogin.php">Login</a>
    </td>
</tr>
</table>
</fieldset>    
</form>

</div>
    
</div>
  
 
    
</body>
</html>