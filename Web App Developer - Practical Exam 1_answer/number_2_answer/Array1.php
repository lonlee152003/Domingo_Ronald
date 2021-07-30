<?php
 
function orderko(&$arrayko, $array_length, $current_position=0)
{
 
        if($current_position == $array_length) return;
     
        /* Initialize start_count var */ 
        $start_count = $current_position + 1;
 
        while($start_count < $array_length){
             
		//swapping area
           if($arrayko[$start_count] < $arrayko[$current_position]){
 
               $array_temp = $arrayko[$start_count];
               $arrayko[$start_count] = $arrayko[$current_position];
               $arrayko[$current_position] = $array_temp;
 
            }
             
            $start_count++;
           
        } 
        
       /* Recursively call orderko method, with increment current_position. */
        orderko($arrayko, $array_length, $current_position+1);
}

$arrayko = array ("marvin","marco","marvin","marco","marco","marvin","christian"); 
orderko($arrayko,count($arrayko)); 
echo " ".implode("<br>",$arrayko)." ";
?>