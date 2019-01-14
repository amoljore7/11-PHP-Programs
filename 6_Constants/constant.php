<?php
//User Defined constants

			define("MyConst","Marvellous",TRUE);
			echo($MyConst);

//Built In constants:
class Demo
{
	public function fun()
	{
		echo("We are in file: ".__FILE__."<br>");
		echo("We are on line: ".__LINE__."<br>");
		echo("We are in Function: ".__FUNCTION__."<br>");
		echo("We are in Class: ".__CLASS__."<br>");
	}
}

Demo $obj = new Demo();
$obj->fun();















echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
