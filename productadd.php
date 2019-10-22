<?php
error_reporting(0);
session_start();
$msg = "";
$db = mysqli_connect("localhost", "root", "", "myshopdb");

if (isset($_POST['addbtn']))
{    
    $pname = mysqli_real_escape_string($db, $_POST['pname']);
    $pmrp = mysqli_real_escape_string($db, $_POST['pmrp']);
    $pprice = mysqli_real_escape_string($db, $_POST['pprice']);
    $psave = mysqli_real_escape_string($db, $_POST['psave']);
    $off = mysqli_real_escape_string($db, $_POST['off']);
    $cata = mysqli_real_escape_string($db, $_POST['cata']);
    $catb = mysqli_real_escape_string($db, $_POST['catb']);
    $catc = mysqli_real_escape_string($db, $_POST['catc']);
    $catd = mysqli_real_escape_string($db, $_POST['catd']);
    $pquality = mysqli_real_escape_string($db, $_POST['pquality']);
    $pavail = mysqli_real_escape_string($db, $_POST['pavail']);
    $pla= mysqli_real_escape_string($db, $_POST['pla']);
    $plb = mysqli_real_escape_string($db, $_POST['plb']);
    $plc = mysqli_real_escape_string($db, $_POST['plc']);
    $pld = mysqli_real_escape_string($db, $_POST['pld']);
    $ple = mysqli_real_escape_string($db, $_POST['ple']);
    $pdesc = mysqli_real_escape_string($db, $_POST['pdesc']);
    $pimgadd = time().$_FILES['imgadd']['name']; 
    $target = "images/" . $pimgadd;   
    move_uploaded_file($_FILES['imgadd']['tmp_name'], $target);
    
    
    $sql5 = "INSERT INTO productinfo(pname, pmrp, pprice, psave, off, cata, catb, catc, catd, pquality, pavailable, pla, plb, plc, pld, ple, pdesc, pimgadd) VALUES('$pname', '$pmrp', '$pprice', '$psave', '$off','$cata','$catb','$catc','$catd','$pquality', '$pavail', '$pla', '$plb', '$plc', '$pld', '$ple', '$pdesc', '$pimgadd')";
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



