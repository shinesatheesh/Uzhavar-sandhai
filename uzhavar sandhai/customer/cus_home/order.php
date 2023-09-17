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
            //customer phone number fetch
            $que="select numbe from cus_register where uname1 ='$uname'";
            if($re =mysqli_query($con,$que)){
            while($row = mysqli_fetch_assoc($re)){
                  $phone=$row['numbe'];
                
            }
           if($qty<= $fqty){
             $avg =$fqty-$qty;
             $price =$price*$qty;
               //product to order connect database...................................... 
               //connect check..........................................................  
               if($con->connect_error){
                die("failed to connect ):".$con->mysqli_connect_error);
                 }
                 else{
                   $que ="insert into product_order(productname,fphone,location,district,timing,img,date,fname,pid,uname,qty,price,cphone) select productname,phonenumber,location,district,timing,img,date,uname1,'$id','$uname','$qty','$price','$phone' from product where id='$id'";
                   if(mysqli_query($con,$que)){ 
                     // product database update............................................

                     $que="update product set produtqty ='$avg' where id ='$id'";
                     if(mysqli_query($con,$que)){
      
                      $qu ="select produtqty from product where id='$id'";
                      $re = mysqli_query($con,$qu);
                
                  
                      while ($row=mysqli_fetch_assoc($re)) {
                        $ch=$row['produtqty'];
                         
                      }
                      //checking if product null delete the row .........................................
                         if($ch==0 ){
                           $que="delete from product where id='$id'";
                         } 

                          else {if(mysqli_query($con,$que)){
                            
                             header("location: orderplaced.php");
                           }}
                          //.....end the update and delete the row........................
                        }
                    }
                   else{
                     echo "not work database ):";
                   }

                 }

               
           }else{
                echo "<a href='selectprd.php'>NOT AVAILABLE</a>";


                  }   }else{echo "query not send";}
                 
                }}

              }
?>