<?php
$servername="localhost";
$username="root";
$dbname="Ashwin";
$uname=$_POST["uname"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$age=$_POST["age"];
$gender=$_POST["gender"];
 $conn=mysqli_connect($servername,$username,$dbname)or
 die("Connection failed:".mysqli_connect_error());
 $sql=INSERT INTO login(Username, Firstname, Lastname,Password,Email,Age,Gender)VALUES('$uname','$fname','$lname','$pass','$email','$age','$gender');
 if(mysqli_query($conn,$sql))
 {
 	echo "<h1 align='center'> Registered Successfully</h1>";

 }else
 {
 	echo "<h1 align='center'>Error:</h1>".$sql."<br>".mysqli_error($conn);
 }
 mysqli_close($conn);
 ?>