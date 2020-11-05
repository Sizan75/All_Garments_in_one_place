<!DOCTYPE html>
<html>
<head> 
	<link rel='stylesheet' href='./css/style.css'>
	<link rel='stylesheet' href='./css/product-info.css'>
</head>
<body>
	<?php include './header.php'; 
	$sql="select * from product_info where p_id=".$_GET['p_id'];
	$result = mysqli_query($conn, $sql);
	if($row = mysqli_fetch_array($result)) {
	    $_SESSION['price']=$row['price'];
		echo "
		<div>
			<main class='container'> 
				<div class='left-column'>
					<img data-image='black' class='active' src='./picture/product/".$row['image']."' alt=''> 
				</div> 
				<div class='right-column'> 
					<div class='product-description'> 
						<h2>".$row['name']."</h2>
						<h4>Available Size: " .$row['size']."</h4>
						<h4>Available Colours: ".$row['colour']."</h4>
						<h4>Min Order Quantity:".$row['min_order']."</h4>
						<p>".$row['description']."</p>
					</div>   
					<div class='product-price'>
						<span>".$row['price']." $</span>
						<a href='./buy-now.php?p_id=".$row['p_id']."' class='cart-btn'>Buy Now</a>
					</div>
				</div>
			</main>
		</div>
		";
	}   
	?> 
</body>
</html>
