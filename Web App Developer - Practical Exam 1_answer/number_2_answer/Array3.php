<?php
function repitid( $str_array, $str_array_length) 
{	
	//get the array length
	$count = ( count( $str_array_length )-1 );
	
	//sorting area
	//loop to n x n
	for( $i = 0; $i < $count; $i++ )
	{
		//loop to n
		for( $j = 0; $j < $count; $j++ )
		{
			//swapping area
			if( $str_array[$j] > $str_array[$j + 1] )
			{
				$temp = $str_array[$j];
				$str_array[$j] = $str_array[$j+1];
				$str_array[$j+1] = $temp;	
			}
		}
	}
	
	//loop to n
	for( $x = 0; $x < $count+1; $x++ )
	{
		//check duplicate array elements
		if( $str_array[$x] == $str_array[$x+1] )
		{
			//remove duplicate values
			unset($str_array[$x]);
			$count = ( count( $str_array )-1 );
		}
	}
	return implode(" ", $str_array);
}

$arrayko = array( "watashi","marco", "dan", "d", "dan","d","dan");
echo repitid( $arrayko, $arrayko );
?>