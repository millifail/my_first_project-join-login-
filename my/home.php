<!--C:\Bitnami\wampstack-7.4.10-0\mysql\bin-->
<?php
$conn=mysqli_connect("localhost","root","tpgns5804");
mysqli_select_db($conn,"calisthenics");


 ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--viewport width-> 모바일 폭에 맞춰줌 , initial -scale 줌 하기 전의 화면 크기 초기값을 1로 맞춰줌 -->
   <!--위 2개의 meta태그는 기계적으로 넣어주면 됨 -->
   <title>calisthenics</title>
   <link rel="stylesheet" type="text/css" href="http://localhost/my/my_style.css?6">

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>



<header>
  <div class="container">
    <div class="row justify-content-md-center">

        <div class="col-sm-10">
          <br>
              <h2><a href="./home.php" title="대문페이지">calisthenics</a></h2>
        </div>


        <div class="col-sm-2">
          <div id="login">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">

            <a href="./join.php"  title="회원가입" class="btn btn-primary"  >join</a>
            <a href="./login.php"  title="로그인" class="btn btn-secondary" >log in</a>
            </div>
          </div>
        </div>


    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-10">
        <div id="page_introduce"  class="jumbotron">

          <img src="http://localhost/images/planche1.jpg"  alt="artem morozov" title="artem morozov"/>
          <iframe src="./main_desc.txt" width="220" height="104" frameborder="1"></iframe>
        </div>
      </div>
      <div class="col-2">
        <br>
      </div>
    </div>
  </div>

</header>



      <article>
        <div class="container">
          <div class="row">

        <div class="col-sm-12">


        <table  class="table" border=1>
          <thead class="thead-dark">
            <tr>
              <th scope="col">num</th>	<th scope="col" width="500">title</th>	<th scope="col">author</th> <th scope="col">created</th>
            </tr>
          </thead>
          <tbody>

            <?php
              $sql='SELECT * FROM topic';
              $result=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo '<td>'.$row['num'].'</td>   <td width="50"><a href="./home_description.php?id='.$row['num'].'">'.$row['title'].'</a></td>  <td>'.$row['author'].'</td> <td>'.$row['created'].'</td>';
                echo '</tr>';
              }
            ?>

          </tbody>
        </table>
        </div>
    </div>
  </div>
  </article>

  <footer>
    <a href="" class="btn btn-primary" title="글쓰기" onclick="alert('로그인 후 이용해주세용')">write text</a>
  </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
