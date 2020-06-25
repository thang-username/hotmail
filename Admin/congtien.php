<script>alert('Thang ');</script>
<script>alert('NAP TIEN');</script>
<!-- Làm biếng làm giao diện add tiền cho admin quá -->
<?php
session_start();
include '../config.php';
if($_SESSION['username'] == 'adminmail'){
?>
<center><form method="post">
Chọn username :
<br><select name="username">
<?php
$req = mysqli_query($ketnoi, "SELECT * FROM `account`");
while($res = mysqli_fetch_assoc($req)){
?>
<option value="<?= $res['username'] ?>"><?= $res['username']?> </option>
<?php
}
?>
</select>
<br>
Nhập số tiền : 
<br><input type="number" name="vnd">
<br><input type="submit" name="submit" value="Ok">
<br>
<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$vnd = $_POST['vnd'];
mysqli_query($ketnoi, "UPDATE `account` SET `VND`=`VND`+'$vnd' WHERE `username`='$username'");
echo 'Đã + '.$vnd.' VND cho '.$username;
}
}
?>