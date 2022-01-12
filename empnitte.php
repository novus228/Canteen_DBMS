<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"cant");
		$emp_id="";
		$fname="";
		$mname="";
		$lname="";
		$gender="";
		$position="";
		$salary="";
		$query = "select employee.* from employee where CAN_ID=1";
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Portal</title>
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
				<a class="navbar-brand" href="index.php">Nitte Employees</a></div>
				<ul class="nav navbar-nav navbar-right">
			</ul>
		
		</div>
	</nav><br>
	<span><marquee>Canteen opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Employee ID:</th>
					<th>Employee Name:</th>
					<th>Gender:</th>
					<th>Position:</th>
					<th>Salary:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$emp_id = $row['EMP_ID'];
						$fname = $row['FNAME'];
						$mname = $row['MINIT'];
						$lname = $row['LNAME'];
						$gender = $row['GENDER'];
						$position= $row['POSITION'];
						$salary = $row['SALARY'];
					?>
						<tr>
							<td><?php echo $emp_id;?></td>
							<td><?php echo $fname;echo " "; echo $mname; echo " ";;echo $lname;?></td>
							<td><?php echo $gender;?></td>
							<td><?php echo $position;?></td>
							<td><?php echo $salary;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
<br><br>
</body>
</html>