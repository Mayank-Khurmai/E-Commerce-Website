<?php
error_reporting(0);
session_start();
?>



<?php
    $a = $_GET['id'];
    $b = $_SESSION['emailadd'];
    $db2 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql2 = "DELETE FROM productinfo WHERE pid='$a' ";
    $records2 = mysqli_query($db2, $sql2);                
    include 'remproduct.php';

?> 