<!-- Thái Sale đây :v
XÓA DÒNG NÀY LÀM CON CHÓ :))
GHI NGUỒN HỘ BỐ M :))
Fb.com/SayHiThaiNe
-->
<?php
session_start();
require("config.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){
if(empty($_POST['username']) || empty($_POST['password'])){
exit();
}
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
if(strlen($password) < 6 || strlen($password) > 32 || strlen($username) < 6 || strlen($username) > 32)
{
	die('<script type="text/javascript">toarst("warning","Bạn Nhập Qúa Ngắn...","Thông Báo");</script>');
}
$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `account` WHERE `username` ='".mysqli_real_escape_string($ketnoi,$username)."'"));
if($dem == 1){
	$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `account` WHERE `username` ='".mysqli_real_escape_string($ketnoi,$username)."' AND `password` = '".mysqli_real_escape_string($ketnoi,$password)."'"));
	if($dem == 1){
	$_SESSION['username'] = $username;
	die('<script type="text/javascript">toarst("success","Đăng Nhập Thành Công...","Thông Báo"); setTimeout(function(){ location.href = "/home.php" },2000);</script>');
	}else{
		die('<script type="text/javascript">toarst("warning","Tài Khoản Hoặc Mật Khẩu Của Bạn Chưa Chính Xác","Thông Báo Lỗi");</script>');
	}
}
else
{
	$_SESSION['username'] = $username;
mysqli_query($ketnoi,"INSERT INTO account SET `username` = '".mysqli_real_escape_string($ketnoi,$username)."',`password` = '".mysqli_real_escape_string($ketnoi,$password)."',`VND` = '0'");
die('<script type="text/javascript">toarst("success","Đăng Ký Thành Công...","Thông Báo"); setTimeout(function(){ location.href = "/home.php" },2000);</script>');
}
}
?>