<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

    	<link href="<?php echo get_cover(C('MB_ICO'),'path');?>" type="image/x-icon" rel="shortcut icon">
		<title><?php echo C('MB_TITLE');?></title>

		<link rel="stylesheet" type="text/css" href="/Public/Commerce/css/index.css">
		<link rel="stylesheet" type="text/css" href="/Public/Commerce/css/iconfont.css">
        <script src="/Public/Commerce/js/jquery-3.2.1.min.js" ></script>
       <script src="/Public/static/layer/layer.js" type="text/javascript"></script>
	</head>

	<body>
		<div class="login jssearch">
			<div class="loginbox">
			</div>
			<div class="logintext">
				<div class="login-h5">
					<h1>H5商务专员后台</h1>
				</div>
				<form action="<?php echo U('Index/login');?>" method="POST">
					
				<div class="loginput">
					<div class="form-group">
						<i class="iconfont icon-user" style="color:#878A8A;"></i>
						<input type="text" name="username" class="login-input" id="username" placeholder="请输入管理员账号">
					</div>
					<div class="form-group">
						<i class="iconfont icon-pwd" style="color:#878A8A;"></i>
						<input type="password" name="password" id="password" class="login-input" placeholder="请输入密码" onkeyup="if (event.keyCode == 13) login();">
					</div>
					<div class="form-group">
						<i class="iconfont icon-key" style="color:#878A8A;"></i>
						<input type="text" name="registerRandum" id="p_registerRandum" class="login-input-random"  ajaxurl="kyunmember/checkIsrandCode.action" nullmsg="请输入图片验证码" errormsg="请输入3-4位验证码" datatype="*3-4" placeholder="请输入验证码">
						<img class="verifyimg reloadverify" style="margin-left: 10px;margin-top: 13px;vertical-align: bottom;position: absolute;" width="90" height="45" title="点击切换" alt="验证码" src="<?php echo U('Index/verify');?>">
					</div>
					<div class="form-group">
						<input type="button" class="kylogin"  value="登录">
					</div>
				</div>
				
				</form>
			</div>
		</div>
		<script type="text/javascript">
			        var verifyimg = $(".verifyimg").attr("src");
                $(".reloadverify").click(function(){
                    if( verifyimg.indexOf('?')>0){
                        $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
                    }else{
                        $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
                    }
                });	

                   $('.kylogin').click(function(){
                	var account=$('.login-input').val();
                	var pwd=$("input[name='password']").val();
                	var code=$('.login-input-random').val();

            	     $.ajax({
                      type:"POST",
                      url:"<?php echo U('login');?>",
                      data:{account:account,pwd:pwd,code:code},
                      dataType:"json",
                      success:function(res){
                      		if(res.status==1){
                      			 layer.msg('登录成功', {icon: 1,});
                      			  setTimeout(function(){
                                 window.location.href="<?php echo U('Buydetail/registsearch');?>";
                                },1500);
                      		}else{
               				     layer.msg(res.msg, {icon: 2,})
               				     $(".reloadverify").click();
                      		}
                      },
                      error:function(XMLHttpRequest, textStatus, errorThrown){
                      	alert(textStatus);
                      	alert(XMLHttpRequest.readyState);
                      }
                    })
                });	
			                //回车自动提交
			    $('.jssearch').find('input').keyup(function(event){
			        if(event.keyCode===13){
			            $(".kylogin").click();
			        }
			    });	
		</script>
	</body>

</html>