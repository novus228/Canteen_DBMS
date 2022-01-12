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
					<a class="nav-link" href="admin/index.php">Our Employees</a>
				</li>
			</ul>
		
		</div>
	</nav><br>
	<span><marquee>Canteen opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<center>
	<div class="col-md-8" id="main_content">
		<h3>Please Enter the order details:</h3>
		<form action="bangorder1.php" method="post">
			<div class = "form-group">
				<label for="mangaid">Customer ID:</label>
				<input type="text" name="custid" class="form-control" required>
			</div>
			<div class = "form-group">
				<label for="director">Food ID:</label>
				<input type="text" name="foodid" class="form-control" required>
			</div>
			<div class= "form-group">
				<label for="prid">Quantity:</label>
				<input type="text" name="quantity" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-primary">Place the order</button></center>
		</form>
	</div>
	</center>
</body>
</html>