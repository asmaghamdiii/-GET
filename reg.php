<?php

 $conn= mysqli_connect( '127.0.0.1' , 'root' , '' , 'test');

 if (!$conn) {

   echo 'no connection';

 }
 else { echo ' connected';}

 $name=$_GET['name'];
 $email=$_GET['email'];
 $pass=$_GET['pass'];

 #sql="INSERT INTO user (name,email,pass) values ('$name' , '$email' , '$pass')";

 if (!mysqli_query ($conn , $sql)) {

   echo 'fali';

 }
 else { echo 'inserted'; }
 ?>
