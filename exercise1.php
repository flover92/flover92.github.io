<form method="GET" action="">
	<input type="number" name="num" value="6" min="6" requred>
	<input type="submit" value="send">
</form>
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

	$perfectNums = [];
	for($i = 6; $i<=$_GET['num']; $i++) {
		if(isPerfect($i)) {
			$perfectNums[] = $i;
		}
	}

	if(count($perfectNums) > 0)
		echo "<p>Perfect numbers from 6 to {$_GET['num']}: ".implode(', ', $perfectNums)."</p>";
?>