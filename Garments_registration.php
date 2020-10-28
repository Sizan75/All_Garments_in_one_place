<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
  <?php include './header.php'; ?>
    <div class="container-fluid topSection" style="background-color: #E5E1DE; padding-top: 20px; padding-bottom: 30px;">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-1">
                <img src="./picture/logo.png" alt="..." width="70" height="70" class="rounded-circle profileImg" style="margin-left: 15px;">
            </div>
            <div class="col-6">
                <div class="row">
                    <h2 style="margin-top: 15px;">All Garments in One Place</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#" style="margin-left: 150px; color: #000;">Garments Registration</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                    <button type="button" class="btn btn-secondary" style="margin-left: 450px;">About</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-secondary" style="margin-left: 10px;">Contact Us</button>
                </li>
              </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid bottomSection" style="margin-top: 35px;">
      <!--  <div class="row">
            <div class="col-1"></div>
            <div class="col-2">
                <img src="./picture/g.jpg" alt="..." class="rounded" width="200" height="200">
            </div>  -->
            <div class="col-6">
               <form method="post">
                <div class="form-group">
                  <label for="name">Company Name</label>
                  <input type="text" class="form-control"   name="name" id="name" placeholder="Garments Name">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control"   name="address" id="address" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control"   name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="tel" class="form-control"   name="phone" id="phone" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" class="form-control"   name="country" id="country" placeholder="Country">
                </div>
                <div class="form-group">
                  <label for="trade_license">Trade License</label>
                  <input type="number" class="form-control"   name="trade_license" id="trade_license" placeholder="Trade License">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="text" class="form-control"   name="website" id="website" placeholder="Website">
                </div>
                <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="exampleInputEmail1"  name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
 <?php
      if(isset($_POST['submit'])){
           $name=$_POST['name'];
           $address=$_POST['address'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
           $country=$_POST['country'];
           $trade_license=$_POST['trade_license'];
           $password=$_POST['password'];
           $website=$_POST['website'];
           $user_type='garments';

                $sql="insert into garments_information(license_id,gname,address,email,phone,country,website,password) values('$trade_license','$name','$address','$email','$phone','$country','$website','$password')";
                $query=mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if($query==1){
                          $sql1="insert into logintest(email,password,u_type) values('$email','$password','$user_type') ";
                          $query1=mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                          if($query1==1){
                              $_SESSION['u_type']='garments';
                              echo "
                                <script>
                                alert('Registration Successfully');
                                window.location.href='./';
                                </script>";
                          }else{
                              echo "Something Went Wrong. Try Again";
                          }
                      }}
                  ?>
              </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>