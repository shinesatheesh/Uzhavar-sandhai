
      <!doctype html>
            <html lang="en">
              <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="style3.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
                <title>admin</title>
               <style>
                   body{
                    background-image: url("final.jpg");
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                    background-color: rgba(0,0,0,0.25);
                   }
                   th{
                       color:green;
                   }
               </style>
              </head>
              <body>
                  <section>
                      <br>
                  </section>
            
                <div class="container mt-7">
                  <div class="row">
                    <div class="col-md-15">
                      <div class="card">
                       
                      <div class="card-body">
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
         else {
            $que="select produtqty from product where id='$id'";
            if($re =mysqli_query($con,$que)){
            while($row = mysqli_fetch_assoc($re)){
                  $fqty=$row['produtqty'];
            }
           if($qty<= $fqty){
             $qry="select * from product where id='$id'";
             $re=mysqli_query($con,$qry);
             ?>
                       
                        <table class="table">
                          <thead>
                            <tr>
                              
                              <th>PRODUCT NAME</th>
                              <th>PRODUCT QUANTITY</th>
                              <th>PRODUCT PRICE</th>
                              <th>FARMER NAME</th>
                              <th>PHONE NUMBER</th>
                              <th>PRODUCT IMAGE</th>
                            </tr>
                          </thead>
                          <tbody>    <?php 
    while($row = mysqli_fetch_assoc($re)){    

?>  <tr>
<td><?php echo $row['productname']; ?></td>
<td><?php echo $row['produtqty']; ?></td>
<td><?php echo $row['productprice']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['date']; ?></td>
<td> <img src="<?php echo "/test/kl/farmer/upload/".$row['img']; ?>" width="70px" alt="image"></td></td>
                         <td>
</tr>

<?php     }}
           else{
               echo "not avalable";

           }//avalable check end
        }
        else {
            echo "not work";
        }
         }}?>
