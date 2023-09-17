<?php
$id =$_GET['id']; 
          $conn=mysqli_connect("localhost","root","root","uzhavar");
          $que ="delete from product where id='$id'";
         if($query_run=mysqli_query($conn,$que)){
           header("location: admin.php");
         }else {
           echo "error";
           die();
         }
          
          ?>s