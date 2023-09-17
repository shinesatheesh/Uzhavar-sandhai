<?php 
session_start();
$uname =$_SESSION['uname'];  
 $id =$_SESSION['id'];
 $qty = $_POST["qty"];
 if (!empty($id) and !empty($qty) and !empty($uname)){
    $con=mysqli_connect('localhost','root','','uzhavar');
    //avalable check the qty
    if($con->connect_error){
        die("failed to connect ):".$con->mysqli_connect_error);
         }
         else  {
            $que="select produtqty,productprice from product where id='$id'";
            if($re =mysqli_query($con,$que)){
            while($row = mysqli_fetch_assoc($re)){
                  $fqty=$row['produtqty'];
                  $price=$row['productprice'];
            }
           if($qty<= $fqty){
               $avg =$fqty-$qty;
               $price =$price*$qty;
              ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

           </head>
<body>

<div class="container">

    <form action="orderplaced.php" method ="POST">

        <div class="row">

          

            <div class="col">

                <h3 class="title">payment</h3>
                <h4 class="title">COST :<?php echo $price ?><h4>
                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name= "name" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="cardno" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="number" name ="month" placeholder=" Enter the month number">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="year" placeholder="Enter the year">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="123">
                        
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">
   </form>

</div>    
    
</body>
</html><?php  
 $_SESSION['avg'] = $avg;
 $_SESSION['qty']=$qty;
 die();
}else{  echo "not available";} }   }} else{
    echo "Enter the quantity";
}
die();
?>