<!DOCTYPE html>
<html>
 <head>
	 <meta chartset="utf-8"/>
	 <title>Завдання1</title>
 </head>
<body>
<?php 
	if(!isset($_GET['num'])) exit();
	
	function isPerfect($num) {

		$sum = 0;
		$i = $num/2;

		while($i >= 1) {
			if($num % $i == 0) {
				$sum += $i;
			}

			$i--;
		}

		return $sum==$num;

	}

	$perfectNums = array();
	for($i = 6; $i<=$_GET['num']; $i++) {
		if(isPerfect($i)) {
			$perfectNums[] = $i;
		}
	}

	if(count($perfectNums) > 0)
		echo "<p>Perfect numbers from 6 to {$_GET['num']}: ".implode(', ', $perfectNums)."</p>";
?>
</body>
</html>