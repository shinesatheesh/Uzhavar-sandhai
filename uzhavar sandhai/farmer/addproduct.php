<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

<style >
    .button{
      position:absolute;
      top:20%;
      left: 45%;
      transform translate(-50,-50);
        display: inline-flex;
        height: 60px;
        padding: 0;
        background: #b65c08;
        border:none;
        outline: none;
        border-radius: 5px;
        overflow: hidden;
        font-family:'Quicksand',sans-serif;
        font-size: 20px;
        font-weight: 600;
        cursor: pointer;
    }

    .card{
    width: 250px;
    height:300px;
    background:#e5e5e5 !important;
    border:none !important;
    box-shadow: 15px 20px 20px rgba(0,0,0,.3),
                inset 4px 4px 10px white;
    border-radius: 20px !important;
    overflow: hidden;
    justify-content: center;
    align-items: center;
    margin:20px 60px;
    padding:25px 30px;
}

    .button:hover{
      background:#008168;
    }

    .button:active{
      background:#ac6405;
    }

    .button__text,
    .button__icon{
      display: inline-flex;
      align-items: center;
      padding: 0 24px;
      color: #fff;
      height: 100%;
    }

    .btn btn-primary{
      color: #c25309;
    }

    .card-body text-center{
      color: rgb(138, 74, 23);
    }
    .button__icon{
      font-size: 1.5em;
      background: rgba(2,0,0,8.08);
    }
    body{
        background-image: url("final.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      background-color: rgba(0,0,0,0.25);
    }
  .navbar{
    background: rgb(3, 87, 3);
    text align:center;
  }
</style>
</head>
<body>

    <section>
      <br>
      <br>
      <br>
    </section>
                  
          <!--add product-->
          <section id="categories">
            <div class="container m-5">
              <div class="row">
          <div class="col-lg-3 col-md-3 col-12">
            <div class="card" >
              <img class="card-img-top" src="addproduct_image/myproduct5.jpeg" >
              <div class="card-body text-center">
                <a href="get.php" class="btn btn-secondary">ADD PRODUCT</a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-3 col-12">
            <div class="card" >
              <img class="card-img-top" src="addproduct_image/myproduct5.jpeg" >
              <div class="card-body text-center color-green" >
                <a href="admin.php" class="btn btn-secondary">MY PRODUCT</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-12">
            <div class="card" >
              <img class="card-img-top" src="addproduct_image/customerorder2.jpeg" >
              <div class="card-body text-center">
                <a href="orderpage.php" class="btn btn-secondary">CUSTOMER ORDER</a>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-3 col-12">
            <div class="card" >
              <img class="card-img-top" src="addproduct_image/profile2.jpeg">
              <div class="card-body text-center">
                <a href="farmer_profile.php" class="btn btn-secondary">PROFILE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </section>
          <!--view/edit product-->

         
         
            
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>

</body>
</html>