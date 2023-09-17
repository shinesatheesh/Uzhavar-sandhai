<?php session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update product</title>
    <link rel="stylesheet" href="style4.css" >
</head>

<style>

    body{
        background-image: url("final.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: rgba(0,0,0,0.25);
    }

    .register label{
        width: 150px;
        display: inline-block;
    }


</style>
<body>
  <section>
      <br>
  </section>
<center>
<div class="container">
        <div class="admin-product-form-container">
            <?php
             $conn=mysqli_connect("localhost","root","","uzhavar");

             $id=$_GET['id'];
             $query="SELECT * FROM product WHERE id='$id'";
             $query_run=mysqli_query($conn,$query);
             if(mysqli_num_rows($query_run)>0)
             {
              while($row =mysqli_fetch_assoc($query_run)){
                 
            ?>

                <form action=" updateproduct.php" class="form-area" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <h1>Update product</h1>
                <table class="register">

                <tr>
                    <td><label>Product quantity:</label></td>
                    <td><input type="number" placeholder="enter quantity" name="produtqty" value="<?php echo $row['produtqty']; ?>" class="box"></td>
                    </tr><br>
                <tr>
                <td><label>Product Price:</label></td>
                <td><input type="number" placeholder="enter product price" name="productprice" value="<?php echo $row['productprice']; ?>" class="box"></td>
                </tr>
                <br>
                <tr>
                    <td><label for="descriptiion">Description:</label></td>
                    <td><textarea name="description" placeholder="<?php echo $row['description']; ?>"  value="<?php echo $row['description']; ?>" rows="2" cols="5" class="new"></textarea></td>
                    </tr>
                
                <br>
               
                
               
            </table>
            <input type="submit" class="btn" name="updateProduct" value="Update Product">
           </form>
              </center>

            <?php
               }
            }
             else{
                   echo "No record available";
             }
            ?>
            </body>
            </html>