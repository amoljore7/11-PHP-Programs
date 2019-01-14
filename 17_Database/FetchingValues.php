<?php
$servername = "localhost";
$username = "root";
$password = "usbw";

//Creating Connection:

$conn = @mysql_connect($servername,$username,$password);

if(!$conn){
echo("Conn:Failed");
}else{
echo("Conn:Done");
}

//Selecting Database:

$db = "employee";
echo("<br>");
if(!mysql_select_db($db)){
echo("SelectDb: Failed");
}else{
echo("SelectDb: Done");
}

//Fetching Values from db:

$query = "select * from tbl_employee;";

$result = mysql_query($query,$conn);
echo("<br>");
while($resultArr = mysql_fetch_array($result)){
print_r($resultArr);
echo "<br>";
echo "ID: ".$resultArr[0]." Name: ".str_replace("\\n", "<br />", $resultArr['emp_name'])."<br />";
}

?>