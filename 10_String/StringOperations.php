
<?php
   $string1="Hello World";
   $string2="1234";
   
   //String Concatenation Operator
   echo $string1 . " " . $string2;//Hello World 1234
   echo("<br>");
   
   //Using the strlen() function
   echo strlen("Hello world!");//12
   echo("<br>");
   
   //Using the strpos() function
   echo strpos("Hello world!","world");//6
   echo("<br>");

	// count no of words
	echo str_word_count("Hello world!"); // outputs 2

	// reverse string
	echo strrev("Hello world!"); // outputs !dlrow olleH

	// replace word
	echo str_replace("world", "Marvellous", "Hello world!"); // outputs Hello Marvellous!
?>
?>





