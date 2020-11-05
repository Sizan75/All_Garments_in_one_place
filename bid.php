<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" href="./css/style.css">
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
		   header("Location: /login.php");
		}
	?> 
  <div class="body">
    <form method="post">
        <label id="price">Offered Price:</label>
        <input type="number" step="any" id="price" name="price" required placeholder="Offered Price For Per Product">
        <br>
      <input type="hidden" name="o_id" value="<?php echo $_GET['id']; ?>">
        <br>
      <input type="submit" value="Order" name="submit">


      <div style="margin-top: -3px;padding: 12px">
        <?php 
          if(isset($_POST['submit'])){
              $offer_id=$_GET['id'];
              $price=$_POST['price'];
              $g_email=$_SESSION['email'];
              $sql="insert into submitted_offers(offer_id,g_email,price) values('$offer_id','$g_email','$price')";

              if($conn){
                if(mysqli_query($conn, $sql)){  
                  echo "
                  <script>
                    alert('Bid Successfully');
                    window.location.href='./submitted_offers.php';
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
