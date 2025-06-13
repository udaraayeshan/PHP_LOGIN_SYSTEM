<?php

$u=$_POST["un"];
$p=$_POST["pass"];

$con=mysqli_connect("localhost","root","","logins");

if(!$con){
    echo "Database Donnection Failed";
}

$res=mysqli_query($con,"insert into user values('$u','$p')");

if($res){
    echo "Success";
}else{
    echo "failed";
}


?>