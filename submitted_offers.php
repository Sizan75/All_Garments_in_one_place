 <!DOCTYPE html>
 <html>
 <head> 
 	<link rel="stylesheet" href="./css/style.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

     <style type="text/css">
 		#customers {
 			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
 			border-collapse: collapse;
 			width: 100%;
 		}
 		#customers td, #customers th {
 			border: 1px solid #ddd;
 			padding: 8px;
 		}
 		#customers tr:nth-child(even){background-color: #f2f2f2;}
 		#customers tr:hover {background-color: #ddd;}
 		#customers th {
 			padding-top: 12px;
 			padding-bottom: 12px;
 			text-align: left;
 			background-color: #4CAF50;
 			color: white;
 		}
 		img{
 			object-fit: cover;
 		}
 	</style>
 </head>
 <body>
 	<?php include './header.php';
 	$email=$_SESSION['email'];?>
    <div class="container-fluid topSection" style="background-color: #E5E1DE; padding-top: 20px; padding-bottom: 30px;">
        <div class="row">
            <div class="col-1">
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
                    <li class="nav-item active">
                        <button type="button" onclick="window.location.href='./index.php'" class="btn btn-secondary" style="margin-left: 930px;background-color: #0d6f6f;">Home</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" onclick="window.location.href='./logout.php'" class="btn btn-secondary" style="margin-left: 10px;background-color: #0d6f6f;">Logout</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="body" style="margin: 40px">
 		<table id="customers">
 			<tr>
                <th>Name</th>
 				<th>Image</th>
 				<th>Offered Price</th>
 				<th>Garment Email</th>

 			</tr>
 			<?php 
				$sql="select s.*,o.image,o.name from submitted_offers s inner join offers o on s.offer_id=o.o_id where s.g_email='$email'";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_array($result)) {

					echo '
					<tr>
					    <td><a href="./offer_details.php?o_id='.$row['offer_id'].'">'.$row['name'].'</a></td>
		 				<td><img src="./picture/offer/'.$row['image'].'" width="100" height="100"/></td> 
		 				<td>'.$row['price'].'</td> 
		 				<td>'.$row['g_email'].'</td> 
		 			</tr> ';
				}
			?>  
 		</table>
 	</div>
 </body>
 </html>
