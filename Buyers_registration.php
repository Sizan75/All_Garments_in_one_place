<!DOCTYPE html>
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
             <a href="index.php"><h2 style="margin-top:15px;"> All Garments in One Place</h2>
             </a></div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#" style="margin-left: 150px; color: #000;">Buyers Registration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <button type="button" onclick="window.location.href='./index.php'"class="btn btn-secondary" style="margin-left: 450px; background-color: #0d6f6f;">Home</button>
                </li>
                <li class="nav-item">
                    <button type="button" onclick="window.location.href='./buyers_profile.php'" class="btn btn-secondary" style="margin-left: 10px; background-color: #0d6f6f;">Profile</button>
                </li>
                <li class="nav-item">
                    <button type="button" onclick="window.location.href='./logout.php'" class="btn btn-secondary" style="margin-left: 10px; background-color: #0d6f6f;">Log Out</button>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="row" >
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="./picture/logo.jpg" alt="...">
              </a>
            </div>
          </div>
        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Fill Up Information</div>
                                <div class="card-body">
                                    <form name="my-form"  method="post">
                                        <div class="form-group row">
                                            <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="name" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                            <div class="col-md-6">
                                                <input type="email" id="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="company" class="col-md-4 col-form-label text-md-right">Company Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="company_name" class="form-control" name="company_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                            <div class="col-md-6">
                                                <input type="text" id="phone" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right"> Address</label>
                                            <div class="col-md-6">
                                                <input type="text" id="address" class="form-control" name="address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="licence" class="col-md-4 col-form-label text-md-right">Trade Licence</label>
                                            <div class="col-md-6">
                                                <input type="text" id="licence" class="form-control" name="licence">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nid_number" class="col-md-4 col-form-label text-md-right">NID  Number </label>
                                            <div class="col-md-6">
                                                <input type="text" id="nid_number" class="form-control" name="nid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Password </label>
                                            <div class="col-md-6">
                                                <input type="password" id="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary" name="submit">Register</button>
                                            </div>
                                        </div>
    <?php
    if(isset($_POST['submit'])){

              $name=$_POST['name'];
              $address=$_POST['address'];
              $email=$_POST['email'];
              $phone=$_POST['phone'];
              $company_name=$_POST['company_name'];
              $licence=$_POST['licence'];
              $nid=$_POST['nid'];
              $password=$_POST['password'];

              $user_type='buyer';

              $sql="insert into buyers(name,address,email,phone,company_name,nid,identification_id,password) values('$name','$address','$email','$phone','$company_name','$nid','$licence','$password')";
              $query=mysqli_query($conn, $sql) or die(mysqli_error($conn));
              if($query==1){
               $sql1="insert into login(email,password,u_type) values('$email','$password','$user_type') ";
               $query1=mysqli_query($conn, $sql1) or die(mysqli_error($conn));
               if($query1==1){
                   $_SESSION['user_id']=mysqli_insert_id($conn);
                    echo "
                                <script>
                                alert('Registration Successfully');
                                window.location.href='./login.php';
                                </script>";
                            }else{
                                echo "Something Went Wrong. Try Again";
                            }
               }}
?>

                                    </form>
                                <form  name="my-form"  method="get" action="./Garments_registration.php">
                                    <button type="submit" pading="20px;" class="btn btn-primary">Click for Garments Registration</button>
                                </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </main>
    </div
</body>
</html>