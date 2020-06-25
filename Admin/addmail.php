<?php
include('../config.php');
if(isset($_GET['hotmail'])){
	$hotmail = $_GET['hotmail'];
	$loai = $_GET['loai'];

			if($loai == 1){
			if(mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `hotmail` = '".$hotmail."' AND `loai` = '1'"))) {
				mysqli_query($ketnoi,"UPDATE `hotmail` SET `hotmail` = '".$hotmail."' WHERE `hotmail` = ".$hotmail."");
				echo 'update';
			}else{
				mysqli_query($ketnoi,"INSERT INTO `hotmail` SET `hotmail` = '".$hotmail."',`loai` = '1'");
				echo 'insert';
			}
			}
			if($loai == 2){
			if(mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `hotmail` = '".$hotmail."' AND `loai` = '2'"))) {
				mysqli_query($ketnoi,"UPDATE `hotmail` SET `hotmail` = '".$hotmail."' WHERE `hotmail` = ".$hotmail."");
				echo 'update';
			}else{
				mysqli_query($ketnoi,"INSERT INTO `hotmail` SET `hotmail` = '".$hotmail."',`loai` = '2'");
				echo 'insert';
			}
			}
			if($loai == 3){
			if(mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `hotmail` = '".$hotmail."' AND `loai` = '3'"))) {
				mysqli_query($ketnoi,"UPDATE `hotmail` SET `hotmail` = '".$hotmail."' WHERE `hotmail` = ".$hotmail."");
				echo 'update';
			}else{
				mysqli_query($ketnoi,"INSERT INTO `hotmail` SET `hotmail` = '".$hotmail."',`loai` = '3'");
				echo 'insert';
			}
			}
			if($loai == 4){
			if(mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `hotmail` = '".$hotmail."' AND `loai` = '4'"))) {
				mysqli_query($ketnoi,"UPDATE `hotmail` SET `hotmail` = '".$hotmail."' WHERE `hotmail` = ".$hotmail."");
				echo 'update';
			}else{
				mysqli_query($ketnoi,"INSERT INTO `hotmail` SET `hotmail` = '".$hotmail."',`loai` = '4'");
				echo 'insert';
			}
			}
			if($loai == 5){
			if(mysqli_num_rows(mysqli_query($ketnoi,"SELECT * FROM `hotmail` WHERE `hotmail` = '".$hotmail."' AND `loai` = '5'"))) {
				mysqli_query($ketnoi,"UPDATE `hotmail` SET `hotmail` = '".$hotmail."' WHERE `hotmail` = ".$hotmail."");
				echo 'update';
			}else{
				mysqli_query($ketnoi,"INSERT INTO `hotmail` SET `hotmail` = '".$hotmail."',`loai` = '5'");
				echo 'insert';
			}
			}
			
	exit();
}
include('../head.php');
?>
    <div class="container">
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">ADD HOTMAIL
                </div>
                <div class="panel-body">
				<div class="form-group">
					<textarea rows="10" cols="50" type="text" class="form-control" id="listhotmail"  placeholder="Nhập list Hotmail, mỗi mail một dòng"></textarea>
					</div>
					
					<div class="form-group has-error has-feedback">
            <select id="loai" class="form-control">
		    <option value="1">Hotmail Cổ</option>
			<option value="2">Hộp Quà May Mắn</option>
			<option value="3">Token Noveri Có Avatar</option>
			<option value="4">Token Via</option>
			<option value="5">Token Veri Có Avatar</option>
		</select>
        </div>
					<div class="form-group">
						<button type="button" class="btn btn-primary" id="btn" onclick="addtoken();">Add Hotmail</button>
					</div>
					<div id='an' style= 'display:none'>
					Số Hotmail update :<div id='update'>0</div>
					Số Hotmail insert :<div id='insert'>0</div>
					Số Hotmail Die :<div id='die'>0</div>
					</div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    function addtoken() {
		var insert = 0, update = 0, die = 0;
        var listhotmail = $('#listhotmail').val();
		var loai = $('#loai').val();
        if (listhotmail == '') {
            toarst("error", "Vui Lòng Nhập list hotmail", "Thông Báo Lỗi !!!");
            return false;
        }
		$('#an').show();
		$('#btn').prop('disabled', true)
		var hotmail = listhotmail.split('\n');
		var c = hotmail.length;
		for(i = 0; i < c; i++){
		var vuong = hotmail[i].trim();
        $.get('addmail.php', {
            hotmail: vuong,
			loai:loai
        }, function(data, status) {
			if(data == '')
			{
				die++;
				$('#die').text(die);
			}
			if(data == 'insert')
			{
				insert++;
				$('#insert').text(insert);	
			}
			if(data == 'update')
			{
				update++;
				$('#update').text(update);
			}
           $('#btn').prop('disabled', false)
        });
		}
    }
</script>
<?php
include('../foot.php');
?>