<?php
	$conn=mysqli_connect("localhost","root","tpgns5804");
	mysqli_select_db($conn,"calisthenics");
 ?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
   <title>calisthenics</title>
	 <link rel="stylesheet" type="text/css" href="http://localhost/my/my_style.css?2">
</head>
<body>

	<header>
	  <div id="page_head">
	    <h2><a href="./home.php" title="대문페이지">calisthenics</a></h2>

	    <div id=login>
	      <a href="./join.php"  title="회원가입" >join</a>
	      <a href="./login.php"  title="로그인">log in</a>
	    </div>
	  </div>

	  <div id=page_introduce>

	    <img src="http://localhost/images/planche1.jpg"  alt="artem morozov" title="artem morozov"/>
	    <h4>외부중량을 이용하지 않고 자신의 체중과 지레비등을 이용하여 하는 운동들 칼리스데닉스(Calisthenics), 길거리 운동(street workout),
	    기계체조(gymnastics), 핸드밸런싱(hand balancing), 철봉 퍼포먼스&프리스타일 등 모든 것을 포함하는 개념이다.</h4>
	  </div>
	</header>

<article>

<form  action="./process1.php" method="post">
	<h4>회원가입</h4>

	아이디입력:
	<input type="text" name="user_id" required/>
	<br/>
	비밀번호 입력:
	<input type="text" name="user_pw" required/>
	<br/>
	닉네임 입력:
	<input type="text" name="user_nickname" required/>
	<br/>


	<input type="submit"/>
	<br/>


</form>


</article>




</body>
</html>
