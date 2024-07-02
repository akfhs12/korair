<?php 
  include('db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="스카이패스, 사전좌석 배정, 항공권 예매, 수하물 안내">
  <meta name="Description" content="항공 스케줄, 스카이패스, 할인 항공권, 여행상품안내">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예매">
  <meta http-equiv="Title" content="대한항공">
  <title>대한항공 - 회원가입</title>
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
    <section class="join">
      <h2>회원가입</h2>
      <form name="join" method="post" action="resi_update.php" onsubmit="return joinCheck();">
        <!-- kor_no, kor_id, kor_pw, kor_name, kor_date -->
        <p class="block">
          <label for="kor_id">아이디</label>
          <input type="text" id="kor_id" name="kor_id" placeholder="아이디를 입력하세요">
          <div id="id_check" class="id_check">아이디 중복 확인</div>
        </p>
        <p class="block">
          <label for="kor_pw">비밀번호</label>
          <input type="password" id="kor_pw" name="kor_pw" placeholder="비밀번호를 입력하세요">
        </p>
        <p class="block">
          <label for="kor_name">이름</label>
          <input type="text" id="kor_name" name="kor_name" placeholder="이름을 입력하세요">
        </p>

        <div class="btn_box">
          <a href="../index.php" title="메인페이지로" id="join_cancle">처음으로</a>
          <input type="submit" value="가입하기" id="join_submit">
        </div>
      </form>
    </section>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    function joinCheck(){
      let kor_id = document.getElementById('kor_id').value;
      let kor_pw = document.getElementById('kor_pw');
      let kor_name = document.getElementById('kor_name');

      if(kor_id.length < 1){
        alert('아이디를 입력하세요');
        return false;
      }

      if(kor_pw.value.length < 1){
        alert('비밀번호를 입력하세요');
        return false;
      }

      if(kor_name.value.length < 1){
        alert('이름을 입력하세요');
        return false;
      }
    }
    

    $(document).ready(function(){
      $('#kor_id').on('keyup', function(){
        let self = $(this);
        let kor_id;

        // id가 일치하면 (아이디 임력폼의 id값이 일치하면)
        if(self.attr("id") === "kor_id"){
          kor_id = self.val();
        }
        $.post(
          "id_check.php",
          {kor_id:kor_id},
          function(data){
            if(data){
              self.parent().parent().find('div').html(data);
              self.parent().parent().find('div').addClass('id_check');
            }
          }
        );
      })
    })
  </script>
</body>
</html>