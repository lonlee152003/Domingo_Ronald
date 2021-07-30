<?php
function fibonacci_perfect($start_n,$n)
{
	//parameter is (smallest_value, largest_value)
	if( $start_n < $n )
	{
		
		for( $i = $start_n; $i <= $n; $i++ )
		{
			//multiply
			$n_1 = $i * $i;
			
			//multiply
			$n_2 = 5 * $n_1;
			
			//subtract
			$n3_3_nega = $n_2 - 4;
			
			//add
			$n3_3_posi = $n_2 + 4;
			
			//check for fibonacci
			if (sqrt($n3_3_nega) == floor(sqrt($n3_3_nega)) OR sqrt($n3_3_posi) == floor(sqrt($n3_3_posi)))
			{
				echo $i." is a Fibonacci Number<br>";
			}
			else
			{
				echo $i." is not Fibonacci Number<br>";
			}
		}
	}
	//parameter is (largest_value, smallest_value)
	else
	{
		for( $i = $start_n; $i >= $n; $i-- )
		{
			//multiply
			$n_1 = $i * $i;
			
			//multiply
			$n_2 = 5 * $n_1;
			
			//subtract
			$n3_3_nega = $n_2 - 4;
			
			//add
			$n3_3_posi = $n_2 + 4;
			
			//check for fibonacci
			if (sqrt($n3_3_nega) == floor(sqrt($n3_3_nega)) OR sqrt($n3_3_posi) == floor(sqrt($n3_3_posi)))
			{
				echo $i." is a Fibonacci Number<br>";
			}
			else
			{
				echo $i." is not Fibonacci Number<br>";
			}
		}
	}	
}

echo fibonacci_perfect(1, 10);
?>