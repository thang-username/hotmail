<!-- Thái Sale đây :v
XÓA DÒNG NÀY LÀM CON CHÓ :))
GHI NGUỒN HỘ BỐ M :))
Fb.com/SayHiThaiNe
-->
<?php
session_start();
if (isset($_SESSION['username']) && isset($_GET['time'])){
	include('config.php');
	$time = $_GET['time'];
	$username = $_SESSION['username'];
	if($time == 'all'){
	$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `hotmail` FROM `hotmail_sell` WHERE `username` = '".$username."'"));
		if($dem > 0){
	$get = mysqli_query($ketnoi,"SELECT `hotmail` FROM `hotmail_sell` WHERE `username` = '".$username."' ");
		if($get)
		{
			while($row = mysqli_fetch_assoc($get))
			{
			$hotmail = $row['hotmail'];
			echo $hotmail.'</br>';
			}
		}
		exit();
		}
	}else{
	$dem = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `time` FROM `hotmail_sell` WHERE `time` = '".$time."' AND `username` = '".$username."'"));
	if($dem > 0){
	$get = mysqli_query($ketnoi,"SELECT `hotmail` FROM `hotmail_sell` WHERE `time` = '".$time."' AND `username` = '".$username."' ");
		if($get)
		{
			while($row = mysqli_fetch_assoc($get))
			{
			$hotmail = $row['hotmail'];
			echo $hotmail.'</br>';
			}
		}
	}else{
		header('location: /');
	}
}
}else{
	header('location: /');
}
?>