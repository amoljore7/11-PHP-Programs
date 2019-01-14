<?php
		 //Creating PHP Function
         /* Defining a PHP Function */
         function writeMessage()
         {
            echo "You are really a nice person, Have a nice time!";
            echo("<br>");
         }
         
         /* Calling a PHP Function */
         writeMessage();
         
         
         //PHP Functions with Parameters
          function addFunction($num1, $num2)
         {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
            echo("<br>");
         }
         
         addFunction(10, 20);
         
         
         //Passing Arguments by Reference
          function addFive($num)
         {
            $num += 5;
         }
         
         function addSix(&$num)
         {
            $num += 6;
         }
         $orignum = 10;
         addFive( $orignum );
         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
         
         //PHP Functions returning value
         function addFunction1($num1, $num2)
         {
            $sum = $num1 + $num2;
            return $sum;
         }
         $return_value = addFunction1(10, 20);
         
         echo "Returned value from the function : $return_value";
         echo("<br>");
         
         
         //Setting Default Values for Function Parameters
         function printMe($param = "Default Value")
         {
            print $param;
         }
         printMe("This is test input Value");
         echo("<br>");
         printMe();
         echo("<br>");
         
         //Dynamic Function Calls
          function sayHello()
         {
            echo "Hello<br />";
         }
         $function_holder = "sayHello";
         $function_holder();
         
         //Anonymous Functions
         $AnonymousAdd = create_function('$a,$b','return ($a+$b);');
         echo $AnonymousAdd(10,20);
         echo("<br>");
?>