<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">
  <style type="text/css">
    input[type=text],input[type=email],input[type=file], select{
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #624CAF;
      color: white;
      padding: 15px 99px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      position: absolute; 
      margin: 60px 130px;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .body {
      border-radius: 5px; 
      padding-top: 20px; 
      padding-left: 30%; 
      padding-right: 30%;
    }
  </style>
</head>
<body>

<div class="container-fluid topSection" style="background-color: #E5E1DE; padding-top: 20px; padding-bottom: 30px;">
    <div class="row">
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
        <a class="navbar-brand" href="./product-upload.php" style="margin-left: 150px; padding-right: 15px; padding-left: 70px; color: #000;">Product Upload</a>
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
<?php
include './header.php';
if($_SESSION['u_type']=="garment"){
    echo "  ";
}else{
    die();
}
?>
<div class="body">
    <form method="post" enctype="multipart/form-data">
      <label for="name">Product Name</label>
      <input type="text" name="name" required placeholder="Product Name">

      <label for="description">Product Description</label>
      <input type="text" name="description" required placeholder="Product Description">

        <label for="colour">Colours</label>
        <input type="text" name="colour" required placeholder="Colours">
        <label for="size">Available Size</label>
        <input type="text" name="size" required placeholder="Available Size">

      <label for="price">Price</label>
      <input type="text" name="price" required placeholder="Your Price">

      <label for="photos">Choose Image</label>
      <input type="file" name="photos" placeholder="Photo">
      <input type="submit" value=" Upload " align="center" name="submit">
        <div style="margin-top: -3px;padding: 12px">
        <?php 
        if(isset($_POST['submit'])){
          $name=$_POST['name'];
          $description=$_POST['description'];
          $price=$_POST['price'];
          $size=$_POST['size'];
          $colour=$_POST['colour'];
          $photo_name=$_SESSION['id'].'_'.time().".png";

          $sql="insert into product_info(name,discription,price,image,size,colour) values('$name','$description','$price','$photo_name','$size','$colour')";
          if($conn){
            print_r($_FILES);
            $tmp_name = $_FILES['photos']["tmp_name"];
            if(move_uploaded_file($tmp_name, "./picture/product/$photo_name")){
              if(mysqli_query($conn, $sql)){
                echo "
                <script>
                alert('Upload Successfully');
                window.location.href='./product-upload.php';
                </script>";
              }else{
                echo "Something Went Wrong. Try Again";
              }
            }else{
              echo "Invalid Image. Try Again";
            }
          }
        }
        ?>
        </div>
    </form>
  </div>

</body>
</html>
