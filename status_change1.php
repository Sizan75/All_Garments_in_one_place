<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

      <link rel="stylesheet" href="./css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
      integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
       integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
      integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  </head>
  <body>
    <nav class="navbar navbar-inverse" >
        <div class="container-fluid">

          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

            </button>
            <a class="navbar-brand" href="./index.php">All Garments In One Place</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav navbar-right">
                      <li class="active"><a href="./index.php"><span class="glyphicon glyphicon-home">Home</a></li>
                          <li class="active"><a href="./Garments_profile.php"><span class="glyphicon glyphicon-user">Profile</a></li>
                      <li class="active"><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
              </ul>
          </div>
        </div>
      </nav>

    <?php
    include "include/conn.php";
    $o_id=$_GET['o_id'];
    $status='Rejected';
     if(isset($status)){
       $sql="update  order_info set status='$status' where order_id='$o_id'";
       $query=mysqli_query($conn, $sql) or die(mysqli_error($conn));
       echo "
       <script>
       alert('Order Rejected Successfully');
       window.location.href='./notifications.php';
       </script>";
     }else {
       echo " System error found";
     }
    ?>

  </body>
</html>
