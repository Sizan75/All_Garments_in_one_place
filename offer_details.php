<!DOCTYPE html>
<html>
<head> 
	<link rel='stylesheet' href='./css/style.css'>
	<link rel='stylesheet' href='./css/product-info.css'>
</head>
<body>
	<?php include './header.php'; 
	$sql="select * from offers where o_id=".$_GET['o_id'];
	$result = mysqli_query($conn, $sql);
	if($row = mysqli_fetch_array($result)) {
	    $_SESSION['price']=$row['price'];
		echo "
		<div>
			<main class='container'> 
				<div class='left-column'>
					<img data-image='black' class='active' src='./picture/offer/".$row['image']."' alt=''> 
				</div> 
				<div class='right-column'> 
					<div class='product-description'> 
					    <h2>".$row['name']."</h2>
						<h4>Size: " .$row['size']."</h4>
						<h4>Colours: ".$row['colour']."</h4>
						<h4>Order Quantity:".$row['quantity']."</h4>
						<p>".$row['details']."</p>
					</div>   
					<div class='product-price'>
						<span>".$row['price']." $</span>
						<a href='./bid.php?id=".$row['o_id']."' class='cart-btn'>Bid</a>
					</div>
				</div>
			</main>
		</div>
		";
	}   
	?> 
</body>
</html>
