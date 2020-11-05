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
    input[type=number] {
        -moz-appearance: textfield;
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
<?php include './header.php';
if($_SESSION['u_type']=="buyer"){
    echo "";
}else{
    die();
}

?>
<div class="container-fluid topSection" style="background-color: #85c1e9; padding-top: 20px; padding-bottom: 30px;">
    <div class="row">
        <div align="center" >
            <img src="./picture/logo.png" alt="..." width="70" height="70" class="rounded-circle profileImg" style="margin-left: 15px; align="center" ">
        </div>
        <div >
            <div class="row">
                <h2 style="margin-top: 15px;" align="center" >All Garments in One Place</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="./product-upload.php" style="margin-left: 150px; padding-right: 15px; padding-left: 70px; color: #000;">Post Offer</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <button type="button" onclick="window.location.href='./index.php'" class="btn btn-secondary" style="margin-left: 450px; background-color: #4CAF50;">Home</button>
                </li>
                <li class="nav-item">
                    <button type="button" onclick="window.location.href='./logout.php'" class="btn btn-secondary" style="margin-left: 10px; background-color: #4CAF50; ">Log Out</button>
                </li>
            </ul>
        </div>
    </nav>
</div>


<div class="body">
    <form method="post" enctype="multipart/form-data">
        <label for="name">Product Name</label>
        <input type="text" name="name" required placeholder="Name">
      <label for="description">Product Description</label> <br>
        <textarea  name="description" required placeholder="Product Description"></textarea>
         <br>
        <label for="colour">Colours</label>
        <input type="text" name="colour" required placeholder="Colours">
        <label for="size">Size</label>
        <input type="text" name="size" required placeholder="Size">
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" required placeholder="Price"> <br>
 <br>
        <label for="quantity">Quantity</label>
        <input type="number"  name="quantity" required placeholder="Quantity">
<br>
      <label for="photos">Choose Image</label>
      <input type="file" name="photos" >
      <input type="submit" value="Post" align="center" name="submit">
        <div style="margin-top: -3px;padding: 12px">
        <?php 
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
          $description=$_POST['description'];
          $price=$_POST['price'];
          $size=$_POST['size'];
          $colour=$_POST['colour'];
          $quantity=$_POST['quantity'];
          $photo_name=$_SESSION['user_id'].'_'.time().".png";
          $email=$_SESSION['email'];
          $sql="insert into offers(name,details,price,image,size,colour,quantity,buyer_email) values('$name','$description','$price','$photo_name','$size','$colour','$quantity','$email')";
          if($conn){
            print_r($_FILES);
            $tmp_name = $_FILES['photos']["tmp_name"];
            if(move_uploaded_file($tmp_name, "./picture/Offer/$photo_name")){
              if(mysqli_query($conn, $sql)){
                echo "
                <script>
                alert('Offer posted Successfully');
                window.location.href='./offer_upload.php';
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
