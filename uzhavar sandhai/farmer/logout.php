<?php 
session_destroy();
$_SESSION['uname']=0;
die (header("location: index.html"));


?>