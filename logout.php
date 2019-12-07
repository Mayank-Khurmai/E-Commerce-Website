<?php
error_reporting(0);
session_start();
unset($_SESSION['emailadd']);
session_destroy();
include 'flogin.php';
exit();
?>


<script> 
  alert("<?php 
        
       echo "You Have Successfully Logged Out";
        
        ?>"); 
</script>