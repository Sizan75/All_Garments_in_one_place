<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="site.css">

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
  <?php include './header.php'; ?>
  <?php
  $sql1="select * from garments_information where email='".$_SESSION['email']."' ";
  $result = mysqli_query($conn, $sql1);
  if($row = mysqli_fetch_array($result)) {
      $_SESSION['gname'] = $row['gname'];
//              $_SESSION['u_type']=$row['u_type'];
//               $_SESSION['user_id']=$row['id'];
  }else {
      echo "Session data not saved";
  }
  ?>
    <div class="container-fluid topSection" >
        <div class="row">
<!--            <div class="col-1"></div>-->
            <div class="col-1" align="center">
                <img src="./picture/logo.png" alt="..." width="70" height="70" class="rounded-circle profileImg">
            </div>
            <div class="col-6">
                <div class="row">
                    <a class="navbar-brand" href="./index.php">All Garments in One Place</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item" >
                      <button type="button"  onclick="window.location.href='./index.php'" class="btn btn-primary" style="margin-left: 750px;">Home</button>
                  </li>
                <li class="nav-item">
                    <button type="button"  onclick="window.location.href='./notifications.php'" class="btn btn-primary" style="margin-left: 10px;">Notifications</button>
                </li>
                <li class="nav-item">
                    <button type="button" onclick="window.location.href='./logout.php'" class="btn btn-primary" style="margin-left: 10px;">Logout</button>
                </li>
              </ul>
            </div>
        </nav>
    </div>


        <?php
        $sql="select * from product_info where gname='".$_SESSION['gname']."' ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
            echo '
                <div class="product-box"> 
				<div class="card">
					<img src="./picture/product/'.$row['image'].'"  style="height:260px;" alt="...">
					<div class="caption">
					<h3 style="height:40px;overflow:hidden;"><a href="./productdetails.php?id='.$row['p_id'].'">'.$row['name'].'</a></h3>
					<p class="price">Price: '.$row['price'].' $</p>
					<p>Garments Name: '.$row['gname'].' </p> 
					<p>Min Order: '.$row['min_order'].' </p> 
					
					<p><button  class="btn btn-primary" onclick="window.location.href=\'./buy-now.php?id='.$row['p_id'].'\'">Buy Now</button></p>
					</div>
			        </div>
			         </div>
				';
        }
        ?>


   </body>
</html>