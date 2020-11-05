<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">
  <style type="text/css">
    input[type=text]{
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
	#address{
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
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer; 
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
    input[type=number] {
        -moz-appearance: textfield;
    }
  </style>
</head>
<body>
	<?php 
		include './header.php'; 
		if(!isset($_SESSION['user_id'])){
		   header("Locaation: /login.php");
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
            <a class="navbar-brand" href="./buy-now.php" style="margin-left: 150px; padding-right: 15px; padding-left: 70px; color: #000;">Check Out</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='./index.php'" style="margin-left: 450px; background-color: #0d6f6f;">Home</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='./logout.php'" style="margin-left: 10px;background-color: #0d6f6f;">Log Out</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
  <div class="body">
    <form method="post"> 

<!--      <label id="name">Name</label>-->
<!--      <input type="text" id="name" name="name" required placeholder="Your Name">-->

      <label id="quantity">Quantity:</label>

      <input type="number" id="quantity" name="quantity" required placeholder="Order Quantity">
        <br>
        <br>
        <br>
      <label for="address">Your Address</label>
      <textarea id="address" name="address" placeholder="Your Full Address"> </textarea> 
      <input type="hidden" name="p_id" value="<?php echo $_GET['p_id']; ?>">
      <input type="submit" value="Order" name="submit">


      <div style="margin-top: -3px;padding: 12px">
        <?php 
          if(isset($_POST['submit'])){
              $address=$_POST['address'];
              $product_id=$_GET['p_id'];
              $quantity=$_POST['quantity'];
              $price=$_SESSION['price'];
              $total_price=$quantity * $price;
//              $b_id=$_SESSION['user_id'];
              $b_email=$_SESSION['email'];
              $sql="insert into order_info(product_id,buyer_email,total_price,address,quantity) values('$product_id','$b_email','$total_price','$address','$quantity')";

              if($conn){
                if(mysqli_query($conn, $sql)){  
                  echo "
                  <script>
                    alert('Order Successfully');
                    window.location.href='./order.php';
                  </script>";
                }else{
                  echo "Something Went Wrong. Try Again";
                }
              }
          }
        ?>
      </div>
    </form> 
</form>
  </div>

</body>
</html>
