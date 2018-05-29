<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		<link href="/Public/Media/css/qrcode.css" rel="stylesheet" />
		  
	</head>

	<body>
		<div class="head">

			<div class="nav_home">
				<a href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/media.php"><?php echo C('wechat.wechatname');?></a>
			</div>
			<div class="pc-download">
				<div class="head-app"><span >App下载</span></div>
				<div class="pc-qrcode clearfix" style="display: none;">
					<div class="pc-ios"><img src="<?php echo U('Base/appdownQrcode',array('url'=>base64_encode(base64_encode('http://'.$_SERVER['HTTP_HOST'].$ios))));?>">
				
					</div>
				</div>
			</div>

		</div>
		<div class="main">
			
			<div class="pc-container-footer">
						<div class="pc-copyright">
							<p class="pc-cr">
								<span><img src="/Public/Media/images/iframe/pc_ghs.png">苏公网安备：<?php echo C('WEB_BEIAN');?></span>
								<span>经营性许可证：<?php echo C('WEB_SITE');?></span>
								<span><?php echo C('PC_GUAN');?>
</span>
							</p>
							<p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防受骗上当。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
						</div>
					</div>
		</div>
		     <script src="/Public/Media/js/jquery-1.11.1.min.js"></script>
		<script>
			
			$('.pc-download').hover(function() {
				$('.pc-qrcode').fadeIn();
			}, function() {
				$('.pc-qrcode').fadeOut();
			});
		</script>
	</body>

</html>