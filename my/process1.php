<?php
$conn=mysqli_connect("localhost","root","tpgns5804");
mysqli_select_db($conn,"calisthenics");

//회원가입 성공 실패를 만들어야함.




		$sql="SELECT id,nickname FROM user WHERE id='".$_POST['user_id']."'OR nickname='".$_POST['user_nickname']."'";
		$result=mysqli_query($conn,$sql);
		if($result->num_rows !==0){
			//echo '<script>alert("중복");</script>';
    //  header('Location:./join.php');

      exit('<script>alert("중복되는 아이디입니다.");
          location.replace("./join.php");
          </script>');
		}
		else{
      $sql_1="INSERT INTO user (id,pw,nickname) VALUES('".$_POST['user_id']."','".$_POST['user_pw']."','".$_POST['user_nickname']."')";
      $result=mysqli_query($conn,$sql_1);
      exit('<script>alert("회원가입 성공 ㅅㅂ");
          location.replace("./home.php");
          </script>');
      //header('Location: ./home.php');
		}
?>
