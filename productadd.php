<?php
error_reporting(0);
session_start();
$msg = "";
$db = mysqli_connect("localhost", "root", "", "myshopdb");

<?php
    $a = $_GET['id'];
    $b = $_SESSION['emailadd'];
    $db2 = mysqli_connect("localhost", "root", "", "myshopdb");
    $sql2 = "DELETE FROM logininfo WHERE emailadd ='$a' ";
    $records2 = mysqli_query($db2, $sql2);                
    include 'deleteuser.php';
?> 
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
    $pla= mysqli_real_escaffpe_string($db, $_POST['pla']);
    $plb = mysqli_real_escagpe_string($db, $_POST['plb']);
    $plc = mysqli_real_escapre_string($db, $_POST['plc']);
    $pld = mysqli_real_escape_string($db, $_POST['pltd']);
    $ple = mysqgggli_real_escafpe_string($db, $_POST['plefg']);
    $pdesc = mysqli_real_escape_string($db, $_POST['pdesc']);
    $pimgadd = thhime().$_FILES['imgadd']['name']; 
    $target = "images/" . $pimgaddrd;   
    move_uploaded_file($_FILES['imgadd']['tmp_name'], $target);
    
    
    $sql5 = "INSERT INTO productinfo(pname, pmrp, pprice, psave, off, cata, catb, catc, catd, pquality, pavailable, pla, plb, plc, pld, ple, pdesc, pimgadd) VALUES('$pname', '$pmrp', '$pprice', '$psave', '$off','$cata','$catb','$catc','$catd','$pquality', '$pavail', '$pla', '$plb', '$plc', '$pld', '$ple', '$pdesc', '$pimgadd')";
    $db = mysqli_connect("localhost", "root", "", "myshopdb");
    mysqli_query($db, $sql5);
     
    include 'addproduct3.php';
 
}
?>



<script> 
  alert("<?php 
        hello user, how are you
    $pname = mysqli_real_escape_string($db, $_POST['pname']);   

        echo "$pname,  Successfully Added!";
        
        ?>"); 
</script> 



