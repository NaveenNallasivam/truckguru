<?php
include "connectsql.php";
$userName=$_POST["mail"];
$Password=$_POST["pass"];
$conn=connSql("localhost","root","","user");	
$sql1="select email from usertable";
$sql2="select password from usertable where email='$userName'";
$seluser=$conn->query($sql1);
$selpas=$conn->query($sql2);
$checkuser;
$checkpass;
$flag1=0;
$flag2=0;
while ($row = $seluser->fetch_assoc() and $flag1==0) {
    $checkuser=$row["email"];
	if(!strcmp($userName,$checkuser)){
		$flag1=1;
		while ($row2 = $selpas->fetch_assoc()) {
    $checkpass=$row2["password"];
	if(!strcmp($Password,$checkpass)){
	echo ("welcome");
	$flag2=1;
	break;
	}
	}
	
	}
}
if($flag1==0 and $flag2==0 ){
	echo("No user found!");
}
if($flag1!=0 and $flag2==0){
	echo("Check your password");
}
?>