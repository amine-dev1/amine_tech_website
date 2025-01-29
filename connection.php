<?php
$servername='localhost';
$username='useramine';
$password='elidrissi2002';
$database='aminetech';
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection->connect_error){
  die("connect erro ".mysqli_connect_error());
}
else{
  
}
