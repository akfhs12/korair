<?php 
  include('db_conn.php');

  $kor_id = trim($_POST['kor_id']);
  $kor_pw = trim($_POST['kor_pw']);

  $sql = "SELECT PASSWORD('$kor_pw') AS PASS";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $kor_pw_input = $row['PASS'];

  $sql = "SELECT * FROM korair_member WHERE kor_id = '$kor_id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  echo $kor_pw_input . "<br>";
  echo $row['kor_pw'];

 
  if($kor_pw_input == $row['kor_pw']){
    $_SESSION['kor_id'] = $kor_id;

    echo "<script>alert('" . $row['kor_name'] . "님 환영합니다!');</script>";
    echo "<script>location.href='../index.php';</script>";

  } else{
    echo "<script>alert('가입된 아이디가 아니거나 비밀번호가 틀립니다.');</script>";
  }
  


?>