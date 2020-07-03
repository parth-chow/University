<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include ('db_conn.php');
		// query for selecting / retrieving every row from the table customer
		$query = "SELECT * FROM customer";
		// $mysqli is to help you to connect to mysql
		// query() <-function to execute the query in the database
		$result = $mysqli->query($query);
		// $result is the result of the executed query
		// $result-> fetch_array() helps you to convert the result to array
		// MYSQLI_ASSOC is for specifying what type of array that should be produced
		while ($row = $result->fetch_array(MYSQLI_ASSOC))
		{
		// $row is the array, which key(index) is a column name of the table since
		// MYSQLI_ASSOC. To print out the value of the array, we should echo
		$array['key name']
		echo $row['CustID'];
		echo $row['lastname'];
		echo $row['firstname'];
		echo $row['email'];
		echo "<br>";
		}
		$mysql_free_result($result);
		// close connection		
	?>

</body>
</html>