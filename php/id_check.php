<?php 
  include('db_conn.php');

  $kor_id = trim($_POST['kor_id']);

  if($kor_id != NULL){
    $sql = "SELECT * FROM korair_member WHERE kor_id ='$kor_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($row['kor_id'])){
      echo "중복되는 아이디입니다.";
    } else{
      echo "사용가능한 아이디입니다.";
    }
  }

?>