<!DOCTYPE html>
<html>
<head>
	<title>Canteen Services</title>
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
				<a class="navbar-brand" href="index.php">Canteen Services(CS)</a>
			</div>
		</div>
	</nav><br>
	<span><marquee>Canteen opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Canteen Timings</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
		</div>		
		<div class="col-md-8" id="main_content" style="background-image: url('nnnn.jpeg');"><br><br>
			<center><h5>Please choose the canteen:</h5></center><br><br>
			<center><a href="bang.php"><button type="submit" name="login" class="btn btn-primary">Banglore Canteen</button></a></center>
			<br><br>
			<center><a href="nitte.php"><button type="submit" name="login" class="btn btn-primary">Nitte Canteen</button></a></center>
		</div>
	</div>
</body>
</html>