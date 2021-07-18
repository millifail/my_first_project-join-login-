<!--C:\Bitnami\wampstack-7.4.10-0\mysql\bin-->
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
  echo '<h2><a href="./log_sucess.php?id='.$_GET['user'].'"title="대문페이지">calisthenics</a></h2>';
  ?>
  <!--<h2><a href="./home.php" title="대문페이지">calisthenics</a></h2>-->

  <div id=login>
  	<?php
      $sql= 'SELECT nickname FROM user WHERE num='.$_GET['user'];
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      echo $row['nickname'];
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
    $sql='SELECT * FROM topic WHERE num='.$_GET['topic_num'];
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

     ?>

     <table border=1>
       <thead>
         <tr>
           <?php
           echo '<th width=300>title: '.$row['title'].'</th> <th width=300>author:' .$row['author'].'</th> <th width=300>created:' .$row['created'].'</th> ';
           ?>
         </tr>
       </thead>
       <tbody>
         <?php
         echo '<td colspan="3" height="300">'.$row['description'].'</td>';
         ?>
       </tbody>
     </table>



     <a href="./writetext.php" title="글쓰기">write text</a>
     <a href="./home.php" title="대문페이지">나가기</a>

  </article>

</body>
</html>
