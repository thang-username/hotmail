<?php
session_start();
if(isset($_SESSION['username'])){
	header('location: /home.php');
	die();
}
include('config.php');
include('head.php');

?>
<script type='text/javascript'>
//<![CDATA[
//Ctrl+U
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/"});
//]]>
</script>
<body>
<script type='text/javascript'>
//<![CDATA[
// JavaScript Document
var message="NoRightClicking"; function defeatIE() {if (document.all) {(message);return false;}} function defeatNS(e) {if (document.layers||(document.getElementById&&!document.all)) { if (e.which==2||e.which==3) {(message);return false;}}} if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;} else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;} document.oncontextmenu=new Function("return false")
//]]>
</script>
   

    <div class="main-content">
          <br>
          <div class="container-fluid">
<div class="col-lg-16 col-lg-16">
<div class="col-lg-6 col-lg-12">
<div class="panel panel-info">
<div class="panel-heading"><center><b></i> ĐĂNG NHẬP VÀO HỆ THỐNG </b></center></div>
<div class="panel-body"><li class="list-group-item">  
<div class="panel-body">
        <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <center><label for="userla">Tên Tài Khoản</label>
<input type="text" class="form-control" id="user" minlength="4" maxlength="50" autofocus="" placeholder="Nhập Tên Tài Khoản" required=""></center></div>
<div class="form-group">
            <center><label for="userla">Mật Khẩu</label>
            <input type="password" class="form-control" id="pass" minlength="4" maxlength="50" autofocus="" placeholder="Password" required=""></center></div>
<center><button id="submit" class="btn btn-primary">
            </i> Đăng Nhập + Đăng Kí 💗 </i> </button><center> 



</center></center></div>
              </div></div></li>



</div>
</div></div>
<b>
 <div class="col-sm-6 col-xs-12">

<div class="panel panel-info">
<div class="panel-heading"> <center> </i> BAN QUẢN TRỊ HỆ THỐNG</center></div>

<div class="panel-body">
<div class="text-center">
<div class="col-sm-12 well">
      
            <img class="img-thumbnail img-circle img-responsive" src="https://scontent.fhan5-1.fna.fbcdn.net/v/t1.0-9/61403254_334011657534551_4059193704781447168_n.jpg?_nc_cat=109&_nc_eui2=AeGuRS03rJcXMRvECsywu3vAtGW2K-D51t2NFaZnYgKgyv0g9y8c3QizfbV2y2DT7GUBw6QPyhuw-mqbqvGUe96IlQEK8anzYg4y2F2WE9BrHQ&_nc_oc=AQmatfH44Qg6dkAgVjiKAWa_O_q_45_xlB588gcTSTohI3rLGWl_fZx6tdQkItUPXRw&_nc_ht=scontent.fhan5-1.fna&oh=9087f9fa65eecdd80de9700eefdf7bd3&oe=5D936B7A" style=" width: 100px; ">
            <h5 class="text-muted">VÕ DUY THÁI 💗 </h5>
    <a class="btn btn-primary mt-2" href="https://www.facebook.com/100026403127689">
        </i>
       LIÊN HỆ ADMIN ✓  </a>
        </div>
                                
                    

</div>
</div>
</div>
              </div>  </b></div><b>
               
			               

</b></div><b>

 
 
</b></div>
 <div class="col-lg-12"> 

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


</div>
</div>
</div>
</div>           
            
           
</div> 
    </div> 
        </div>
         <!-- rows -->
<div class="form-group" id = "mess">

</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
	setInterval(function(){
		$.get('mess.php', {
				}, function(data, status) {
					$("#messenger").html(data);
				});
		},1e3);
	});
	
	
	$('#gui').click(function(){
				var mess = $('#tinhan').val();
				if (mess == '') {
					toarst("warning","Vui Lòng Nhập Đầy Đủ Thông Tin","Thông Báo");
					return false;
				}
				$('#submit').prop('disabled', true)
				$.post('mess_login.php', {
					mess: mess,
				}, function(data, status) {
					$("#messenger").html(data);
					$('#tinhan').val('');
				});
			}) 
			
    $(document).keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
		    var mess = $('#tinhan').val();
				if (mess == '') {
					toarst("warning","Vui Lòng Nhập Đầy Đủ Thông Tin","Thông Báo");
					return false;
				}
				$('#submit').prop('disabled', true)
				$.post('mess.php', {
					mess: mess,
				}, function(data, status) {
					$("#messenger").html(data);
					$('#tinhan').val('');
				});
	}
});
	

            $('#submit').click(function(){
			var username = $('#user').val();
			var password = $('#pass').val();
				if (username == '' || password == '') {
					toarst("warning","Vui Lòng Nhập Đầy Đủ Thông Tin","Thông Báo");
					return false;
				}
				$('#submit').prop('disabled', true)
				$.post('dangnhap.php', {
					username: username,
					password: password
				}, function(data, status) {
					$("#trave").html(data);
					$('#submit').prop('disabled', false);
				});
			});
</script>
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
    </body>
        </html>