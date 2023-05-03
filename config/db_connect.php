<?php
  //connect to database
$conn = mysqli_connect('localhost', 'Zsolt', 'Qwerty12345.', 'website');

//check connection
if(!$conn){
  echo 'Connection error: ' . mysqli_connect_error();
}

?>