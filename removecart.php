<?php
error_reporting(0);
session_start(0);
?>



<?php
    $a = $_GET['idsession'];
    $b = $_SESSION['emailadd'];
    $db2 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql2 = "DELETE FROM carttable WHERE pid='$a' AND emailadd='$b' ";
    $records2 = mysqli_query($db2, $sql2);                
    include 'cart.php';

?> 
