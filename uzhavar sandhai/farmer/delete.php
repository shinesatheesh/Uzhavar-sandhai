
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
            $product= $_GET['id'];
            $conn=mysqli_connect("localhost","root","root","uzhavar");
            $query="SELECT * FROM product where id ='$product'";
            $query_run= mysqli_query($conn,$query);

            ?>
            <table class="table">
              <thead>
                <tr>
                  
                  <th>PRODUCT NAME</th>
                  <th>PRODUCT QUANTITY</th>
                  <th>PRODUCT PRICE</th>
                  <th>DESCRIPTION</th>
                  <th>DATE</th>
                  <th>PRODUCT IMAGE</th>
                </tr>
              </thead>
              <tbody>


                <?php
                if(mysqli_num_rows($query_run)>0)//record is there or not
                {
                  foreach($query_run as $row)
                  {
                     //
                     ?>


                       
                       <tr>
                         <td><?php echo $row['productname']; ?></td>
                         <td><?php echo $row['produtqty']; ?></td>
                         <td><?php echo $row['productprice']; ?></td>
                         <td><?php echo $row['description']; ?></td>
                         <td><?php echo $row['date']; ?></td>
                         <td>
                           <img src="<?php echo "upload/".$row['img']; ?>" width="100px" alt="image"></td>
                         
             
                     <?php

                  }
                }
                else{
                      ?>
                      <tr>
                         <td>No record available</td>
                      </tr>
                      <?php
                }
                ?>
                           

                <tr>

                </tr>
              </tbody>
            </table><center>
            <form name="vegetable" action="" method="POST">
            <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card" >
        <div class="card-body text-center">
        <a href="del.php?id=<?php echo $row['id'];?>" class="btn btn-success">DELETE</a>
        </div>
      </div>
    </div></form>
              </center>
          </div> 
          </div>
          
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
              -->
          
              
                        
  </body>
</html>

