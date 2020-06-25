<!-- Thái Sale đây :v
XÓA DÒNG NÀY LÀM CON CHÓ :))
GHI NGUỒN HỘ BỐ M :))
Fb.com/SayHiThaiNe
-->
<?php
session_start();
if ($_POST && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest' && isset($_SESSION['username']) && isset($_POST['soluong']) && $_POST['soluong'] > 0 && is_numeric($_POST['soluong'])){
	include('config.php');
	$soluong = $_POST['soluong'];
	$loai = $_POST['loai'];
	if($loai == 1){
		$gia = $gia1;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '1'"));
	}else if($loai == 2){
		$gia = $gia2;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '2'"));
	}else if($loai == 3){
		$gia = $gia3;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '3'"));
	}else if($loai == 4){
		$gia = $gia4;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '4'"));
	}else if($loai == 5){
		$gia = $gia5;
		$tonghotmail = mysqli_num_rows(mysqli_query($ketnoi,"SELECT `id` FROM `hotmail` WHERE `loai` = '5'"));
    }
	if($soluong > $tonghotmail){
		exit('<b style="color:red">Số Lượng Hotmail Không Được Lớn hơn Số Hotmail Đang Có Ở Hệ Thống !!!</b>');
	}
		$username = $_SESSION['username'];
		$vnd = mysqli_fetch_assoc(mysqli_query($ketnoi,"SELECT `VND` FROM `account` WHERE `username` = '".$_SESSION['username']."'"))['VND'];
		$thanhtien = $soluong * $gia;

	if($thanhtien > $vnd){
		exit('<b style="color:red">Bạn Không Đủ Tiền Để Mua Số Lượng Hotmail Này Vui Lòng Nạp Thêm !!!</b>');
	}
		$time = time();
	mysqli_query($ketnoi,"UPDATE `account` SET `VND` = `VND` - ".$thanhtien." WHERE `username` = '".$username."'");
		if($loai == 1){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '1' ORDER BY RAND() LIMIT 0, {$soluong}");
		}else if($loai == 2){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '2' ORDER BY RAND() LIMIT 0, {$soluong}");
        }else if($loai == 3){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '3' ORDER BY RAND() LIMIT 0, {$soluong}");
        }else if($loai == 4){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '4' ORDER BY RAND() LIMIT 0, {$soluong}");
        }else if($loai == 5){
			$get = mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `loai` = '5' ORDER BY RAND() LIMIT 0, {$soluong}");
    	}
		if($get)
		{
			
			$fail = 0;
			while($row = mysqli_fetch_assoc($get))
			{
			$hotmail = $row['hotmail'];
			mysqli_query($ketnoi,"DELETE FROM `hotmail` WHERE `hotmail` ='".$hotmail."'");
		if($hotmail != NULL){
			mysqli_query($ketnoi,"INSERT INTO `hotmail_sell` SET `hotmail` = '".$hotmail."',`time` = '".$time."',`username` = '".$username."'");
		}else{
			$fail = $fail + 1;
		}
			}
				$hoantien  = $gia * $fail;
				mysqli_query($ketnoi,"UPDATE `account` SET `VND` = `VND` + ".$hoantien." WHERE `username` = '".$username."'");

	$success = $soluong - $fail;
		mysqli_query($ketnoi,"INSERT INTO `lich_su_mua` SET `count_hotmail` = '".$success."',`time` = '".$time."',`username` = '".$username."'");

	$tienmua = $gia * $success;

		}
		
		exit('<b style="color:green">Mua '.$success.' Mail Thành Công Trừ '.$tienmua.' VND. Hotmail Của Bạn Được Lưu <a href="oday.php?time='.$time.'">Tại Đây</a>!!!</b>');
}
?>