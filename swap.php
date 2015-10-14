<?php
$callClass = new Swap();

$a = 3;
$b = 5;
	
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$a = $_POST['a'];
	$b = $_POST['b'];
}

$reCall = $callClass->swapNumber($a, $b);
print_r(json_encode($reCall));

class Swap{	
	function swapNumber($a, $b)
	{
		$a = $a + $b;
		$b = $a - $b;
		$a = $a - $b;
		
		$retArr = array('a' => $a, 'b' => $b);
		
		return $retArr;
	}
}
?>