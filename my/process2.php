<?php
$conn=mysqli_connect("localhost","root","tpgns5804");
mysqli_select_db($conn,"calisthenics");
$sql="INSERT INTO topic(title,author,description,created) VALUES ('".$_POST['title']."','".$_POST['author']."','".$_POST['description']."',now())";


$result=mysqli_query($conn,$sql);
header("Location:./log_sucess.php?id=".$_GET['id']);

 ?>
