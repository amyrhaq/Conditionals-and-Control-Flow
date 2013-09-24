<!-- Go ahead and add an elseif condition to your if/else. 
It should check whether $items == 1, and it should echo or print "Sorry, no discount!" -->
<html>
<head>
	<title>Else + If = Elseif</title>
</head>
<body>
<p>
	<?php 
	$items = 1;
	if ($items > 5)
	{
		echo "You get a 10% discount!";
	}
	elseif ($items == 1) 
	{
		echo "Sorry, no discount!";
	}
	else 
	{
		echo "You get a 5% discount";
	}
	?>
</p>
</body>
</html>