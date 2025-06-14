<?php

$u=$_POST["un"];
$p=$_POST["pass"];

include('db.php');

$res=mysqli_query($con,"insert into user values('$u','$p')");

if($res){
    header("location:index.php");
}else{
    echo "failed";
}


?>