<?php
   session_start();

$db = mysqli_connect("localhost", "root", "", "myshopdb");
 if(!empty(FirstName) && !empty(LastName) && !empty(gender) && !empty(bday) && !empty(Number) && !empty(email) && !empty(psw) && !empty(psw-repeat))
 {
$email = $_POST['loginmail'];
$password = $_POST['loginpassword'];

$email = stripcslashes($email);
$password = stripcslashes($password);

if (isset($_POST['loginbtn']))
{
    $sql = "SELECT * FROM logininfo WHERE emailadd='$email' AND pass='$password'";
    $result = mysqli_query($db, $sql);
                  
    
         if (mysqli_num_rows($result)>0)
           {
             
            $_SESSION['emailadd'] = $email;
            include 'index.php';
            
            }
         else
            {
            include 'flogin.php';
            } 
}
 }
else
{
    echo "ALL FIELDS ARE REQUIRED. PLEASE CHECK ALL ENTRIES AGAIN." ;
}
?>


<script> 
  alert("<?php 
        
        
        $email = $_POST['loginmail'];
        $password = $_POST['loginpassword'];
 
    $sql = "SELECT * FROM logininfo WHERE emailadd='$email' AND pass='$password'";
    $result = mysqli_query($db, $sql);        
        
        if (mysqli_num_rows($result)>0)
        {
        echo "$email You Have Successfully Logined!";
        }
    else
        {
        echo "E-mail or Password is Invalid !";
        }
        
        ?>"); 
        
</script>



