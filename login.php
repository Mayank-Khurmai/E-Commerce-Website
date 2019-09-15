<?php
   session_start();

$db = mysqli_connect("localhost", "root", "", "myshopdb");
 
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
?>


<script> 
  alert("<?php 
        
        
        $email = $_POST['loginmail'];
        $password = $_POST['loginpassword'];
 
    $sql = "SELECT * FROM logininfo WHERE emailadd='$email' AND pass='$password'";
    $result = mysqli_query($db, $sql);        
        
        if (mysqli_num_rows($result)>0)
        {
        echo "Hey , '$email' , You Have Successfully Logged in!";
        }
    else
        {
        echo "E-mail or Password is Invalid !";
        }
        
        ?>"); 
        
</script>



