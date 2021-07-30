<?php
function file_maker_php()
{
	//create/open a hello_there.php
	$file_maker_php_open = fopen( "hello_there.php","w" );
	
	//assign a value
	$file_maker_php_text = "<?php\n\n"
						  ."//This is a comment\n\n"
						  ."echo \"This is a test page!\";\n"
						  ."echo \"Exam number two!\";\n\n".
						  "//This is the end of a comment";
						  
	//write text in hello_there.php
	$file_maker_php_write = fwrite( $file_maker_php_open, $file_maker_php_text );
}

echo "<h3>File maker</h3>";

//function call
file_maker_php();
?>