<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "myshopdb");

if (isset($_POST['addbtn']))
{
    $pname = mysqli_real_escape_string($db, $_POST['pname']);
    $pmrp = mysqli_real_escape_string($db, $_POST['pmrp']);
    $pprice = mysqli_real_escape_string($db, $_POST['pprice']);
    $psave = mysqli_real_escape_string($db, $_POST['psave']);
    $off = mysqli_real_escape_string($db, $_POST['off']);
    $pavail = mysqli_real_escape_string($db, $_POST['pavail']);
    $pla= mysqli_real_escape_string($db, $_POST['pla']);
    $plb = mysqli_real_escape_string($db, $_POST['plb']);
    $plc = mysqli_real_escape_string($db, $_POST['plc']);
    $pld = mysqli_real_escape_string($db, $_POST['pld']);
    $ple = mysqli_real_escape_string($db, $_POST['ple']);
    $pdesc = mysqli_real_escape_string($db, $_POST['pdesc']);
    $pimgadd = mysqli_real_escape_string($db, $_POST['pimgadd']);
    
    
    
    $sql5 = "INSERT INTO productinfo(pname, pmrp, pprice, psave, off, pavailable, pla, plb, plc, pld, ple, pdesc) VALUES('$pname', '$pmrp', '$pprice', '$psave', '$off', '$pavail', '$pla', '$plb', '$plc', '$pld', '$ple', '$pdesc')";
        mysqli_query($db, $sql5);
        
        
        $db = mysqli_connect("localhost", "root", "", "myshopdb");
        mysqli_query($db, $sql5);
        
        
        include 'addproduct.php';
 
}
?>



<script> 
  alert("<?php 
        
    $pname = mysqli_real_escape_string($db, $_POST['pname']);   

        echo "$pname,  Successfully Added!";
        
        ?>"); 
</script> 



