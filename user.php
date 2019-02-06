<?php
$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$gender = $_POST['gender'];

$conn = mysqli_connect("localhost","root","koa991002","test");



if($_POST[$name]==""){
$message = "이름을 입력하세요";
echo "<script type='text/javascript'>alert('$message');</script>";
 echo("<script>location.href='user.html';</script>");
};
if($_POST[$id]==""){
$message1 = "아이디를 입력하세요";
echo "<script type='text/javascript'>alert('$message1');</script>";
 echo("<script>location.href='user.html';</script>");
};
if($_POST[$pw]==""){
$message = "비빌먼호를 입력하세요";
echo "<script type='text/javascript'>alert('$message');</script>";
 echo("<script>location.href='user.html';</script>");
};
if($_POST[$gender]==""){
$message = "성별을 입력하세요";
echo "<script type='text/javascript'>alert('$message');</script>";
 echo("<script>location.href='user.html';</script>");
};

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
