<?php 
session_start();
$uname =$_SESSION['uname'];
 if(isset($uname)){
if(!$con = mysqli_connect("localhost","root","","uzhavar")){
        die("database not connect");
}else {
    $que ="select * from register where uname1 ='$uname'";
    $re =mysqli_query($con,$que);
    while($row = mysqli_fetch_assoc($re)){



?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <link rel="stylesheet" href="style3.css" >
    </head>
   <style> 
   /*.card{
    width: 400px;
    height:400px;
    background:#e5e5e5 !important;
    border:none !important;
    
    border-radius: 20px !important;
    overflow: hidden;
    justify-content: center;
    align-items: center;
    margin:20px 60px;
    padding:25px 30px;
}

/*.title {
  color: grey;
  font-size: 18px;
}

 button{
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: red;
  background-color: blue;
  text-align: center;
  cursor: pointer;
  width: 30%;
  font-size: 18px;
}*/

body{
        background-image: url("final.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: rgba(0,0,0,0.25);
    }

label {
  text-decoration: none;
  font-size: 26px;
  color: green;
  text-align: 
  font-weight :600px;
}

.register label{
        width: 150px;
        display: inline-block;
    }
/*p{
text-decoration: none;
font-size :22px;
color: blue;


}


button:hover, a:hover {
  opacity: 0.7;
}*/

</style>

<body>
  <section>
    <br>
  </section>



 <center>
 
     <div class="container">
        <div class="admin-product-form-container">
            <form action="connect.php" class="form-area" method="post" enctype="multipart/form-data">
            <h1>FORMER PROFILE</h1>
                <table class="register">
     <tr>
       <td><label>NAME  :</label></td>
       <td><input type="text" placeholder="<?php echo $row['uname1'];  ?>" name="productname" class="box"></td>
     </tr>
     <br>
     <tr>
       <td><label>EMAIL  :</label></td>
       <td><input type="text" placeholder="<?php echo $row['email'];  ?>" name="productname" class="box"></td>
     </tr>
     <br>
    <tr> 
      <td><label>ADDRESS  :</label></td>
      <td><input type="text" placeholder="<?php echo $row['paddress'];  ?>" name="productname" class="box"></td>
     </tr>
     <br>
     <tr>
       <td><label>PHONE NO  :</label></td>
      <td><input type="text" placeholder="<?php echo $row['numbe'];  ?>" name="productname" class="box"></td>
      </td>
    </tr>
    <br>
    <tr>
     <td><a href ="editprofile.php" name="edit" type ="sumbit"  class ="btn btn-success">EDIT</a></td><br>
     <td><a href="logout.php" name="logout"  type="submit" class ="btn btn-success">LOGOUT</a></td> 
    </tr>  
     </div>
    
</center>
</body>
</html>
<?php 
   
}
}}

?>