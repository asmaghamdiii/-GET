<?php

 $conn"mysqli_connect( '127.0.0.1 , root , ' ' test');

 if (!conn) {

   echo 'no connection';

 }
 else { echo ' connected';}

 $name=$_POST['name'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];

 sql="INSERT INTO user (name,email,pass) values ('$name' , '$Email' , '$pass')";

 if (!mysqli_query ($conn , $sql)) {

   echo 'fali';

 }
 else { echo 'inserted'; }
 ?>
