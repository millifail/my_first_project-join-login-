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

	<?php
  $sql='SELECT * FROM topic WHERE num='.$_GET['id'];
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





   <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://ceos-doyag-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>





<a href="" title="글쓰기" onclick="alert('로그인 후 이용해주세용')">write text</a>
<a href="./home.php" title="대문페이지">나가기</a>

</article>

</body>
</html>
