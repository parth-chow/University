<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//mysql connection (hostname, username, password, dbname);
		$mysqli = new mysqli('localhost', ‘parthac’, '511416', ‘parthac’);
		//check connection
		if (mysqli_connect_errno())
		{
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
		}
	?>
</body>
</html>