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
            $veg = $_POST['vegetable'];
            $conn=mysqli_connect("localhost","root","","uzhavar");
            $query="select * from product where productname='$veg'";
            $query_run= mysqli_query($conn,$query);

            ?>
            <table class="table">
              <thead>
                <tr>
                  <th>FARMER NAME</th>
                  <th>PRODUCT NAME</th>
                  <th>PRODUCT AVAILABLE</th>
                  <th>PRODUCT PRICE</th>
                  <th>DATE</th>
                  <th>DISTRICT</th>
                  <th>LOCATION</th>
                  <th>TIMING</th>
                  <th>PRODUCT IMAGE</th>
                  <th>SELECT PROCDUCT</th>
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

                    <form action="selectprd.php" class="form-area" method="POST" enctype="multipart/form-data"> 
                       
                       <tr>
                       <td><?php echo $row['uname1']; ?></td>
                         <td><?php echo $row['productname']; ?></td>
                         <td><?php echo $row['produtqty']; ?></td>
                         <td><?php echo $row['productprice']; ?></td>
                         <td><?php echo $row['date']; ?></td>
                         <td><?php echo $row['district']; ?></td>
                         <td><?php echo $row['location']; ?></td>
                         <td><?php echo $row['timing']; ?></td>
                         <td> 
                           <img src="<?php echo "/kl/farmer/upload/".$row['img']; ?>" width="100px" alt="image"></td>
                  </td>
                       <td> <a href="selectprd.php?id=<?php echo $id = $row['id']; ?>" name="id" class= "btn btn-success">SELECT PRODUCT</a></td>
                      
                        </tr>
                      
                     <?php
                  }
                }
                else{
                      ?>
                     
                      <tr>
                         <td>No record available</td>
                      </tr></form>
                      <?php
                }
                ?>
                <tr>

                </tr>
              </tbody>
            </table>


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