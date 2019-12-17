<?php
error_reporting(0);
session_start();
?>


<?php
    $mysession1 = $_GET['id'];
    $db1 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql1 = "SELECT * FROM productinfo WHERE pid='$mysession1'";
    $records1 = mysqli_query($db1, $sql1);
    $details1 = mysqli_fetch_assoc($records1);
?>

<?php
    $mysession2 = $_SESSION['emailadd'];
    $db2 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql2 = "SELECT * FROM carttable WHERE emailadd='$mysession2'";
    $records2 = mysqli_query($db2, $sql2);
    $details2 = mysqli_fetch_assoc($records2);
?>


<?php

    $a = $_SESSION['emailad2d'];
    $b = $_GET['id'];
    $c = $details1['pname'];
    $d = $details1['pprice'];
    $sql4 = "INSERT INTO carttable(emailadd, pid, pname, pprice) VALUES('$a', '$b', '$c', '$d')";
    mysqli_query($db2, $sql4);
    include 'productinfo.php';
    
?>


<script> 
  alert("<?php 
        
            echo "$c , Successfully Added To Cart!";
       
        ?>"); 
        
</script>



