<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/main.css">
</head>
<body>
<?php include "include/conn.php";?>
<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">All Garments</a>
          </div>
      
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left"> 
                <li><a href="#">Offers</a></li>
              <li><a href="#">Order</a></li>
              <li><a href="./product-upload.php">Product Upload</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="#">About</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="./logout.php">Log Out</a></li>
<!--               <li><a href="#">For Buyers</a></li> -->
              <li><a href="./login.php">Sign In</a></li>
              <li><a href="./buyers_registration.php">Sign Up</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div>
        
      </div>
      <h3>Hot Products</h3>
        <?php
        $sql="select * from product_info ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
            echo '
                <div class="row"> 
				<div class="col-sm-4 col-md-3">
					<div class="thumbnail">
					<img src="./picture/product/'.$row['image'].'"  style="height:260px;" alt="...">
					<div class="caption">
					<h3 style="height:40px;overflow:hidden;"><a href="./productdetails.php?id='.$row['id'].'">'.$row['name'].'</a></h3>
					<p class="price">Price: '.$row['price'].' $</p>
					
					<p><button  class="btn btn-primary" onclick="window.location.href=\'./buy-now.php?id='.$row['id'].'\'">Buy Now</button></p>
					</div>
			        </div>
			         </div>
				</div>';
        }

?>
    </div>

</body>
</html>