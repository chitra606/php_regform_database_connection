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
		<table class="table table-bordered">
		<thead>
			<th>id</th>
			<th>name</th>
			<th>city</th>
			<th>update</th>
		</thead>
		<tbody>
			<?php
			$server="localhost";
			$uname="root";
			$pwd="";
			$db="kvt";
			$con=mysqli_connect($server,$uname,$pwd,$db) or die('db not connected');
			$query="select * from emp";
			$res=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($res))
			{
				$id=$row[0];
				echo"<tr>";
				echo"<td>".$row[0]."</td>";
				echo"<td>".$row[1]."</td>";
				echo"<td>".$row[2]."</td>";
				echo"<td><a href='update1.php?id=$id' class='btn btn-success'>update</a></td>";
				echo"<td><a href='del1.php?id=$id' class='btn btn-success'>delete</a></td>";
				echo"<tr>";

			}
		?>
	</tbody>
</table>
</div>
</div>
</body>
</html>