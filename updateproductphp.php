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
    $pimgadd1 = $_FILES['imgadd']['name'];
    if($pimgadd1 == "")
        {
        $db = mysqli_connect("localhost", "root", "", "myshopdb");
        $sql5 = "UPDATE productinfo SET pname='$pname' , pmrp='$pmrp' , pprice='$pprice' , psave='$psave' , off='$off' , cata='$cata', catb='$catb',
                                    catc='$catc', catd='$catd', pquality='$pquality', pavailable='$pavail' , 
                                    pla='$pla' , plb='$plb' , plc='$plc' , pld='$pld' , ple='$ple' , pdesc='$pdesc' WHERE pid = '$pid' ";
        mysqli_query($db, $sql5);
        }
    
    else
        {
        $pimgadd = time().$_FILES['imgadd']['name']; 
        $target = "images/" . $pimgadd;   
        move_uploaded_file($_FILES['imgadd']['tmp_name'], $target);
        $db = mysqli_connect("localhost", "root", "", "myshopdb");
      
        $sql5 = "UPDATE productinfo SET pname='$pname' , pmrp='$pmrp' , pprice='$pprice' , psave='$psave' , off='$off' , cata='$cata', catb='$catb',
                                    catc='$catc', catd='$catd', pquality='$pquality', pavailable='$pavail' , 
                                    pla='$pla' , plb='$plb' , plc='$plc' , pld='$pld' , ple='$ple' , pdesc='$pdesc' , pimgadd='$pimgadd' WHERE pid = '$pid' ";
        mysqli_query($db, $sql5);
        }
    
    
            
    include 'updateproduct.php';
 
}
?>



<script> 
  alert("<?php 
        
    $pname = mysqli_real_escape_string($db, $_POST['pname']);   

        echo "$pname,  Successfully Updated!";
        
        ?>"); 
</script> 



