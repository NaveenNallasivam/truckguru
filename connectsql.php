
<?php

// Create connection
function connSql($servername,$username,$password,$db){
$conn = mysqli_connect($servername, $username, $password,$db);
return $conn;
}
function closeSql($conn){
$conn->close();
}
?>