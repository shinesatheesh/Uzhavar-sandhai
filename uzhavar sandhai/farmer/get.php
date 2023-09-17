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

    /*.register label{
        width: 500px;
        display: inline-block;*/
    }
</style>
<body>
    <section>
        <br>
        <br>
    </section>
    <div class="container">
        <div class="admin-product-form-container">
            <form action="connect.php" class="form-area" method="post" enctype="multipart/form-data">
                <h1>ADD NEW PRODUCT</h1>
                <br>
                <br>
                <table class="register">
                <tr>
                <td><label>Product name:</label></td>
                <td><input type="text" placeholder="enter product name" name="productname" class="box"></td>
                <td>    </td>
                <td><label>Quantity:</label></td>
                <td><input type="number" placeholder="enter quantity" name="qty" class="box"></td>
                <td></td> 
                </tr>

                <tr>
               
                <td><label>Product Price:</label></td>
                <td><input type="number" placeholder="enter product price" name="productprice" class="box"></td>
                <td></td>
                <td><label>Date:</label></td>
                <td><input type="date" placeholder="enter date" name="date" class="box"></td>
                </tr>
                <tr>
                <td><label>Product image:</label></td>
                <td><input type="file" accept=".jpg,.jpeg,.png" name="my_image" class="box"></td>
                <td>    </td>
                <td><label>District:</label> </td>   
                <td><li><select class="box" name="district">
                    
                    <option>Cuddalore</option>
                    <option>Coimbatore</option>
                    <option>Chennai</option>
                    <option>Trichy</option>
                    <option>Salem</option>
                    </li></select></td>
                </tr>
                <tr>
                <td><label for="descriptiion">Description:</label></td>
                <td><textarea name="description" placeholder="description" rows="2" cols="5" class="new"></textarea></td>
                <td>  </td>
                <td><label>Location:</label></td>
                <td><select class="box" name="location">
                <optgroup label="Cuddalore">
                    <option>panruti</option>
                    <option>Neyveli</option>
                </optgroup>
                <optgroup label="Coimbatore">
                    <option>panruti</option>
                    <option>Neyveli</option>
                </optgroup>
                <optgroup label="Chennai">
                    <option>panruti</option>
                    <option>Neyveli</option>
                </optgroup>
                <optgroup label="Trichy">
                    <option>panruti</option>
                    <option>Neyveli</option>
                </optgroup>
                <optgroup label="Salem">
                    <option>panruti</option>
                    <option>Neyveli</option>
                </optgroup>
                    </li></select></td>
                </tr>    

          
</td>
            </tr>
            <tr>
            <td><label>Phone number:</label></td>
                <td><input type="number" placeholder=" phone number" name="phonenumber" class="box"></td>   
                <td>  </td>
                <td><label>Timing:</label></td>
                <td><select class="box" name="timing">
                
                    <option>8.00AM-10.00AM</option>
                    <option>10.00AM-12.00PM</option>
                    <option>12.00PM-2.00PM</option>
                    <option>2.00PM-4.00PM</option>
                    <option>6.00PM-8.00PM</option>
                    <option>8.00PM-10.00PM</option>
                
                    </li></select></td>
</tr>
                
            </table>
            <input type="submit" class="btn" name="AddProduct" value="Add Product">
           </form>
        </div>
    </div>
    
</body>
</html>
