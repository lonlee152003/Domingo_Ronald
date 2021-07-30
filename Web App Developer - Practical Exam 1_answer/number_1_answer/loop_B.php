<?php
//1.Loop - B. 

//create a function
function all_odds( $start_count, $end_count )
{
	//check function parameter format (start_to_lowest_number,end_to_highest_number) 
	if ( $start_count < $end_count )
	{

		echo "This are the odd nubers: <br>";
		
		//do while condition to loop according to the function parameter
		do
		{
			
			//condition to test start_count variable if it has a remainder
			if( $start_count%2 == 1 )
			{
			echo $start_count." ";
			}
			
			$start_count++;
		}
		while( $start_count <= $end_count );
	}
	else
	{
		echo "The format should be (start_count, end_count).";
	}
}

//function call all_odds()
echo all_odds(0,1000);
?>