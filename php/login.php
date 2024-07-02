<?php 
  include('db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>대한항공 - 로그인</title>
  <!-- 파비콘 -->
  <link rel="icon" href="../images/app_icon.jpg" type="image/png">
  <!-- css 초기화 -->
  <link href="../css/reset.css" rel="stylesheet" type="text/css">
  <link href="../css/common.css" rel="stylesheet" type="text/css">
  <link href="../css/sub.css" rel="stylesheet" type="text/css">
</head>
<body>
  <main>
    <div class="login_back"></div>
    <section class="login">
      <h2>로그인</h2>
      <form name="login" method="post" action="login_check.php" onsubmit="return loginCheck()";>
        <div class="title_box">
          <p class="active">아이디</p>
          <p>스카이패스</p>
        </div>
        <p class="block">
          <label for="kor_id">아이디</label>
          <input type="text" id="kor_id" name="kor_id">
        </p>
        <p class="block">
          <label for="kor_pw">비밀번호</label>
          <input type="password" id="kor_pw" name="kor_pw">
        </p>
        <p>
          <input type="checkbox" id="kor_id_save" name="kor_id_save">
          <label for="kor_id_save">아이디 저장</label>
        </p>
        <p>
          <input type="submit" value="로그인" id="login_btn">
        </p>
        <p class="link_box">
          <a href="../index.html" title="메인페이지">메인페이지</a>
          <a href="join.php" title="회원가입">회원가입</a>
          <a href="id_find.php" title="아이디찾기">아이디찾기</a>
          <a href="pw_find.php" title="비밀번호찾기">비밀번호찾기</a>
        </p>
        <h3>다른 계정으로 로그인</h3>
        <p class="ez_login">
          <a href="#" title="카카오 로그인">카카오 로그인</a>
          <a href="#" title="네이버 로그인">네이버 로그인</a>
          <a href="#" title="구글 로그인">구글 로그인</a>
        </p>
      </form>
    </section>
  </main>

  <script>
    function loginCheck(){
      let kor_id = document.getElementById('kor_id');
      let kor_pw = document.getElementById('kor_pw');

      if(kor_id.value.length < 1){
        alert('아이디를 입력하세요');
        return false;
      }

      if(kor_pw.value.length < 1){
        alert('비밀번호를 입력하세요');
        return false;
      }
    }
  </script>
</body>
</html>