<?php
include "connectsql.php";
$Name=$_POST["name"];
$Email=$_POST["email"];
$Password=$_POST["password"];
try{
$conn=connSql("localhost","root","","user");
$sql="insert into usertable values('$Name','$Email','$Password')";
$conn->query($sql);
echo("User added successfully!");	
echo("Now go back to login page and login using your credetials");
}
catch(exception $e){
	echo($e);
}
closeSql($conn);
?>
