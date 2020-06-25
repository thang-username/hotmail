<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

// kết nối database .
define("DATABASE", ""); // Data
define("USERNAME", ""); // User
define("PASSWORD", ""); // Pass
define("LOCALHOST", "localhost"); // Mặc định localhost
$ketnoi = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
mysqli_query($ketnoi,"set names 'utf8'");  
// config thông tin web
$domain = "https://testcodesale.ml";
$tieude = "Hệ Thống Bán Hotmail";
$name = "Hệ Thống Bán Hotmail";
$fb ="fb.com/username.Ithanga7";
$Momo= "0837758800 - LUU NHU THANG";
$sdt = "Null"; 
$gia1 = 400; // giá mỗi hotmail. Thay đổi liên hệ admin Võ Duy Thái để được thay đổi
$gia3 = 400; // giá mỗi hotmail. Thay đổi liên hệ admin Võ Duy Thái để được thay đổi
$gia4 = 400; // giá mỗi hotmail. Thay đổi liên hệ admin Võ Duy Thái để được thay đổi
$gia5 = 400; // giá mỗi hotmail. Thay đổi liên hệ admin Võ Duy Thái để được thay đổi
?>