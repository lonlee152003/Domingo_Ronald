<?php
function palindrome_custom($palindrome_str)
{
		//get string length
		$j = strlen($palindrome_str)-1;
		
		//initialize
		$marker = 0;
		 
		for($i = 0; $i <= strlen($palindrome_str)-1; $i++ )
		{
			if( htmlentities( strtolower( $palindrome_str[ $i ] ) ) != htmlentities( strtolower( $palindrome_str[ $j ] ) ) )
			{
				//assign value to marker
				$marker = 1;
				break;
			}
			$j--;
		}
		
		//check marker value
		if( $marker != 1 )
		{
			return " = Palindrome<br>";
		}
		else
		{
			return " = Not palindrome<br>";
		}
}

echo "<h3>PALINDROME</h3>";
echo "Lop". palindrome_custom("Lop");
echo "pop".palindrome_custom("pop");
echo "loL".palindrome_custom("loL");
?>