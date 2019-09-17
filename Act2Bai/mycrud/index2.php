<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM tbl_class ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kanit:900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="add2.html">
</head>
<style>
	body{
		font-family: 'Kanit', sans-serif;
		text-align: center;
				
	}



</style>
<body>
<a href="add2.php">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Class Code</td>
		<td>Subject Code</td>
		<td>Time</td>
		<td>Teacher</td>
		<td>Update</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['classcode']."</td>";
		echo "<td>".$row['subjectcode']."</td>";
		echo "<td>".$row['time']."</td>";	
		echo "<td>".$row['teacher']."</td>";	
		echo "<td><a href=\"edit2.php?id=$row[id]\">Edit</a> | <a href=\"delete2.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
