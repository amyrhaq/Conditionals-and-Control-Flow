<!-- Under your if statement, write an else statement to capture the people who are only buying 5 items or fewer. 
In their case, print or echo "You get a 5% discount!" -->
<html>
<head>
	<title>Adding an Else</title>
</head>
<body>
<p>
<?php 
	$items = 4;
		if ($items > 5)
		{
			echo "You get a 10% discount!";
		}
		else
		{
			echo "You get a 5% discount";
		}

?>
</p>
</body>
</html>
