<?php
session_start();
?>



<?php
    $mysession2 = $_SESSION['emailadd'];
    $db2 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql2 = "SELECT * FROM carttable WHERE emailadd='$mysession2'";
    $records2 = mysqli_query($db2, $sql2);
    $details2 = mysqli_fetch_assoc($records2);
 
        
         

                $a = $_SESSION['emailadd'];
                $p = " ";
                $q = 0;
      
                $sql2 = "UPDATE carttable SET ptwo='$p' , pptwo='$q' WHERE emailadd='$a'";
                mysqli_query($db2, $sql2);
                include 'cart.php';

        

?> 