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
#middle-div{
    width: 50%;
    height: 700px;
    margin: 0 auto;
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
    
#signin-fieldset{
    width: 55%;
    height: 210px;
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
    
<form method="post" action="login.php">
<fieldset id="signin-fieldset">
<legend>Sign In</legend>
<table>
<td>E-mail id</td>
<td><input type="email" name="loginmail" required="required"></td>

<tr colspan="2">
<td colspan="2">
    <input type="submit" id="submit-btn" name="loginbtn" value="Login Now">
    <a href="fregister.php">Sign Up</a>
</td>
</tr>
</table>
</fieldset>    
</form>
</div>
    
</div>
  
 
    
</body>
</html>
