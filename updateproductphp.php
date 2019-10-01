<?php
error_reporting(0);
session_start();

$db = mysqli_connect("localhost", "root", "", "myshopdb");

if (isset($_POST['addbtn']))
{
    $pid = $_GET['id'];
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
    
    
    
    $db = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql5 = "UPDATE productinfo SET pname='$pname' , pmrp='$pmrp' , pprice='$pprice' , psave='$psave' , off='$off' , pavailable='$pavail' , 
                                    pla='$pla' , plb='$plb' , plc='$plc' , pld='$pld' , ple='$ple' , pdesc='$pdesc' WHERE pid = '$pid' ";
    mysqli_query($db, $sql5);
            
    include 'updateproduct.php';
 
}
?>



<script> 
  alert("<?php 
        
    $pname = mysqli_real_escape_string($db, $_POST['pname']);   

        echo "$pname,  Successfully Updated!";
        
        ?>"); 
</script> 



