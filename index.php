<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
    <style type="text/css">
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            overflow: hidden;
        }
    </style>
        </head>
<body>
<?php include "include/conn.php";?>
<?php include './header.php'; ?>
<div >
    <nav class="navbar navbar-default" >
        <div class="container-fluid">

          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">All Garments In One Place</a>
          </div>
      
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav navbar-left">
             <?php
              if(isset($_SESSION['user_id'])){
                  if($_SESSION['u_type']=="buyer") {
                      echo '<li><a href="./order.php">Order</a></li>';
                  }    else {}
              }
              ?>
             <?php
            if(isset($_SESSION['user_id'])){
              if($_SESSION['u_type']=="garment") {
                  echo '<li><a href = "./product-upload.php" > Product Upload </a ></li>';
                  echo '<li><a href = "./offer.php" > Offer </a ></li>';
                  }    else {
                  echo '<li><a href = "./offer_upload.php" > Post Offer </a ></li>';

              }}
              ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['user_id'])){
                    if($_SESSION['u_type']=="garment") {
                        echo '<li><a href="./Garments_profile.php">Profile</a></li>';
                        echo '<li><a href="./submitted_offers.php">Submitted Offers</a></li>';
                    }    else {
                        echo '<li><a href="./buyers_profile.php">Profile</a></li>';

                    }}
                ?>

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
     <div>

      <h3>Hot Products</h3>
        <?php
        $sql="select * from product_info";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
            echo '
                
				<div class="product-box">
					<div class="card">
					   <img src="./picture/product/'.$row['image'].'"  style="height:260px;" alt="...">
					   <div class="caption">
					   <h3 style="height:50px;overflow:hidden;"><a href="./productdetails.php?p_id='.$row['p_id'].'">'.$row['name'].'</a></h3>
					   <p class="price">Price: '.$row['price'].' $</p>
					   <p>Garments Name: '.$row['gname'].' </p> 
					   <p>Min Order Quantity: '.$row['min_order'].' </p> 
					   <p><button  class="btn btn-primary" onclick="window.location.href=\'./buy-now.php?p_id='.$row['p_id'].'\'">Buy Now</button></p>
					   </div>
			        </div>
			         </div>
				</div>';
        }

?>
    </div>

</body>
</html>