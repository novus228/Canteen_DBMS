<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"cant");
		$food_id="";
		$food_name="";
		$veg="";
		$food_price="";
		$query = "select food.* from food where CAN_ID=2";
		$q1 = "set @p='101'";
		$q2 = "call test1(@p,@a);";
		$q3 = "select @a as no;";
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Banglore Portal</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Banglore Canteen</a></div>
				<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="empbang.php">Our Employees</a>
				</li>
			</ul>
		
		</div>
	</nav><br>
	<span><marquee>Canteen opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<center>Number of Current Orders are: <?php $rq1 = mysqli_query($connection,$q1); 
	$rq2 = mysqli_query($connection,$q2); 
	$rq3 = mysqli_query($connection,$q3); 
	$r = mysqli_fetch_assoc($rq3);
	echo $r['no']; ?></center><br><br>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Food ID:</th>
					<th>Food Name:</th>
					<th>Type:</th>
					<th>Food Price:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$food_id = $row['FOOD_ID'];
						$food_name = $row['FOOD_NAME'];
						$veg = $row['TYPE'];
						$food_price= $row['FOOD_PRICE'];?>
						<tr>
							<td><?php echo $food_id;?></td>
							<td><?php echo $food_name;?></td>
							<td><?php echo $veg;?></td>
							<td><?php echo $food_price;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div><br><br>
<center><a href="bangorder.php"><button type="submit" class="btn btn-primary">Order Food</button></a></center>
</body>
</html>