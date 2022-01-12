
<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"cant");
		$query0 = "select FOOD_PRICE from FOOD where FOOD_ID=$_POST[foodid]";
		$query_run0=mysqli_query($connection,$query0);
		$q = mysqli_fetch_assoc($query_run0);
		$price = $q['FOOD_PRICE'] * $_POST['quantity'];
		$query = "insert into ORDER_FOOD values(null,'$_POST[custid]','$price',100)";
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Ordered Successfully")
			window.location.href = "nitte.php";
		</script>