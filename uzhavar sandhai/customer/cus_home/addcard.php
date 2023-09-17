 
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
  </head>
  <body>
    <div class="container mt-7">
      <div class="row">
        <div class="col-md-15">
          <div class="card">
          <div class="card-header bg-success">
            <h4 class="text-white">SELECT PRODUCT</h4>
          </div> 
          <div class="card-body">
 
 <?php
//php connect to add_card
session_start();
$uname =$_SESSION['uname'];
$con=mysqli_connect('localhost','root','','uzhavar');
if($con->connect_error){
    die("failed to connect ):".$con->mysqli_connect_error);
     }
     else {
        $que ="SELECT * FROM add_card WHERE uname1 ='$uname'";
       $re = mysqli_query($con,$que);
       ?>


<table class="table">
              <thead>
                <tr>
                  <th>FARMER NAME</th>
                  <th>PRODUCT NAME</th>
                  <th>PRODUCT AVAILABLE</th>
                  <th>PRODUCT PRICE</th>
                  <th>DATE</th>
                  <th>PRODUCT IMAGE</th>
                  <th>QUANTITY</th>
                </tr>
              </thead>
              <tbody>
                
        <?php 
        // fetch id use to product
        while ($row = mysqli_fetch_assoc($re)){
            $id =$row['id'];
           $que ="select * from product where id='$id'";
           $res=mysqli_query($con,$que);
           while($col= mysqli_fetch_assoc($res)){
?>
 <form action="" class="form-area" method="POST" enctype="multipart/form-data"> 
                       
                       <tr>
                       <td><?php echo $col['uname1']; ?></td>
                     <td>  <?php echo $col['productname']; ?></td>
                         <td><?php echo $col['produtqty']; ?></td>
                         <td><?php echo $col['productprice']; ?></td>
                         <td><?php echo $col['date']; ?></td>
                         <td> 
                           <img src="<?php echo "/test/kl/farmer/upload/".$col['img']; ?>" width="100px" alt="image"></td>
                  </td>



<?php 
//while loop    
        }
    
    }

     }

?>