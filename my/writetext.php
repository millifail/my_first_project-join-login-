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

	<?php
	echo '<h2><a href="./log_sucess.php?id='.$_GET['id'].'"title="대문페이지">calisthenics</a></h2>';
	echo '<br>'
	?>

	<div id=login>
		<?php

		$sql='SELECT * FROM user WHERE num='.$_GET['id'];
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$user_num=$row['num'];
		$user_nickname=$row['nickname'];
		echo $user_nickname;
		echo ' &nbsp; ';
		?>

	  <a href="./home.php"  title="로그아웃">log out</a>
	</div>
	</div>

	<div id=page_introduce>

		<img src="http://localhost/images/planche1.jpg"  alt="artem morozov" title="artem morozov"/>
		<h4>외부중량을 이용하지 않고 자신의 체중과 지레비등을 이용하여 하는 운동들 칼리스데닉스(Calisthenics), 길거리 운동(street workout),
		기계체조(gymnastics), 핸드밸런싱(hand balancing), 철봉 퍼포먼스&프리스타일 등 모든 것을 포함하는 개념이다.</h4>
	</div>
	</header>

<article>

<?php
  echo '<form action="process2.php?id='.$_GET['id'].'" method="post">';
?>
    <label for="label_title">제목:</label>
    <input type="text" name="title" placeholder="제목..." id="label_title" required/>
    <br/>
    <?php
    echo '작성자: <input type="text" name="author" value="'.$user_nickname.'" readonly>'
    ?>
    <br/>
    <label for="label_description">본문:</label>
    <br/>
    <textarea name="description" placeholder="본문..." cols="40" rows="20"  id="label_description" required></textarea>
    <br/>

    <input type="submit" value="작성"/>
  </form>

</article>




</body>
</html>
