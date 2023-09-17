<?php 
session_start();
 $name =$_SESSION["uname"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update product</title>
    <link rel="stylesheet" href="style2.css" >
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

    .box{
        display: block;
        width: 100% !important; 
        border-radius:10px !important;
        padding: 1.2rem 1.5rem;
        font-size:1.7rem;
        background:white;
        text-transform: none;
        outline: none;
        border: none;
        margin: 15px;
        align-items: center;
    
    }
    label{
    width: 150px;
    display: inline-block;
    margin: 0.2cm;
    font-size: 20px;
    font-weight: bold;
    color: green;
}
</style>
<body>
<?php 
    $con=mysqli_connect("localhost","root","","uzhavar");
    $que = "select * from cus_register where uname1='$name'";
    if($re= mysqli_query($con,$que)){

      while($row=mysqli_fetch_assoc($re)){
    

?>

<section>
      <br>
  </section>
<center>
<div class="container">
        <div class="admin-product-form-container">
   



        <form action="profile_update.php" class="form-area" method="POST" enctype="multipart/form-data">


<h1>PROFILE  EDIT</h1>
<table class="register">

<tr>
    <td><label>EMAIL ID:</label></td>
    <td><input type="text" placeholder="Enter the Email" name="email" value="<?php echo $row['email']; ?>"   class="box"></td>
    </tr><br>
<tr>
<td><label>PHONE NUMBER :</label></td>
<td><input type="number" placeholder="Enter the  Phonenumber" name="phonenumber" value ="<?php echo $row['numbe']; ?>" class="box"></td>
</tr>
<br>
<tr>
    <td><label for="paddress">ADDRESS :</label></td>
    <td><input type ="text" name="address" value="<?php echo $row['paddress']; ?>" rows="2" cols="5" class="new"></textarea></td>
    </tr>
   
<br>



</table>
<input type="submit" class="btn" name="updateProduct" value="Update Profile">
</form>
</center>

</body>
<?php } } ?>
</html>
