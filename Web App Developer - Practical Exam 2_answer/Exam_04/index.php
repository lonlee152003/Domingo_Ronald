
<?php
//yyy-mm-dd
function subtract_dates($start,$end)
{
	//explode $start into array
	$date_1 = explode("-",$start);
	
	//explode $end into array
	$date_2 = explode("-",$end);
	
	//if highest - lowest number
    if( $date_1[2] > $date_2[2] )
	{
		$date_dd = $date_1[2] - $date_2[2];
	}
	//if need to borrow 1 month
	else
	{
		$date_1[1] = $date_1[1] - 1;
		$date_1[2] = $date_1[2] + 30;
		$date_dd = $date_1[2]-$date_2[2];
	}

	//if highest - lowest number
    if( $date_1[1] > $date_2[1] )
	{
		$date_mm = $date_1[1] - $date_2[1];
	}
	//if need to borrow 1 month
	else
	{
		$date_1[0] = $date_1[0] - 1;
		$date_1[1] = $date_1[1] + 12;
		$date_mm = $date_1[1]-$date_2[1];
	}
	
	$date_yy = 0;
	//highest - lowest number
    if( $date_1[0] > $date_2[0] )
	{
		$date_yy = $date_1[0] - $date_2[0];
	}
	
	return $date_yy." year, ".$date_mm." month, ".$date_dd." days";
}

echo subtract_dates("2019-05-05","2018-04-31");
?>