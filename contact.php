<?php
error_reporting(0);
session_start();

$db = mysqli_connect("localhost", "root", "", "myshopdb");

if (isset($_POST['registerbtn']))
{
    $cuname = mysqli_real_escape_string($db, $_POST['cname']);
    $cemail = mysqli_real_escape_string($db, $_POST['cemail']);
    $cmobile = mysqli_real_escape_string($db, $_POST['cmobile']);
    $csubject = mysqli_real_escape_string($db, $_POST['csubject']);
    $ctext = mysqli_real_escape_string($db, $_POST['ctext']);
    
    
        $sql = "INSERT INTO contact(cname, cemail, cmobile, csubject, ctext) VALUES('$cuname', '$cemail', '$cmobile', '$csubject', '$ctext')";
        mysqli_query($db, $sql);
        include 'flogin.php';
    
    
}
?>



<script> 
  alert("<?php 
        
        echo "$username,  You Have Successfully registered!";

        ?>"); 
</script> 



