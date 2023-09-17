
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register product</title>
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


</style>
<body>
 <center>   
    <div class="container">
        <div class="admin-product-form-container">
            <form action="connect.php" class="form-area" method="POST" enctype="multipart/form-data">
                <h1>Add new product</h1>
                <table class="register">
                <tr>
                <td><label>Product Name:</label></td>
                <td><input type="text" placeholder="enter product name" name="productname" class="box"></td>
                </tr>
                <br>
                <tr>
                    <td><label>Product quantity:</label></td>
                    <td><input type="number" placeholder="enter quantity" name="productqty" class="box"></td>
                    </tr><br>
                <tr>
                <td><label>Product Price:</label></td>
                <td><input type="number" placeholder="enter product price" name="productprice" class="box"></td>
                </tr>
                <br>
                
                
                <tr>
                <td><label>Phone Number:</label></td>
                <td><input type="number" placeholder="enter your phone number" name="phonenumber" class="box"></td>
                </tr>
                <br>
                <tr>
                <td><label for="address">Addresss:</label></td>
                <td><input type="text" id="address" placeholder="enter your address" name="farmeraddress" class="new"></td>
                </tr>
                <br>
                <tr>
                <td><label>Product Image:</label></td>
                <td><input type="file" name="my_image" class="box"></td>
                </tr>
                <br>
                <tr>
                    <td><label for="descriptiion">Description:</label></td>
                    <td><input type="text" id="description" placeholder="product description" name="description" class="new"></td>
                    </tr>
                <tr>
                <td><label>Date:</label></td>
                <td><input type="date" placeholder="enter date" name="date" class="box"></td>
                </tr>
                <br>
                
            </table>
            <input type="submit" class="btn" name="AddProduct" value="AddProduct">
           </form>
        </div>
    </div>
</center>
</body>
</html>



