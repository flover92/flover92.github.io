<!DOCTYPE html>
<html>
 <head>
	 <meta chartset="utf-8"/>
	 <title>Автор</title>
	 <link href="author.css" rel="stylesheet" type="text/css">
	 <link rel="shortcut icon" href="img/softgroup.ico"/>
 </head>
<body>
	<?php
	function plus() 
{
?>
	<form name="plus" action="" method="GET">
	<input name="A" type="text">
	<input name="B" type="text">
	<input type="submit" value=" click ">
	</form>
<?
 
	for($i=$_GET['A'];$i<$_GET['B'];$i++)
	{
    if ($i<2)
    continue;
    else
    {
    $check=true;
    for($j=2;$j<$i;$j++)
        {
        if ($i%$j===0) 
        $check=false;
        }
        if ($check===true)
        echo $i." ";
        }
    }   
}

?>
<?php
echo plus();
?>

</body>
</html>
