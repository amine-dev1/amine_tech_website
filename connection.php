<?php
$servername='localhost';
$username='useramine';
$password='amineelidrissi';
$database='aminetech';
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection->connect_error){
  die("connect erro ".mysqli_connect_error());
}
else{

}
?>