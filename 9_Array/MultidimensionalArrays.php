<?php
         $marks = array( 
            "mohammad" => array
            (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "qadir" => array
            (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "zara" => array
            (
               1,array('a','b'),3,4,5,6,7,8,9,10
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for mohammad in physics : " ;
         echo $marks['mohammad']['physics'] . "<br />"; 
         
         echo "Marks for qadir in maths : ";
         echo $marks['qadir']['maths'] . "<br />"; 
         
         echo "Marks for zara in chemistry : " ;
         echo $marks['zara'][2] . "<br />"; 
         
         foreach($marks['zara'][1] as $val)
         {
		 	print_r( $val);	
		 }
         
?>