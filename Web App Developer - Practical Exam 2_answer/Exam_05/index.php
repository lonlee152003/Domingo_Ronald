<?php
function revers($str_ko)
{
	//get string length
	$revers_str_len = strlen($str_ko) - 1;
	
	$j = $revers_str_len;
	
	for( $i = 0; $i <= $j; $i++ )
	{	
		//swapping area
		$temp = $str_ko[$j];
		$str_ko[$j] = $str_ko[$i];
		$str_ko[$i] = $temp;
		$j--;
	}
	return $str_ko;
}
echo "<h3>INPUT: Car</h3><br>OUTPUT: ";
echo revers("Car");
?>