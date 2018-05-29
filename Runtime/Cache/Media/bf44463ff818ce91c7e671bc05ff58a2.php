<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <?php if(ACTION_NAME == index and CONTROLLER_NAME == Index): ?><title><?php echo seo_replace(C('media_index.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_index.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_index.seo_description');?>">
    <?php elseif(ACTION_NAME == index and CONTROLLER_NAME == Game): ?>
      <title><?php echo seo_replace(C('media_game_list.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_game_list.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_game_list.seo_description');?>">
    <?php elseif(ACTION_NAME == detail and CONTROLLER_NAME == Game): ?>
      <title><?php echo seo_replace(C('media_game_detail.seo_title'),array('game_name'=>$data['game_name']),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_game_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_game_detail.seo_description');?>">
    <?php elseif(ACTION_NAME == index and CONTROLLER_NAME == Gift): ?>
      <title><?php echo seo_replace(C('media_gift_index.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_gift_index.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_gift_index.seo_description');?>">
    <?php elseif(ACTION_NAME == giftdetail and CONTROLLER_NAME == Gift): ?>
      <title><?php echo seo_replace(C('media_gift_detail.seo_title'),array('game_name'=>$data['game_name'],'giftbag_name'=>$data['giftbag_name']),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_gift_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_gift_detail.seo_description');?>">
    <?php elseif(ACTION_NAME == mall and CONTROLLER_NAME == PointShop): ?>
      <title><?php echo seo_replace(C('media_shop.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_shop.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_shop.seo_description');?>">
    <?php elseif(ACTION_NAME == mall_detail and CONTROLLER_NAME == PointShop): ?>
      <title><?php echo seo_replace(C('media_shop_detail.seo_title'),array('good_name'=>$data['good_name']),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_shop_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_shop_detail.seo_description');?>">
    <?php elseif(ACTION_NAME == detail and CONTROLLER_NAME == Article): ?>
      <title><?php echo seo_replace(C('media_news_detail.seo_title'),array('title'=>$data['title']),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_news_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_news_detail.seo_description');?>">
    <?php elseif(ACTION_NAME == user_recharge and CONTROLLER_NAME == Subscriber): ?>
      <title><?php echo seo_replace(C('media_recharge.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_recharge.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_recharge.seo_description');?>">
    <?php elseif(CONTROLLER_NAME == Service): ?>
      <title><?php echo seo_replace(C('media_service.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_service.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_service.seo_description');?>">
    <?php else: ?>
      <title><?php echo seo_replace(C('media_index.seo_title'),'','media');?></title>
      <meta name="keywords" content="<?php echo C('media_index.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_index.seo_description');?>"><?php endif; ?>
    <link href="<?php echo get_cover(C('PC_SET_ICO'),'path');?>" type="image/x-icon" rel="shortcut icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="applicable-device" content="mobile">   
    <link href="/Public/Media/css/swiper.min.css" rel="stylesheet" >
    <link href="/Public/Media/css/common.css" rel="stylesheet" >
    <link href="/Public/Media/css/pc.css" rel="stylesheet">
    
<link href="/Public/Media/css/user.css" rel="stylesheet" >

  </head>
  <body>
    

    <div class="main">
      <div class="pc-header">
        <div class="pc-inner clearfix">
          <div class="pc-download">
            <a href="javascript:;" class="pc-downloadbtn"><i class="pc-icon-phone"></i><span>扫码关注微信公众号</span></a>
            <div class="pc-qrcode clearfix">
             <div class="pc-ios"><img src="/Public/Media/images/iframe/Qr-code-u-uuyu.jpg"><span>扫我关注</span></div>
            </div>
          </div>
          <a href="<?php echo U('Index/index');?>" class="pc-logo"><?php if(!empty($union_set)): ?><img src="<?php echo get_cover($union_set['pc_logo'],'path');?>"><?php else: ?><img src="<?php echo get_cover(C('PC_SET_LOGO'),'path');?>"><?php endif; ?></a>
        </div>
      </div>
      <div class="pc-container">
        <div class="pc-wrap">
        <div class="pc-inner">
          <div class="pc-mobile">
						<div class="pc-full-box">
            <div class="pc-iframe">
              
<header class="header">
  <section class="wrap">
    <a href="javascript:history.back();" class="hbtn left arrow-left"><span class="table"><span class="table-cell"><img src="/Public/Media/images/back_return.png"></span></span></a>
    <div class="caption"><span class="table"><span class="table-cell">联系我们</span></span></div>
  </section>
</header>

              
              
<div class="mainer user-contact">
    <div class="occupy"></div>
    
    <section class="trunker">
      
      <section class="inner">
        <section class="contain">
          <div class="contact-list">
            <div class="clearfix table">
              
              <?php if($union_set == ''): ?><a href="javascript:;" data-value="<?php echo C('PC_SET_SERVER_QQ');?>" class="butn table-row jschatqq">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_qq.png" class="icon"></span>
                <span class="table-cell butn2">客服 QQ：<?php echo C('PC_SET_SERVER_QQ');?></span>
                <span class="table-cell butn3"><img src="/Public/Media/images/ma_more.png" class="icon-right"></span>
              </a>
              <?php else: ?>
              <a href="javascript:;" data-value="<?php echo ($union_set['cust_qq']); ?>" class="butn table-row jschatqq">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_qq.png" class="icon"></span>
                <span class="table-cell butn2">客服 QQ：<?php echo ($union_set['cust_qq']); ?></span>
                <span class="table-cell butn3"><img src="/Public/Media/images/ma_more.png" class="icon-right"></span>
              </a><?php endif; ?>
              
              <?php if($union_set == ''): ?><a href="javascript:;" data-value="<?php echo C('PC_COMMUNICATION_GROUP');?>" data-url="<?php echo C('PC_COMMUNICATION_GROUP_URL');?>" class="butn table-row jschatqqqun">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_group.png" class="icon"></span>
                <span class="table-cell butn2">官方交流群：<?php echo C('PC_COMMUNICATION_GROUP');?></span>
                <span class="table-cell butn3"><img src="/Public/Media/images/ma_more.png" class="icon-right"></span>
              </a>
              <?php else: ?>
              <a href="javascript:;" data-value="<?php echo ($union_set['qq_group']); ?>" data-url="<?php echo ($union_set['qq_group_url']); ?>" class="butn table-row jschatqqqun">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_group.png" class="icon"></span>
                <span class="table-cell butn2">官方交流群：<?php echo ($union_set['qq_group']); ?></span>
                <span class="table-cell butn3"><img src="/Public/Media/images/ma_more.png" class="icon-right"></span>
              </a><?php endif; ?>
              

              <?php if($union_set == ''): ?><a href="tel:<?php echo C('PC_SET_SERVER_TEL');?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_phone.png" class="icon"></span>
                <span class="table-cell butn2">客服电话：<?php echo C('PC_SET_SERVER_TEL');?></span>
                <span class="table-cell butn3"></span>
              </a>
              <?php else: ?>
              <a href="tel:<?php echo ($union_set['cust_tel']); ?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_phone.png" class="icon"></span>
                <span class="table-cell butn2">客服电话：<?php echo ($union_set['cust_tel']); ?></span>
                <span class="table-cell butn3"></span>
              </a><?php endif; ?>

              <?php if($union_set == ''): ?><a href="tel:<?php echo C('PC_COOPERATION');?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_cooperation.png" class="icon"></span>
                <span class="table-cell butn2">商务合作：<?php echo C('PC_COOPERATION');?></span>
                <span class="table-cell butn3"></span>
              </a>
              <?php else: ?>
              <a href="tel:<?php echo ($union_set['business']); ?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_cooperation.png" class="icon"></span>
                <span class="table-cell butn2">商务合作：<?php echo ($union_set['business']); ?></span>
                <span class="table-cell butn3"></span>
              </a><?php endif; ?>
              
              <?php if($union_set == ''): ?><a href="<?php echo C('PC_OFFICIAL_SITE');?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_website.png" class="icon"></span>
                <span class="table-cell butn2">官方网址：<?php echo C('PC_OFFICIAL_SITE');?></span>
                <span class="table-cell butn3"><img src="/Public/Media/images/ma_more.png" class="icon-right"></span>
              </a>
              <?php else: ?>
              <a href="<?php echo ($union_set['pr_site']); ?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_website.png" class="icon"></span>
                <span class="table-cell butn2">官方网址：<?php echo ($union_set['pr_site']); ?></span>
                <span class="table-cell butn3"><img src="/Public/Media/images/ma_more.png" class="icon-right"></span>
              </a><?php endif; ?>
              <a href="user_argeement.html" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Media/images/my_contact_agreement.png" class="icon"></span>
                <span class="table-cell butn2">用户协议</span>
                <span class="table-cell butn3"><img src="/Public/Media/images/ma_more.png" class="icon-right"></span>
              </a>
              
            </div>
          </div>
          
        </section>
        
      </section>
    </section>
</div>


              
              
              <div class="popplog"></div>
              
            </div>
						<!-- <a href="javascript:;" class="pc-screen-btn jsscreen"><i class="pc-screen"></i></a> -->
						</div>
            <a href="javascript:history.back();" class="pc-butn"><i class="pc-icon"></i></a>
          <div class="pc-theme"><img class="pc-theme-pic" src="/Public/Media/images/iframe/theme.png"></div>
          </div>
          <div class="pc-sys"><div class="pc-qrcode-box"><img class="pc-qrcode-sys" src="<?php echo get_cover(C('PC_SET_QRCODE'),'path');?>"></div><p>扫码即玩 快乐游戏</p></div>
          <div class="pc-container-footer">
						<div class="pc-copyright">
							<p class="pc-cr">
								<span><img src="/Public/Media/images/iframe/pc_ghs.png"><?php echo C('WEB_BEIAN');?></span>
								<span>经营性许可证：<?php echo C('WEB_SITE');?></span>
								<span><?php echo C('PC_GUAN');?></span>
							</p>
							<p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防受骗上当。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
						</div>
					</div>
        </div>
      </div>
      </div>
    </div>
    
    <div class="loginbutdiv hidden">
        <?php if($wx_login == 1): ?><a href="javascript:;" onclick="register('weixin')" class="butn"><img src="/Public/Media/images/login_third_weixin.png"></a><?php endif; ?>
        <?php if($qq_login == 1): ?><a href="javascript:;" onclick="register('qq')" class="butn"><img src="/Public/Media/images/login_third_qq.png"></a><?php endif; ?>
        <?php if($wb_login == 1): ?><a href="javascript:;" onclick="register('weibo')" class="butn"><img src="/Public/Media/images/login_third_sina.png"></a><?php endif; ?>
        <?php if($bd_login == 1): ?><a href="javascript:;" onclick="register('baidu')" class="butn"><img src="/Public/Media/images/login_third_tencent.png"></a><?php endif; ?>
    </div>
    
    <script src="/Public/Media/js/jquery-1.11.1.min.js"></script>
    <script src="/Public/Media/js/swiper-3.4.2.jquery.min.js"></script>
    <script src="/Public/static/layer/layer.js"></script>
    <script src="/Public/Media/js/pop.lwx.min.js"></script>
    <script src="/Public/Media/js/common.js"></script>
    
    <script>
        $(function() {
          $('.jschatqq').click(function() {
            var qq = $.trim($(this).attr('data-value'));
            if (browser.versions.mobile && !browser.versions.trident) {
              window.open("mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&version=1&src_type=web");
            }else
              window.open("tencent://message/?uin="+qq+"&&menu=yes");
            return false;
          });
          
          $('.jschatqqqun').click(function() {
            var qq = $.trim($(this).attr('data-value'));
            if (browser.versions.mobile && !browser.versions.trident) {
              window.location.href="mqqapi://card/show_pslcard?src_type=internal&version=1&uin="+qq+"&card_type=group&source=external";
            }else {
              window.open($.trim($(this).attr('data-url')));
            }
            return false;
          });
          
        });
        
        
        
    </script>

    <?php echo ($logdiv); ?>
    <script>
      var gid = "<?php echo ($game_id); ?>";
      var pid = "<?php echo ($promote_id); ?>";
      var open_name_auth = 0;
      var name_auth_tip = '';
      var $bindphoneadd = "<?php echo ($bindphoneadd); ?>";
      <?php if($open_name_auth == 1): ?>var open_name_auth = "<?php echo ($open_name_auth); ?>";
          var name_auth_tip = "<?php echo ($name_auth_tip); ?>";<?php endif; ?>
    </script>
    <script>
      $("body").on("click",'.butnbox a.butnlogin',function(){
        res = jslogin();
        return res;
      });
      function jslogin(){
          $uid = "<?php echo is_login();?>";
          if($uid<=0){
            $('.jslogin').click();
            return false;
          }else{
            return true;
          }
      }
    </script>
    <script>  
      $('.pc-download').hover(function(){$('.pc-qrcode').fadeIn();},function(){$('.pc-qrcode').fadeOut();});
      
      function resizephone() {
          var winHeight = $( window ).height();
					
					
							var hedh = $('.pc-header').height();
							var both = $('.pc-container-footer').height();
							var pch = winHeight-hedh;
							if($(window).width()>720)
								$('.pc-container').css({'height':pch+'px'});
							var mobheight = pch-both;
							
          var mobwidth = parseInt(mobheight*512/1000);
					
					
          var scale = parseInt(mobwidth/410*100);

              $('html').css('font-size',231*scale/100+'%');
							
      }
      resizephone();
      var resizephonetime = null;
      $(window).resize(function() {
        if (resizephonetime) {clearTimeout(resizephonetime);}
        resizephonetime = setTimeout(function() {
				if($(window).width()<=720) {resizephone();}
        },10);
      });
			
			$('.jsscreen').click(function() {
				var that = $(this);
				if (that.hasClass('full')) {
					that.removeClass('full').css({'right':'-1.2rem'});
					$('.pc-full-box').removeClass('full-iframe').unwrap();
				} else {
					that.addClass('full');
					that.css({'right':'-0.76rem'});
					$('.pc-full-box').addClass('full-iframe').wrap('<div style="position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:1;background:#000"></div>');				
				}
				
			});
      
    </script>
    
  </body>
</html>