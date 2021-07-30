<?php
function sort_roundup_odd_to_nearest_tens( $str_array, $str_array_length) 
{
	//count arrayko index-1
	$count = ( count( $str_array_length )-1 );
	for( $h = 0; $h < $count + 1; $h++ )
	{
		//condition to test odd/even numbers
		if( $str_array[$h]%2 != 0 )
		{
			//get remainder value
			$mod = $str_array[$h] % 10;
			
			//round off to nearest tens.
			$str_array[$h] = $str_array[$h]+($mod<(10/2)?-$mod:10-$mod);
		}
	}
	
	//loop to n x n
	for( $i = 0; $i < $count; $i++ )
	{
		//loop to n
		for( $j = 0; $j < $count; $j++ )
		{
			//sort to ascending order
			if( $str_array[$j] > $str_array[$j + 1] )
			{
				//swap area
				$temp = $str_array[$j];
				$str_array[$j] = $str_array[$j+1];
				$str_array[$j+1] = $temp;	
			}
		}
	}
	return implode(" ", $str_array);
}

$arrayko = array( 9863, 7127, 2020, 80, 131, 55, 100);
echo sort_roundup_odd_to_nearest_tens( $arrayko, $arrayko );
?>