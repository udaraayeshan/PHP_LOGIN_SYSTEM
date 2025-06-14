<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DashBoard</title>
</head>
<body>                 
    
<div style="background-color: red; width: 900px; height:600px;">
    <div style="background-color: yellow; width: 900px; height:200px;">

                      

                        <!-- isset value ekak thiyenawada kiyala bala ganna puluwan -->
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
    </div>
    
<?php 

if(isset($_SESSION['ut'])){

        if($_SESSION['ut']=="admin"){
                 
            include('adminContent.html');

        }else{
            include('nomalContent.html');
        }
}else{
    include('visitContent.html');
}

?>
          

</div>
 
</body>
</html>