<?php
session_start();
if(empty($_SESSION['username'])){
	session_destroy();
	header('location: /');
	die();
}
include('config.php');
include('head_login.php');
?>
<body>
    
<script type='text/javascript'>
//<![CDATA[
//Ctrl+U
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/"});
//]]>
</script>
</script>   
<br>                             

   <strong><marquee direction="right"><font style="background-color: #FFFF00"> --- CHÀO MỪNG BẠN ĐẾN VỚI HỆ THỐNG BÁN HOTMAIL - TOKEN - HOTMAIL RAMDOM !!! 💗 --- CHÚC BẠN SỬ DỤNG DỊCH VỤ CỦA CHÚNG TÔI VUI VẺ - CẢM ƠN !!! 💗 --- </font></marquee></strong>   
     <strong><marquee direction="left"><font style="background-color: #FFFF00"> --- NẾU CẦN HỖ TRỢ VUI LÒNG LIÊN HỆ FACEBOOK HOẶC ZALO ADMIN THÁI : 0859243940!!! 💗 --- </font></marquee></strong>  
</div>
<div class="box-header with-border">

    <div class="container">
        <div class="col-sm-12 col-xs-16">


    <div class="row">
                                   <div class="col-sm-12 col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption">
                                         <center>
<img src="https://solucionsolarled.com/wp-content/uploads/2018/02/img_260077.png" alt="" style="width:50px;height:50px">                                  <i class="mdi mdi-check"></i>
                                 </button>
                                               <h3><b>HOTMAIL CỔ</b></h3>
                                               <a href="mail.php"><button type="button" class="btn btn-success"><b>SỬ DỤNG NGAY</b></button></a>
                                            </center>
                                        </div>
                                    </div>
									</div>
									
									<div class="col-sm-12 col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption">
                                         <center>
<img src="https://solucionsolarled.com/wp-content/uploads/2018/02/img_260077.png" alt="" style="width:50px;height:50px">                                  <i class="mdi mdi-check"></i>
                                  <i class="mdi mdi-account-check"></i>
                                 </button>
                                               <h3><b>TOKEN</b></h3>
                                               <a href="token.php"><button type="button" class="btn btn-info"><b>SỬ DỤNG NGAY</b></button></a>
                                            </center>
                                        </div>
                                    </div>
									</div>
									
									<div class="col-sm-12 col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption">
                                         <center>
<img src="https://solucionsolarled.com/wp-content/uploads/2018/02/img_260077.png" alt="" style="width:50px;height:50px">                                  <i class="mdi mdi-check"></i>
                                  <i class="mdi mdi-shield-outline"></i>
                                 </button>
                                               <h3><b>HOTMAIL RAMDOM</b></h3>
                                               <a href="mailramdom.php"><button type="button" class="btn btn-danger"><b>SỬ DỤNG NGAY</b></button></a>
                                            </center>
                                        </div>
                                    </div>
									</div>
									
									<div class="col-sm-12 col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption">
                                         <center>
<img src="https://solucionsolarled.com/wp-content/uploads/2018/02/img_260077.png" alt="" style="width:50px;height:50px">                                  <i class="mdi mdi-check"></i>
                                  <i class="mdi mdi-account-remove"></i>
                                 </button>
                                               <h3><b>NẠP TIỀN</b></b></h3>
                                               <a href="/napthe"><button type="button" class="btn btn-primary"><b>SỬ DỤNG NGAY</b></button></a>
                                            </center>
                                        </div>
                                    </div>
									</div>
<div align="center" style="z-index:9;visibility:visible;">
<div align="center" style="z-index:9;visibility:visible;"></div><style>HTML,BODY{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/hand.cur"), url("http://downloads.totallyfreecursors.com/thumbnails/hand.gif"), auto;}</style>
<style>
body {
        background-image: url("https://wikicachlam.com/wp-content/uploads/2018/03/mau-tim.jpg");
} 
 
</style>
<div class="col-lg-0 col-lg-6">

<div class="panel panel-info">
<div class="panel-heading"><center>MUA HOTMAIL</center></div>
<div class="panel-body">
            <center><li class="list-group-item">TÀI KHOẢN: <font color="red"><b>thaisale <img src="/theme/logo/verify.png" alt="" style="width:16px;height:16px"> </b></font>SỐ DƯ: <font color="red"><b></b></font> VNĐ</li>

<div class="form-group" id = "mess">
</div>
<div class="form-group">
    <label for="user_name" class="col-sm-3 control-label">Loại Hotmail :</label>
    <div class="col-sm-8">
        <div class="form-group has-error has-feedback">
            <select id="loai" class="form-control">
<option value="1">Hotmail Cổ Đã Lọc</option>
		</select>
        </div>
    </div>
</div>
<label for="user_name" class="col-sm-3 control-label">Số lượng:</label>
<div class="col-sm-8">
    <input type="number" class="form-control" placeholder="Nhập Số Lượng" min="1" id="soluong">
    <div class="form-group">
        <label class="col-sm-8 control-label">Tổng thanh toán: <font color="red"><b id="tongthanhtoan">0</b></font> VND</label>
    </div>
    
 <center><button id="mua" type="button" class="btn btn-success">Mua Ngay</button></center>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-0 col-lg-6"> 

<div class="panel panel-info">
<div class="panel-heading"><center>THỐNG KÊ HỆ THỐNG</center></div>
<div class="panel-body">
<center>
    <li class="list-group-item"><b><font color="black">Tổng Hotmail : </b></font><b><font color="red"></b></font>  Hotmail  Cổ
| </b></font><b><font color="red"></b></font>  Hotmail Ramdom
    
       <li class="list-group-item"><b><font color="black">Tổng Token : </b></font><b><font color="red"></b></font>  Noveri Có AVT
| </b></font><b><font color="red"></b></font>  Via | 
| </b></font><b><font color="red"></b></font>  Veri Có AVT
    
<li class="list-group-item"><b><font color="black">Hệ Thống Đã Bán : </b></font><b><font color="red"></b></font>  Hotmail  
+ </b></font><b><font color="red"></b></font>  Token 
<li class="list-group-item"><b><font color="black">Hệ Thống Có : </b></font><b><font color="red"></b></font>  Thành Viên 
 <li class="list-group-item"><font color="red">CHÚ Ý :</font> MUA SỐ LƯỢNG VỪA ĐỦ DÙNG THÔI NHÉ !!!

</div>
</div>
</div>
</div>
<div class="col-sm-12 col-xs-12">
<div class="panel panel-info">
<div class="panel-heading"><b style="color:#fff;">LỊCH SỬ MUA </b> </div>
<div class="panel-body">
<?php
				$result = mysqli_query($ketnoi,"SELECT * FROM `lich_su_mua` WHERE `username` = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 0,4 ");
				if($result)
				{
				while($row = mysqli_fetch_assoc($result))
				{
				?>
<li class="list-group-item"><b><font color="blue"><?php echo date('d-m-Y',$row['time']); ?></font></b> Tài Khoản
<b><font color="red"><?php echo $row['username']; ?></font></b> Đã Mua 
<b><font color="blue"><?php echo $row['count_hotmail']; ?></font></b> Bạn Có Thể Lấy
<a href="/oday.php?time=<?php echo $row['time']; ?>">Tại Đây</a></li>
				<?php 
				}
				}
				?>
</div>
    </div>
        </div>

</div>
<script type="text/javascript">
$('#mua').click(function(){
				var soluong = $('#soluong').val();
				var loai = $('#loai').val();
				if(soluong < 0){
					toarst("error","BUG CÁI LỒN MÀ BUG ĐỊT CON MẸ MÀY BIẾN NHÉ OK !!!","Thông Báo");
					return;
				}
				if (soluong == '') {
					toarst("warning","Vui Lòng Nhập Đầy Đủ Thông Tin","Thông Báo");
					return false;
				}
				if (soluong == '') {
					toarst("error","Số Lượng Phải Lớn Hơn 1","Thông Báo");
					return false;
				}
				$('#submit').prop('disabled', true);
				    $('#mua').addClass('btn btn-info').html('Đang Lấy...').attr('disabled','disabled');
				   
				$.post('thanhtoan.php', {
					soluong: soluong,
					loai:loai
				}, function(data, status) {
					$("#mess").html(data);
					$('#submit').prop('disabled', false);
					$('#mua').removeClass('btn btn-info').addClass('btn btn-primary').html('Mua Tiếp').removeAttr('disabled');
				});
			});


$('#soluong').keyup(function(){
			var soluong = $('#soluong').val();
			var loai = $('#loai').val();
			if(soluong < 0){
				toarst("error","BUG CÁI LỒN MẸ M OK !!!","Thông Báo");
				return;
			}
			if(loai == 1 && soluong > 999999){
				toarst("error","Số Lượng Không Được Lớn Hơn  ở Hệ Thống","Thông Báo");
				return;
			}
			if(loai == 2 && soluong > 999999){
				toarst("error","Số Lượng Không Được Lớn Hơn  ở Hệ Thống","Thông Báo");
				return;
			}
                        if(loai == 1){
			var gia = 400;
                        }
                        if(loai == 2){
			var gia =9000;
                        }
			var tien = gia * soluong;
			var vnd = 10; // số tiền khi tạo tài khoản mới
			if(tien < vnd){
				toarst("error","Bạn Không Đủ Tiền Để Mua","Thông Báo");
			}
			$('#tongthanhtoan').html(tien.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
			});
</script>
	<div class="col-sm-12 col-xs-12">
</div>
		<div id="trave" style="display: none;">
		</div>
		<script type="text/javascript">
 
    function toarst(status, msg, title) {
        Command: toastr[status](msg, title)
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "1000",
            "timeOut": "4000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "slideDown",
            "hideMethod": "slideUp"
        }
    }
</script>
<script type='text/javascript'>
//<![CDATA[
//Ctrl+U
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/"});
//]]>
</script>