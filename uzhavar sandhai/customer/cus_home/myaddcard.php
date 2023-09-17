
<?php 

session_start();
 $uname =$_SESSION['uname'];  
 $id =$_SESSION['id'];
 $qty = $_POST["qty"];



 if (!empty($id) and !empty($qty) and !empty($uname)){
    $con=mysqli_connect('localhost','root','','uzhavar');
    if($con->connect_error){
        die("failed to connect ):".$con->mysqli_connect_error);
         }
         else {
            $que ="SELECT produtqty FROM `product` WHERE id ='$id'";
           $re = mysqli_query($con,$que);
           
           if(mysqli_num_rows($re)>0)//record is there or not
           {
              echo "<form action= 'addcard.php' method ='POST'>
              <input type='hidden' name='qty'> </form>
              ";
             while($row=mysqli_fetch_assoc($re))
             {
                 $pqty= $row['produtqty'];

             }}
               if($pqty >= $qty){
                $que = "INSERT INTO add_card(id,uname1,qty) values('$id','$uname','$qty')";
                if(mysqli_query($con,$que)){
                   header("location: addcard.php"); 
                }else{
                echo "not connect in database ):";             
                }
            
               }
               else {
               echo "not avalable";
               }
         }
        } else{
     echo "ENTER THE VALUES";
 }  
?>