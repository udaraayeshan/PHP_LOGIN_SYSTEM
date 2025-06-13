<?php
session_start();

unset($_SESSION['USER']); // adala sesstion eka witharak ayi wela yanawa
//session_destroy(); // session okkama ayin wela yanawa

header("location:index.php")

?>