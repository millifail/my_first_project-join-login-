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

<br>
<article>

  <form action="./login.php" method="post">
    <label for="login_id">id:</label>
    <input type="text" name="user_id" id="login_id" autofocus required/>
    <br/>
    <label for="login_pw">pw:</label>
    <input type="password" name="user_pw" id="login_pw"/>
    <br/>
    <input type="submit"/>
  <form/>

  <?php



  if(empty($_POST['user_id'])===false){

      $sql="SELECT num,id,pw FROM user";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
					if($row['id']==$_POST['user_id']&& $row['pw']==$_POST['user_pw']){
						$user_num=$row['num'];
						header('Location: ./log_sucess.php?id='.$user_num);
						}


			}

        echo '<script>alert("failed");</script>';




  }
   ?>
</article>



</body>
</html>
