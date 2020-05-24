<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Ashwin";
$conn=mysqli_connect($servername,$username,$password,$dbname)or
 die("Connection failed:".mysqli_connect_error());
 $uname=$_POST["uname"];
 $pwd=$_POST["pass"];
 $sql="SELECT * FROM login WHERE Username='$uname' and password='$pwd'";
 $result=mysqli_query($conn,$sql);
 $count=mysqli_num_rows($result);
 echo"</br>";
 if($count==1)
 {
 	echo"<h1 align='center'>Login Successful</h1>";
 } 
 else
 {
 	echo "<h1 align='center'>Invalid Username and password</h1>";
 }
 ?>

