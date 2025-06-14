<?php
session_start(); 

$u=$_POST["un"];
$p=$_POST["pass"];


include('db.php');


$res=mysqli_query($con,"select * from user where UserN='$u' and Password='$p' ");

    $b=false;              //boolean gannawa if ekata condition ekak ganna

while($row=mysqli_fetch_array($res)){
    $b=true;

    //usertype value eka ganimata
    $_SESSION['ut']=$row['UserType'];
    
}


if($b){

  $_SESSION['USER']= $u;
  header("location:index.php");

}else{

   echo "<script>";
   echo "alert('Wrong User Number OR Password');";
   echo "window.location='login.html'";
   echo "</script>";
  
}
 

?>