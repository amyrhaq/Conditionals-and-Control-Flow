<!-- Great work! Now let's put together an if/elseif/else statement from start to finish. -->
<html>
<head>
	<title>All Together Now!</title>
</head>
<body>
<p>
<?php 
	$guess = 7;
	$number = 7;
	if ($guess < $number)
	{
		echo "Too low!";
	}
	elseif ($guess > $number) 
	{
		echo "Too high!";
	}
	else
	{
		echo "You win!";
	}
?>
</p>	
</body>
</html>