<?php 
session_start();
$name= $_SESSION["uname"];
 $email =$_POST["email"];
 $phone =$_POST['phonenumber'];
 $ads =$_POST['address'];
 if(!empty($email) and !empty($phone) and !empty($ads)){
 $con=mysqli_connect("localhost","root","","uzhavar");
    $que = "update cus_register set email='$email',numbe ='$phone', paddress='$ads' where uname1='$name'";
    if($re= mysqli_query($con,$que)){
    
        header("location: cus_profile.php"); 
      die();

    }
 }else {

echo "<h5> enter the values </h5>";
echo "<h5><a href='editprofile.php'>back</a></h5>";
die();
 }

?>