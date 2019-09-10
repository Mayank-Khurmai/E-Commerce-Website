<?php
session_start();
session_destroy();
include 'flogin.php';
?>


<script> 
  alert("<?php 
        
       echo "You Have Successfully Logged Out";
        
        ?>"); 
</script>