<!DOCTYPE html>
<head>
<title>Fibonacci Series</title>
</head>
<body>

<?php
 	$count = 0;
	
	$f1 = 0;
	$f2 = 1;
	echo $f1 ." , ";
	echo $f2 ." , ";
	for ($count; $count< 20; $count++){
		$f3 = $f1 + $f2;
		echo $f3 ." , ";
		$f1=$f2;
		$f2=$f3;
	} 
	echo "<hr>";
	$a = 0;
	$b =1;
	$term = 20;
	$i = 0;
	
	echo $a ." | ". $b . " | ";
	for ($i; $i<$term-2; $i++){
		$c = $b +$a;
		echo $c. " | ";
		$a = $b;
		$b = $c;
	}

?>
</body>
</html>