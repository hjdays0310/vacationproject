<?php
$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$gender = $_POST['gender'];

$conn = mysqli_connect("localhost","root","koa991002","test");

if ($conn) {
$sel = "select * from user_info where id = '$id'";
$sql = mysqli_query($conn,$sel);
$num = mysqli_num_rows($sql);


if ($num >=1) {
 echo "존재하는 ID입니다.";
}else{
if ($sql) {
echo "회원가입 성공";
$in = "insert into user_info(id,pw,name,gender) values('$id','$pw','$name','$gender')";
$query = mysqli_query($conn,$in);
}else{
  echo "회원가입 실패";
}
}
}else {
  echo "NOT FOUND DB";
}
?>
