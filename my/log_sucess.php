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



	<table border=1>
		<thead>
			<tr>
				<th>num</th>	<th width="500">title</th>	<th>author</th> <th>created</th>
			</tr>
		</thead>
		<tbody>

			<?php
				$sql='SELECT * FROM topic';
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result)){
					echo '<tr>';
					echo '<td>'.$row['num'].'</td>   <td width="50"><a href="./log_sucess_description.php?topic_num='.$row['num'].'&user='.$user_num.'">'.$row['title'].'</a></td>  <td>'.$row['author'].'</td> <td>'.$row['created'].'</td>';
							//$row['num'] -> topic table 의 넘버    ,
					echo '</tr>';
				}
			?>

		</tbody>
	</table>

<?php
	echo '<a href="./writetext.php?id='.$_GET['id']. '" title="글쓰기">write text</a>';
?>
</article>



</body>
</html>
