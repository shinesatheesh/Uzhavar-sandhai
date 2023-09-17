<?php 
session_start();
$uname = $_POST["uname"];
$password = $_POST["upswd"];
//database 

 
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "uzhavar";
$con =new mysqli($host,$dbusername,$dbpassword,$dbname);
if($con->connect_error){
    die("failed to connect ):".$con->mysqli_connect_error);
}
else{
    

    $qu ="select upswd1 from register where uname1='$uname' ";
    $re = mysqli_query($con,$qu);
    

    while ($row=mysqli_fetch_assoc($re)) {
        $id=$row['upswd1'];
       
    }
    if($password != $id){
        echo "password incorrect ):";
        // header("location:index.html");
        echo '<a href="index.html" >go back to login page press here </a>';
    die();
    }
   else {
      $_SESSION['uname']=$uname;
    include 'addproduct.php';
       } 
    }
  


?>
