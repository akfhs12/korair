<?php
  $mysql_host = 'localhost';
  $mysql_user = 'root';
  $mysql_password = '';
  $mysql_db = 'test';

  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

  if(!$conn){
    die('연결실패' . mysqli_cennect_error());
  }

  session_start();

?>