<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php


		/**
		 * 
		 */
		class Vehicle
		{
			public $vname = 'Toyota';
			function sayvname(){
				echo "the name of this Vehicle is ".$this->vname;
			}
		}

		$age = 25;
		//	this is a single line comment
		$name = 'TOYkam';
		// echo '$txt';

		$array = array('array1', 'array2');
		$car = new Vehicle;
		$bus = new Vehicle;
		$bus->vname = 'Mazda';
		$bus->sayvname();
	?>
</body>
</html>