<!DOCTYPE html>
<html>
 <head>
	 <meta chartset="utf-8"/>
	 <title>Завдання 1</title>
	 <link href="" rel="stylesheet" type="text/css">
	 <link rel="shortcut icon" href="img/softgroup.ico"/>
 </head>
<body>
<div class="if"><strong>Завдання 1</strong><br/>
У форму вводиться число N. Знайти всі досконалі числа до N.
Досконале число - це таке число, що дорівнює сумі всіх своїх дільників,
крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе
самого ділиться на числа 1, 2 і 3, які в сумі дають 6.</div><br/>
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