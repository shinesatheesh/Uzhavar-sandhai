<?php

$uname1 = $_POST['uname1'];
$email  = $_POST['email'];
$upswd1 = $_POST['upswd1'];
$upswd2 = $_POST['upswd2'];
$numbe = $_POST["numbe"];
$add =$_POST["address"];


if (!empty($uname1) || !empty($email) || !empty($upswd1) || !empty($upswd2) || !empty($numbe) and !empty($add))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "uzhavar";



// Create connection
$id ="0"; 

  $con =mysqli_connect("localhost","root","root","uzhavar");


// Connection successful, continue with your database operations here.

  $qu ="select uname1 from cus_register where uname1='$uname1'";
  $re = mysqli_query($con,$qu);
  while ($row=mysqli_fetch_assoc($re)) {
    $id=$row['uname1'];
}
if($upswd1!=$upswd2){
  echo "password incorrect";
  die();
}else{
if($uname1 === $id){
   
echo "already register\n";
echo "<a href = cus_register.html>click here</a>";

}
else{
$que = "INSERT INTO `cus_register` (`uname1`, `email`, `numbe`, `upswd1`, `upswd2`, `address`) VALUES ('$uname1', '$email', '$numbe', '$upswd1', '$upswd2', '$add')";

 $send = mysqli_query($con,$que);
      
       if($send){
       header("location:cuslogin.html");
      
       if($con->connect_error){
        die("failed to connect ):".$con->mysqli_connect_error);
    }
      }
      else {
        echo "Error: " . mysqli_error($con);
        die();
    }

die();
    
  
    }
} } 

?>