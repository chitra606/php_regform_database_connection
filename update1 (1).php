<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script type="text/javascript"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		
		<?php
			$server="localhost";
			$uname="root";
			$pwd="";
			$db="kvt";
			$con=mysqli_connect($server,$uname,$pwd,$db) or die('db not connected');
			$id1=$_GET['id'];
			$que="select * from emp where id=$id1";
			$res=mysqli_query($con,$que);
			if($row=mysqli_fetch_array($res))
			{
			?>
			<form method="post" action="upt.php">
				<label class="form-label">id</label>
				<input type="text" class="form-control" name="id" value="<?php echo $row[0]; ?>" readonly>
				<label class="form-label">name</label>
				<input type="text" class="form-control" name="name" value="<?php echo $row[1]; ?>" >
				<label class="form-label">city</label>
				<input type="text" class="form-control" name="city" value="<?php echo $row[2]; ?>" >
				<input type="submit" name="update" class="btn-btn-primary" value="update">
			<?php	
			}
			?>	
			</form>
			
			</div>
			</div>

</body>
</html>