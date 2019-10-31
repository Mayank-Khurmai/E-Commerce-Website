<?php

error_reporting(0);
session_start();

$db = mysqli_connect("localhost", "root", "", "myshopdb");
 
$email = $_POST['loginmail'];
$password = $_POST['loginpassword'];

$email = stripcslashes($email);
$password = stripcslashes($password);

if (isset($_POST['loginbtn']))
{
    $sql = "SELECT * FROM logininfo WHERE emailadd='$email' AND pass='$password'";
    $result = mysqli_query($db, $sql);
                  
    
         if (mysqli_num_rows($result)>0)
           {   
           $_SESSION['emailadd'] = $email;

    
            include 'index.php';
            
        ajjwjejjwjjajsjehenememw
        nwnjwjwbwnsjgsbakkejehejee
        jsjejejjsysh hi kskuwu72bw wjjw
        jjwjwjejjejejhehehehejejwju3hs
        kwjjejeuebheuwusiisg3hekwkkw
        jwjjekeksijehehekkekekekoeown
        ords2 = mysqli_query($db2, $sql2);
    $details2 = mysqli_fetch_assoc($records2);
 
        #web-head{
    width: 55%;
    height: 100px;
h
    r
    hr
    b
    br
    padding: 5px;
php echo
p
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 35px;
    }
       id="tag-lines">India`s largest Online e-commerce website</p>
</header>
           html
html
head
css
body
}
         else
            {
            include 'flogin.php';
            } 
}
?>


<script> 
  alert("<?php 
        
        
        $email = $_POST['loginmail'];
        $password = $_POST['loginpassword'];
 
    $sql = "SELECT * FROM logininfo WHERE emailadd='$email' AND pass='$password'";
    $result = mysqli_query($db, $sql);        
        
        if (mysqli_num_rows($result)>0)
        {
        echo "$email You Have Successfully Logined!";
        }
    else
        {
        echo "E-mail or Password is Invalid !";
        }
        
        ?>"); 
        
</script>



