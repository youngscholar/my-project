<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo "HEELO WORLD";
		$age = 25;
		//	this is a single line comment
		$name = 'TOYkam';
		// echo '$txt';
		echo "My name is ".$name." and i am ".$GLOBALS['age']."years old";

		function mytext()
		{
			# code...
			static $x = 0;
			echo "$x";
			$x++;
		}

		mytext();
		mytext();

		mytext();
		mytext();
	?>
</body>
</html>