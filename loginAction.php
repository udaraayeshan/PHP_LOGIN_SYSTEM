<?php
session_start(); 

$u=$_POST["un"];
$p=$_POST["pass"];

$con=mysqli_connect("localhost","root","","logins");

if(!$con){
    echo "Database Donnection Failed";
}


$res=mysqli_query($con,"select * from user where UserN='$u' and Password='$p' ");

    $b=false;              //boolean gannawa if ekata condition ekak ganna

    while($row=mysqli_fetch_array($res)){
    $b=true;
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