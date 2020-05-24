<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Ashwin";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
$sql="CREATE TABLE"login(Username VARCHAR(30) PRIMARY KEY, firstname VARCHAR(30) NOT NULL, Lastname VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL,Email VARCHAR(30) NOT NULL ,Age VARCHAR(10) NOT NULL ,Gender ENUM(3));
if(mysqli_query($conn,$sql))
{
	echo "Table login details created successfully";
}
else
	{ 
		echo "Error creating table:".mysqli_error($conn);
}
mysqli_close($conn);
?>

