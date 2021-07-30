<?php
//1.Loop - A. 

function sum( $start_count, $end_count )
{
	//check function parameter format sum(start_to_lowest_number,end_to_highest_number) 
	if ( $start_count < $end_count )
	{
		//initialize variables
		$count = $start_count;
		$result = 0;
		
		//while condition to loop according to the function parameter
		while ( $count <= $end_count )
		{
			$result = $result + $count;
			$count++;
		}
		return $result;
	}
	else
	{
		echo "The format should be (start_count, end_count).";
	}
}
/*

sample data using 0-10 


input							|output
$count = 0		$result = 0		|$result = 0
$count = 1		$result = 0		|$result = 1
$count = 2		$result = 1		|$result = 3
$count = 3		$result = 3		|$result = 6
$count = 4		$result = 6		|$result = 10
$count = 5		$result = 10	|$result = 15
$count = 6		$result = 15	|$result = 21
$count = 7		$result = 21	|$result = 28
$count = 8		$result = 28	|$result = 36
$count = 9		$result = 36	|$result = 45
$count = 10		$result = 45	|$result = 55

final answer = 55
*/

echo "The sum of 0-10 is ".sum(0,10);
?>