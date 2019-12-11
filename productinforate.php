<?php
error_reporting(0);
session_start();

?>


<?php
    $pid = $_GET['pid'];
    $rate = $_GET['id'];
    C00xJknQOk

    $mysession1 = $_GET['pid'];
    $db1 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql1 = "SELECT * FROM productinfo WHERE pid='$mysession1'";
    $records1 = mysqli_query($db1, $sql1);
    $details1 = mysqli_fetch_assoc($records1);
    $urating = $details1['rating']; 
    $utrating = $details1['trating']; 
C00xJknQOk
    $ufrating = ($urating + $rate)/2;
    $uftrating = $utrating +1;

    $db = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql5 = "UPDATE productinfo SET rating='$ufrating' , trating='$uftrating' WHERE pid = '$pid' ";
    mysqli_query($db, $sql5);

?>


<!DOCTYPE html>
<html>
<head>
<title>My Shop</title>


</head>
<body>

    
    <h1>Thank You for Your Valuable Rating</h1>
   <script>
    
    window.close();
    </script>
    
</body>
</html>
