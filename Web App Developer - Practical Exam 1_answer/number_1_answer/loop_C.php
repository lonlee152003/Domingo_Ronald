<?php
//1.Loop - C. 
function fibonacci_sequence( $count_end )
{
	//initialize variables
	$number1 = 0;
	$number2 = 1;
	$count = 0;
	
	echo "The fibonacci_sequence for ( 1~".$count_end." ).<br>";
	
	//for loop to count number 1 to 10
	for( $count; $count < $count_end; $count++ )
	{
		$result = $number2 + $number1;
		echo $result." ";
		$number1 = $number2;
		$number2 = $result;
	}
	echo "<br><br>";
}

echo fibonacci_sequence(10);
?>