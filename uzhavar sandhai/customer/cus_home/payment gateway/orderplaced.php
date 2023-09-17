<?php  
session_start();
 $avg =$_SESSION['avg'];
 $qty =$_SESSION['qty'];
$uname =$_SESSION['uname'];  
$id =$_SESSION['id'];
$name =$_POST["name"];
$cardno =$_POST["cardno"];
$cvv =$_POST["cvv"];
$month =$_POST["month"];
$year =$_POST["year"];
if(empty($name) and empty($cardno) and empty($cvv) and empty($month) and empty($year)){
 echo "<center><h1>ENTER THE VALUES</h1></center>";
}else{
    
 if ( strlen($cardno) ==16 and strlen($cvv) == 3 ) {
     if($year>= 2000 and $year<=2030 and $month >0 and $month<13){
?>
<!DOCTYPE html>
<html></html>
<body>
<center><h1>PAYMENT SUCCESSFULL</h1></center>

</body>
<?php
  //farmer product available update
 if($con=mysqli_connect("localhost","root","","uzhavar")){
     $que="update product set produtqty ='$avg' where id ='$id'";
     //famer product null delete the item
     if(mysqli_query($con,$que)){
      
      $qu ="select produtqty from product where id='$id' ";
      $re = mysqli_query($con,$qu);
      
  
      while ($row=mysqli_fetch_assoc($re)) {
        $ch=$row['produtqty'];
         }
      //checking
         if($ch== null ){
           $que="delete from product where id='$id'";
           mysqli_query($con,$que);
          }
          echo "<br><br><center><h3>YOR ORDER PLACED</h3></center>";
          echo "<br><br><center><a href='/test/kl/customer/cus_home/addcard.php'>ORDER PAGE</a></center>";

        //end 
     }else{
       die("invalid");
     }

 
}else{
   echo "not connect to database";
 }

  }else {echo "card number not accepted";} }else {echo "invalid month and year";}  
}
?>