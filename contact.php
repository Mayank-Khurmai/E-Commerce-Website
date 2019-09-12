<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "myshopdb");

if (isset($_POST['registerbtn']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
    if ($password == $password2)
    {
        $password2 = md5($password);
        $sql = "INSERT INTO logininfo(uname, emailadd, mobileno, location, pass, hashpass) VALUES('$username', '$email', '$mobile', '$state', '$password', '$password2')";
        mysqli_query($db, $sql);
        include 'flogin.php';
    }
    else
    {
        include 'fregister.php';
    }
}
?>



<script> 
  alert("<?php 
        
    $username = mysqli_real_escape_string($db, $_POST['username']);    
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
        
    if ($password == $password2)
        {
        echo "$username,  You Have Successfully registered!";
        }
    else
        {
        echo "$username,  Your's Registration Failed! Passwords do not Match";
        }
        
        ?>"); 
</script> 



