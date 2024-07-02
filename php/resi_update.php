<?php 
  include('db_conn.php');

  $kor_id = trim($_POST['kor_id']);
  $kor_pw = trim($_POST['kor_pw']);
  $kor_name = trim($_POST['kor_name']);
  date_default_timezone_set('Asia/Seoul');
  $kor_datetime = date('Y-m-d H:i:s', time());

  $sql = "SELECT PASSWORD('$kor_pw') AS PASS";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $kor_pw_encode = $row['PASS'];

  // $kor_pw_encode = PASSWORD_HASH('$kor_pw_encode', PASSWORD_DEFAULT);

  // echo $kor_pw_encode;
  
  $sql = "INSERT INTO korair_member 
    SET kor_id = '$kor_id',
        kor_pw = '$kor_pw_encode',
        kor_name = '$kor_name',
        kor_datetime = '$kor_datetime'";

  $result = mysqli_query($conn, $sql);

  if($result){
    echo "<script>alert('회원가입 완료');</script>";
    echo "<script>location.replace('login.php');</script>";
  } else{
    echo '회원가입 실패 : ' . mysqli_error($conn);
    mysqli_close($conn);
  }

?>