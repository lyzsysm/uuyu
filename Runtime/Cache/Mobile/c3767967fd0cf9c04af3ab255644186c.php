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
		<?php elseif(ACTION_NAME == 'open_game' and CONTROLLER_NAME == Game): ?>
      <title><?php echo seo_replace(C('media_game_detail.seo_title'),array('game_name'=>$game_name),'media');?></title>
      <meta name="keywords" content="<?php echo C('media_game_detail.seo_keyword');?>">
      <meta name="description" content="<?php echo C('media_game_detail.seo_description');?>">
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
		<link rel="apple-touch-icon" href="/Public/Mobile/images/touch-icon-iphone.png" />

		
		<meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
		
    <link href="/Public/Mobile/css/swiper.min.css" rel="stylesheet" >
    <link href="/Public/Mobile/css/common.css" rel="stylesheet" >
    <script src="/Public/Mobile/js/jquery-1.11.1.min.js"></script>
    <script src="/Public/Mobile/js/swiper-3.4.2.jquery.min.js"></script>
    <script src="/Public/Mobile/js/common.js"></script>
    <script src="/Public/Mobile/js/pop.lwx.min.js"></script>
  </head>
  <body <?php if(CONTROLLER_NAME == 'Search'): ?>class="searchpage" <?php elseif(CONTROLLER_NAME == 'Article'): ?>class="newspage" <?php elseif(ACTION_NAME == 'mall_record'): ?> class="integral-record"<?php elseif(ACTION_NAME == 'user_balance'): ?> class="user-balance"<?php elseif(ACTION_NAME == 'user_nickname'): ?> class="user-nickname"<?php elseif(ACTION_NAME == 'user_auth' or ACTION_NAME == 'user_bind_phone'): ?> class="user-auth"<?php elseif(ACTION_NAME == 'user_auth' or ACTION_NAME == 'user_bind_modify'): ?> class="user-auth"<?php elseif(ACTION_NAME == 'user_auth' or ACTION_NAME == 'user_bind_modifyed'): ?> class="user-auth"<?php elseif(ACTION_NAME == 'user_auth' or ACTION_NAME == 'user_password'): ?> class="user-auth" <?php elseif(ACTION_NAME == 'user_address'): ?> class="user-balance" <?php elseif(ACTION_NAME == 'user_gift'): ?> class="user-gift" <?php elseif(ACTION_NAME == 'user_collectioned'): ?> class="user-collection" <?php elseif(ACTION_NAME == 'user_collection'): ?> class="user-collection" <?php elseif(ACTION_NAME == 'user_contact'): ?> class="user-contact" <?php elseif(ACTION_NAME == 'user_argeement'): ?> class="user-contact"<?php elseif(ACTION_NAME == 'user_message'): ?> class="user-message"<?php elseif(ACTION_NAME == 'mall' and $data["count"] == 0 ): ?> class="mall-empty-mainer"<?php endif; ?> >
    
<link href="/Public/Mobile/css/user.css" rel="stylesheet" >
<style>
.footer{
  display: none;
}
</style>
    <header class="header">
      <section class="wrap">
        <a href="javascript:history.back();" class="hbtn left arrow-left"><span class="table"><span class="table-cell"><img src="/Public/Mobile/images/back_return.png"></span></span></a>
        <div class="caption"><span class="table"><span class="table-cell">联系我们</span></span></div>
      </section>
    </header>
    <div class="occupy"></div>
    
    <section class="trunker">
      
      <section class="inner">
        <section class="contain">
          <div class="contact-list">
            <div class="clearfix table">
              <?php if($union_set == ''): ?><a href="javascript:;" data-value="<?php echo C('PC_SET_SERVER_QQ');?>" class="butn table-row jschatqq">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_qq.png" class="icon"></span>
                <span class="table-cell butn2">客服 QQ：<?php echo C('PC_SET_SERVER_QQ');?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a>
              <?php else: ?>
              <a href="javascript:;" data-value="<?php echo ($union_set['cust_qq']); ?>" class="butn table-row jschatqq">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_qq.png" class="icon"></span>
                <span class="table-cell butn2">客服 QQ：<?php echo ($union_set['cust_qq']); ?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a><?php endif; ?>
              
              <?php if($union_set == ''): ?><a href="javascript:;" data-value="<?php echo C('PC_COMMUNICATION_GROUP');?>" data-url="<?php echo C('PC_COMMUNICATION_GROUP_URL');?>" class="butn table-row jschatqqqun">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_group.png" class="icon"></span>
                <span class="table-cell butn2">官方交流群：<?php echo C('PC_COMMUNICATION_GROUP');?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a>
              <?php else: ?>
              <a href="javascript:;" data-value="<?php echo ($union_set['qq_group']); ?>" data-url="<?php echo ($union_set['qq_group_url']); ?>" class="butn table-row jschatqqqun">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_group.png" class="icon"></span>
                <span class="table-cell butn2">官方交流群：<?php echo ($union_set['qq_group']); ?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a><?php endif; ?>
              

              <?php if($union_set == ''): ?><a href="tel:<?php echo C('PC_SET_SERVER_TEL');?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_phone.png" class="icon"></span>
                <span class="table-cell butn2">客服电话：<?php echo C('PC_SET_SERVER_TEL');?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a>
              <?php else: ?>
              <a href="tel:<?php echo ($union_set['cust_tel']); ?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_phone.png" class="icon"></span>
                <span class="table-cell butn2">客服电话：<?php echo ($union_set['cust_tel']); ?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a><?php endif; ?>

              <?php if($union_set == ''): ?><a href="tel:<?php echo C('PC_COOPERATION');?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_cooperation.png" class="icon"></span>
                <span class="table-cell butn2">商务合作：<?php echo C('PC_COOPERATION');?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a>
              <?php else: ?>
              <a href="tel:<?php echo ($union_set['business']); ?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_cooperation.png" class="icon"></span>
                <span class="table-cell butn2">商务合作：<?php echo ($union_set['business']); ?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a><?php endif; ?>
              
              <?php if($union_set == ''): ?><a href="<?php echo C('PC_OFFICIAL_SITE');?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_website.png" class="icon"></span>
                <span class="table-cell butn2">官方网址：<?php echo C('PC_OFFICIAL_SITE');?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a>
              <?php else: ?>
              <a href="<?php echo ($union_set['pr_site']); ?>" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_website.png" class="icon"></span>
                <span class="table-cell butn2">官方网址：<?php echo ($union_set['pr_site']); ?></span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a><?php endif; ?>
              <a href="user_argeement.html" class="butn table-row">
                <span class="table-cell butn1"><img src="/Public/Mobile/images/my_contact_agreement.png" class="icon"></span>
                <span class="table-cell butn2">用户协议</span>
                <span class="table-cell butn3"><img src="/Public/Mobile/images/ma_more.png" class="icon-right"></span>
              </a>
              
            </div>
          </div>
          
        </section>
        
      </section>
    </section>
    
    
    <script src="/Public/Mobile/js/common.js"></script>
    <script>
        $(function() {
          $('.jschatqq').click(function() {
            var qq = $.trim($(this).attr('data-value'));
            if (browser.versions.mobile) {
              window.location.href="mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&version=1&src_type=web";
            }else
              window.location.href="http://wpa.qq.com/msgrd?v=3&uin="+qq+"&site=qq&menu=yes";
            return false;
          });
          
          $('.jschatqqqun').click(function() {
            var qq = $.trim($(this).attr('data-value'));
            if (browser.versions.mobile) {
              window.location.href="mqqapi://card/show_pslcard?src_type=internal&version=1&uin="+qq+"&card_type=group&source=external";
            }else {
              window.location.href=$.trim($(this).attr('data-url'));
            }
            return false;
          });
          
        });
        
        
        
    </script>
	

    <footer class="footer">
      <section class="wrap">
        <div class="nav table">
          <a class="item table-cell <?php if(CONTROLLER_NAME == "Index"): ?>active<?php endif; ?>" href="<?php echo U('Index/index#new');?>"><i class="icon icon-home"></i><span>首页</span></a>
          <a class="item table-cell <?php if(CONTROLLER_NAME == "Game"): ?>active<?php endif; ?>" href="<?php echo U('Game/index#categroy');?>"><i class="icon icon-game"></i><span>游戏</span></a>
          <a class="item table-cell <?php if(CONTROLLER_NAME == "Gift"): ?>active<?php endif; ?>" href="<?php echo U('Gift/index#all');?>"><i class="icon icon-gift"></i><span>礼包</span></a>
          <a class="jsshopmall item table-cell <?php if(CONTROLLER_NAME == "PointShop"): ?>active<?php endif; ?>" href="<?php echo U('PointShop/mall');?>"><i class="icon icon-mall"><?php if($mallissignin == 1): ?><i class="circle"></i><?php endif; ?></i><span>商城</span></a>
          <a class="item table-cell <?php if(CONTROLLER_NAME == "Subscriber"): ?>active<?php endif; ?>" href="<?php echo U('Subscriber/user');?>"><i class="icon icon-user"><?php if($newmsg == 1): ?><i class="circle"></i><?php endif; ?></i><span>我的</span></a>
        </div>
      </section>
    </footer>
    <?php echo ($logdiv); ?>
    <div class="loginbutdiv hidden">
        <?php if($wx_login == 1 and is_weixin()): ?><a href="javascript:;" onclick="register('weixin')" class="butn"><img src="/Public/Mobile/images/login_third_weixin.png"></a><?php endif; ?>
        <?php if($qq_login == 1): ?><a href="javascript:;" onclick="register('qq')" class="butn"><img src="/Public/Mobile/images/login_third_qq.png"></a><?php endif; ?>
        <?php if($wb_login == 1): ?><a href="javascript:;" onclick="register('weibo')" class="butn"><img src="/Public/Mobile/images/login_third_sina.png"></a><?php endif; ?>
        <?php if($bd_login == 1): ?><a href="javascript:;" onclick="register('baidu')" class="butn"><img src="/Public/Mobile/images/icon_baidu@3x.png"></a><?php endif; ?>
    </div>
    <a style="display:none" href="#shell/WXThirdLogin" id="weixinThirdLogin"></a>
    <a style="display:none" href="#shell/QQThirdLogin" id="qqThirdLogin"></a>
    <form id="app_third_login" action="<?php echo U('Subscriber/app_third_login');?>" method="post" enctype="multipart/form-data" style="display:none">
      <input type="text" name="openID" id="openID"/></p>
      <input type="text" name="nickName" id="nickName"  />
      <input type="text" name="icon" id="icon"/>
      <input type="text" name="logintype" id="logintype"/>
      <input type="text" name="gid" value="<?php echo I('game_id');?>"/>
      <input type="text" name="pid" value="<?php echo (session('union_host')['union_id'])?(session('union_host')['union_id']):$promote_id;?>"/>
      <input type="submit" value="提交" />
    </form>
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
    <script type="text/javascript">
      url = "<?php echo ($_SERVER['HTTP_HOST']); ?>"+"<?php echo U('Subscriber/serverNotice');?>";
      // WebSocketTest(url);
      function WebSocketTest(url){
        if ("WebSocket" in window)
        {
           // 打开一个 web socket
           var ws = new WebSocket("ws://"+url);
           ws.onopen = function()
           {
              // Web Socket 已连接上，使用 send() 方法发送数据
              ws.send("发送数据");
              alert("数据发送中...");
           };
           ws.onmessage = function (evt) 
           { 
              var received_msg = evt.data;
              alert("数据已接收...");
           };
           ws.onclose = function()
           { 
              // 关闭 websocket
              alert("连接已关闭..."); 
           };
        }
        else
        {
           // 浏览器不支持 WebSocket
           alert("您的浏览器不支持 WebSocket!");
        }
      }
    </script>
  </body>
</html>