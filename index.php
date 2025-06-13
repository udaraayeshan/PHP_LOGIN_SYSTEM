<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DashBoard</title>
</head>
<body>                   <!-- isset value ekak thiyenawada kiyala bala ganna puluwan -->
    <h1>WELCOME : <?php if(isset($_SESSION['USER'])){ 
        echo $_SESSION['USER'];
    }else{
        echo "USER";
    }
        
?></h1>

<?php if(isset($_SESSION['USER'])){ 
 ?>

<input type="button" value="Logout" onclick="window.location='logout.php'">

<?php     
    }else{
 ?>  

<input type="button" value="Login" onclick="window.location='login.html'">
<input type="button" value="Register" onclick="window.location='Register.html'">

<?php       
    }
?>


</body>
</html>