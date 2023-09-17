

<?php 
session_start();
      $uname = $_SESSION["uname"];
      $id=$_POST["id"];
      $qty =$_POST['produtqty'];
      $des =$_POST['description'];
      $price =$_POST["productprice"]; 
      
      if (!empty($uname)  and !empty($qty) and !empty($price) and !empty($des))
      {
          $con=mysqli_connect('localhost','root','','uzhavar');
          if($con->connect_error){
              die("failed to connect ):".$con->mysqli_connect_error);
               }
               
                    else{
                      //image insert  
                      
                            // product update
                            $sql = "update product set produtqty= '$qty', productprice ='$price' , description = '$des'  where id ='$id'";
                             if(mysqli_query($con,$sql)){
                              header("location:admin.php");
                            }else {
                               echo "not insert the database";
                          }
                        }
                    }
                   else {
                       echo "enter the product ";
                       die();
                        }
      
      ?>