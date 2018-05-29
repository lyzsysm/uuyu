<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>-<?php echo C('WEB_SITE_TITLE');?></title>
    <link href="<?php echo get_cover(C('SITE_ICO'),'path');?>" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/<?php echo (C("COLOR_STYLE")); ?>.css" media="all">
     <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->
    
</head>
<body>
    <!-- 头部 -->
    <div class="header">
        <!-- Logo -->
        <span class="logo">
            <img src="<?php echo get_cover(C('HT_LOGO'),'path');?>" width="100%" height="100%">
        </span>
        <!-- /Logo -->

        <!-- 主导航 -->
			<style>.main-nav li a i {float:none;}</style>
        <ul class="main-nav ieman">
            <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>"><a href="<?php echo (U($menu["url"])); ?>"><i class="guidicon guidicon-<?php echo ($menu["id"]); ?>"></i><h5><?php echo ($menu["title"]); ?></h5></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- /主导航 -->

        <!-- 用户栏 -->
        <div class="topright">    
            <ul>
                <li><span><img src="/Public/Admin/images/help.png" title="帮助" class="helpimg"></span><a href="http://www.kancloud.cn/xzmch/wd/168273">帮助</a></li>
                <li class="subjectlist jssubject">
                  <a href="javascript:;" class="cbtn jscbtn">主题<i></i></a>
                  <div class="subject-sublist jssubjectlist">
                      <?php $colorstyle = get_color_style_list();?>
                      <?php if(is_array($colorstyle["list"])): $i = 0; $__LIST__ = $colorstyle["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div><a href="javascript:void(0);" target="_self" class="subject-item jssetcolor" data-value="<?php echo ($key); ?>"><img src="/Public/Admin/images/<?php echo ($key); ?>.png" class="subject-pic"><p><span><?php echo ($vo); ?></span></p><i class="subject-icon <?php if(($colorstyle["value"]) == $key): ?>yes<?php endif; ?>"></i></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                </li>
                 <li class="gwlist">
                    <div class="nav" id="nav">
                    	<p class="set"><a target="_blank" href="media.php?s=index/index">官网<i></i></a></p>
                    	
                    </div>
                </li> 
                <li><a class="tuichujs" href="">退出</a></li>
            </ul>
          
        </div>
    </div>
    
    <!--下拉样式-->
    <script type="text/javascript">
		$(function(){
			$(".nav p").click(function(){
				var ul=$(".new");
				if(ul.css("display")=="none"){
					ul.slideDown();
				}else{
					ul.slideUp();
				}
			});	
		//选择主题
		$('.jscbtn').click(function() {
			$(this).siblings().slideToggle(200);
			return false;
		});

		$('.jssetcolor').click(function() {
			var that = $(this),
				value = that.attr('data-value');
			var par = that.closest('.jssubjectlist');

			if(that.hasClass('disabled')) { return false; }

			$('.jssetcolor').addClass('disabled');

			$.post('/admin.php?s=/Admin/set_color_style.html', { value: value }, function(data) {
				if(data.status == 1) {
					updateAlert(data.info, 'tip_right');
					setTimeout(function() {
						$('#tip').find('.tipclose').click();
						setTimeout(function() { location.reload(); }, 300);
					}, 1500);

				} else {
					updateAlert(data.info, 'tip_error');
					setTimeout(function() {
						$('#tip').find('.tipclose').click();
					}, 1500);
					par.slideToggle(200);
					$('.jssetcolor').removeClass('disabled');
				}
			}, 'json');

			return false;
		});
	
		})
</script>
<div id="tip" class="tip"><a class="tipclose hidden" ></a><div class="tipmain"><div class="tipicon"></div><div class="tipinfo">这是内容</div></div></div>
<script>
    /**顶部警告栏*/
    var content = $('#main');
    var top_alert = $('#tip');
    
    top_alert.find('.tipclose').on('click', function () {
        top_alert.removeClass('block').slideUp(200);
    });
    window.updateAlert = function (text,c) {
        text = text||'default';
        c = c||false;
        if ( text!='default' ) {
            top_alert.find('.tipinfo').text(text);
            if (top_alert.hasClass('block')) {
            } else {
                top_alert.addClass('block').slideDown(200);
            }
        } else {
            if (top_alert.hasClass('block')) {
                top_alert.removeClass('block').slideUp(200);
            }
        }
        if ( c!=false ) {
            top_alert.removeClass('tip_error tip_right').addClass(c);
        }
    };
</script>
<!--下拉样式结束-->
    <!-- /头部 -->

    <!-- 边栏 -->
    <div class="sidebar" <?php if(CONTROLLER_NAME == Index): ?>style="display:none<?php endif; ?>">
        <div class="user_nav">
           <span><img src="/Public/Admin/images/tx.jpg"></span>
           <p><?php echo session('user_auth.username');?></p>
           <p style="margin-top:0px;"><?php if($res['uid'] == '1'): ?>超级管理员<?php else: echo ($res1['title']); endif; ?></p>
        </div>
        <div class="fgx">功能菜单</div>
        
        <!-- 子导航 -->
        
            <div id="subnav" class="subnav">
                <?php if(!empty($_extra_menu)): ?>
                    <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
                <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
                    <?php if(!empty($sub_menu)): if(!empty($key)): ?><h3 class=""><i class="icon icon-unfold"></i><?php echo ($key); ?></h3><?php endif; ?>
                        <ul class="side-sub-menu">
                            <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>
                                    <a class="item" href="<?php echo (U($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul><?php endif; ?>
                    <!-- /子导航 --><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        
        <!-- /子导航 -->
    </div>
    <!-- /边栏 -->

    <!-- 内容区 -->
    <div id="main-content" style="margin-top: 50px;position:relative;">
            <div id="tip" class="tip"><a class="tipclose hidden" ></a><div class="tipmain"><div class="tipicon"></div><div class="tipinfo">这是内容</div></div></div>
           <div id="main" class="main">
            
            <!-- nav -->
            <?php if(!empty($_show_nav)): ?><div class="breadcrumb">
                <span>位置:</span>
                <?php $i = '1'; ?>
                <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
                    <?php else: ?>
                    <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
                    <?php $i = $i+1; endforeach; endif; ?>
            </div><?php endif; ?>
            <!-- nav -->
            
            <?php if(CONTROLLER_NAME != 'Index' ): endif; ?>
            
<link rel="stylesheet" href="/Public/Admin/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/select2.min.js"></script>
<style>
	.search_list .input-list-game .select_gallery{width: 150px !important;}
    .select2-container--default .select2-selection--single {
            color: #000;
        resize: none;
        border-width: 1px;
        border-style: solid;
        height:35px;
        border-color: #D3D8DE;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height:34px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {height:35px;}
    .navtab_list{ width:100%; border-bottom:1px solid #ddd; margin: 15px 0px; height: 65px;}
    .navtab_list a{ display:block; width:100px; height:35px; line-height:35px; text-align:center; float:left; margin-left:20px; background:#e0e0e0; border-radius:3px; color:#333; margin-top: 15px;}
    .navtab_list a:first-child{ margin-left:0px;}
    .navtab_list a:hover, .navtab_list a.tabchose{ text-decoration:none; border-bottom:none; background:rgb(0, 149, 248); color:#fff;}
    .navtab_list_cs{ margin-top:20px;margin-left: 20px;}
    .navtab_list_cs img{ margin:0px 8px;}
    .data_list table td {
        min-width: 50px;
    }
    .top_nav_list{height: auto;margin-top: 10px;margin-bottom: 6px;}
    @media only screen and (max-width: 1440px) {
			.search_list .sch-btn{width: 75px;}
			.search_list .export-btn{width: 65px;}
		}
	.description_text{height: 40px;line-height: 40px;}
</style>
    <!-- 标题栏 -->
    <div class="main-place">
        <span class="main-placetitle"></span>
        <ul class="main-placeul">
            <li><a href="<?php echo U('Spend/lists');?>">充值</a></li>
            <li><a href="<?php echo U('Spend/lists');?>">游戏订单</a></li>
            <li><a href="#">游戏充值</a></li>
        </ul>
        <p class="description_text">说明：包含游戏SDK内所有支付的订单，包含SDK现金支付、平台币支付、绑币支付</p>
    </div>
	<div class="cf">
		<!-- 高级搜索 -->
		<div class="jssearch fr cf search_list">
				
            <div class="input-list">
                <label>玩家账号：</label>
                <input type="text" name="<?php echo ((isset($model['search_key']) && ($model['search_key'] !== ""))?($model['search_key']):'user_account'); ?>" class="" value="<?php echo I('user_account');?>" placeholder="请输入账号">
            </div>
            <div class="input-list">
                <label>充值时间：</label>
                <input type="text" id="time-start" name="timestart" class="" value="<?php echo I('timestart');?>" placeholder="起始时间" /> 
                <span style="color: #B3B3B5;font-weight: bold;">-</span>
                <div class="input-append date" id="datetimepicker" style="display:inline">
                <input type="text" id="time-end" name="timeend" class="" value="<?php echo I('timeend');?>" placeholder="结束时间" />
                <span class="add-on"><i class="icon-th"></i></span>
                </div>
            </div>
            <div class="input-list">
                <label>充值IP：</label>
                <input type="text" name="spend_ip" class="" value="<?php echo I('spend_ip');?>" placeholder="请输入充值IP">
            </div>
            <div class="input-list" >
                <label>订单号：</label>
                <input type="text" name="pay_order_number" class="" value="<?php echo I('pay_order_number');?>" placeholder="请输入订单号">
            </div>
            <div class="input-list input-list-game search_label_rehab">
                <label>游戏名称：</label>
                <select id="game_id" name="game_name" class="select_gallery">
                    <option value="">请选择游戏</option>
                    <?php $_result=get_game_list();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option game-id="<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["game_name"]); ?>"><?php echo ($vo["game_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>   
            </div>
            <div class="input-list input-list-spend search_label_rehab">
            <label>充值方式：</label>
                <select id="pay_way_id" name="pay_way" class="select_gallery select2-search--hide" >
                    <option value="">请选择充值方式</option>
                    <?php $_result=all_pay_way('all');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["key"]); ?>"><?php echo ($vo["value"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>  
            </div>
            <div class="input-list search_item input-list-orderstatus">
                <label>订单状态：</label>
                <select name="pay_status" class="select_gallery select2-search--hide">
                    <option value="">全部</option>
                    <option value="0">下单未付款 </option>
                    <option value="1">充值成功</option>
                </select>
            </div>
             <div class="input-list search_item input-list-gamenoticestatus">
                <label>游戏通知状态：</label>
                <select name="pay_game_status" class="select_gallery select2-search--hide" style="width: 122px;">
                    <option value="">全部</option>
                    <option value="0">通知失败</option>
                    <option value="1">通知成功</option>
                </select>
            </div>
           
                <input type="hidden" name="" value="" class="sortBy">
            <div class="input-list search_item">
                <a class="sch-btn" href="javascript:;" id="search" url="<?php echo U('Spend/lists','model='.$model['name'],false);?>">搜索</a>
            </div>
            <div class="input-list search_item"> 
                <a class="export-btn" href="<?php echo U('Export/expUser',array_merge(array('id'=>7,),I('get.')));?>">导出</a>
            </div>
				
		</div>
	</div>


    <!-- 数据列表 -->
    <div class="data_list">
        <div class="">
            <table>
                <!-- 表头 -->
                <thead>
                    <tr>
                        <th>支付订单号</th>     
                        <th ><a class="paixu" data-order='pay_time'><?php if($userarpu_order == 4 and $userarpu_order_type == 'pay_time'): ?>充值时间▲<?php elseif($userarpu_order == 3 and $userarpu_order_type == 'pay_time'): ?>充值时间▼<?php else: ?>充值时间 <img src="/Public/Admin/images/up-down.png" width="13px"><?php endif; ?></a></th>

                        <th>玩家账号</th>
                        <th>游戏名称</th>
                        <th>所属推广员</th>
                        <th>充值IP</th>
                        <th ><a class="paixu" data-order='pay_amount'><?php if($userarpu_order == 4 and $userarpu_order_type == 'pay_amount'): ?>充值金额▲<?php elseif($userarpu_order == 3 and $userarpu_order_type == 'pay_amount'): ?>充值金额▲<?php else: ?>充值金额 <img src="/Public/Admin/images/up-down.png" width="13px"><?php endif; ?></a></th>
                        <th>充值方式</th>
                        <th>订单状态</th>
                        <th>游戏通知状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <!-- 列表 -->
                <tbody>
								<?php if(!empty($list_data)): if(is_array($list_data)): $i = 0; $__LIST__ = $list_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($data["pay_order_number"]); ?></td>
                            <td><?php echo set_show_time($data['pay_time']);?></td>
                            <td><?php echo ($data["user_account"]); ?></td>
                            <td><?php echo ($data["game_name"]); ?></td>
                            <td><?php echo get_promote_name($data['promote_id']);?></td>
                            <td><?php echo ($data["spend_ip"]); ?></td>
                            <td><span><?php echo ($data["pay_amount"]); ?></span></td>
                            <td><?php echo get_pay_way($data['pay_way']);?></td>
                            <td>
                                <?php if($data['pay_status'] == 1): ?><span style="color: #46A3FF;"><?php echo get_info_status($data['pay_status'],9);?></span>
                                <?php else: echo get_info_status($data['pay_status'],9); endif; ?>
                            </td>
                            <td>
                                <?php if($data['pay_status'] == 1): ?><span style="color: #46A3FF;"><?php echo get_info_status($data['pay_game_status'],14);?></span>
                                <?php elseif($data["status"] == 0): ?>
                                — —
                                <?php else: echo get_info_status($data['pay_game_status'],14); endif; ?>
                            </td>
                            <td>
                            <?php if($data['pay_game_status'] == 0 and $data['pay_status'] == 1): ?><a  class="ajax-get budan" href="javascript:void(0);" href-data="<?php echo ($data["pay_order_number"]); ?>" href-url="<?php echo U('Repair/repairEdit');?>">补单</a>
                                <?php else: ?>

                                <span>补单</span><?php endif; ?>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr class="data_summary">
                        <td colspan="12"><span style="margin-right: 10px;">汇总：</span><span>当页充值：<?php echo null_to_0(array_sum(array_column(array_status2value('pay_status','',$list_data),'pay_amount')));?>元 ； 今日充值：<?php echo ($ttotal); ?>元 ； 昨日充值：<?php echo ($ytotal); ?>元 ； 累计充值：<?php echo ($total); ?>元（此处只汇总充值成功的订单）</span></td>
                      
                    </tr>
									<?php else: ?>
									<tr><td colspan="12">aOh! 暂时还没有内容!</td></tr><?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="page">
        <?php echo ((isset($_page) && ($_page !== ""))?($_page):''); ?>
    </div>

        </div> 
        <div class="cont-ft">
            <div class="copyright">
                <div class="fl" style="margin-left: 15px;">感谢使用<a href="https://www.vlcms.com/" target="_blank">Vlcms溪谷软件</a>游戏运营平台 <?php echo C(VERSION_NUMBER);?></div>
            </div>
        </div>
    </div>
    <!-- /内容区 -->
    <script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "", //当前网站地址
            "APP"    : "/admin.php?s=", //当前项目地址
            "PUBLIC" : "/Public", //项目公共目录地址
            "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        }
    })();
    </script>
    <script type="text/javascript" src="/Public/static/think.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
    <script type="text/javascript">
        +function(){
            var $window = $(window), $subnav = $("#subnav"), url;
            $window.resize(function(){
                $("#main").css("min-height", $window.height() - 160);
            }).resize();
            $('.tuichujs').click(function(){
                $.ajax({
                    type: 'POST',
                    async: false,
                    dataType: 'json',
                    url: "<?php echo U('Public/logout');?>",
                    success: function(data) {
                        updateAlert('退出成功','tip_right');
                        setTimeout(function(){
                            $('#tip').find('.tipclose').click();
                        },1500);
                        location.reload();
                    },
                    error:function(){
                        updateAlert('服务器错误','tip_error');
                        setTimeout(function(){
                            $('#tip').find('.tipclose').click();
                        },1500);
                    }
                });
            });
            /* 左边菜单高亮 */
            url = window.location.pathname + window.location.search;
            url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
            //$subnav.find('h3').addClass('no');
            $subnav.find("a[href='" + url + "']").parent().addClass("current").closest('ul').show().prev('h3').addClass('no');

            /* 左边菜单显示收起 */
            $("#subnav").on("click", "h3", function(event){
                var e = event || window.event;
                var target = $(e.target);
                var $this = $(this);                
                if ($this.index() == target.index())
                	$this.siblings().removeClass('no'),
                	$this.toggleClass("no"),
                  $this.find(".icon").toggleClass("icon-fold");
                else
                  $this.toggleClass('no').find(".icon").toggleClass("icon-fold");
                $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").prev("h3").find("i").addClass("icon-fold").end().end().hide();
            });


            $("#subnav h3 a").click(function(e){e.stopPropagation()});

            /* 头部管理员菜单 */
            $(".user-bar").mouseenter(function(){
                var userMenu = $(this).children(".user-menu ");
                userMenu.removeClass("hidden");
                clearTimeout(userMenu.data("timeout"));
            }).mouseleave(function(){
                var userMenu = $(this).children(".user-menu");
                userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
                userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
            });

	        /* 表单获取焦点变色 */
	        $("form").on("focus", "input", function(){
		        $(this).addClass('focus');
	        }).on("blur","input",function(){
				        $(this).removeClass('focus');
			        });
		    $("form").on("focus", "textarea", function(){
			    $(this).closest('label').addClass('focus');
		    }).on("blur","textarea",function(){
			    $(this).closest('label').removeClass('focus');
		    });

            // 导航栏超出窗口高度后的模拟滚动条
            var sHeight = $(".sidebar").height();
            var subHeight  = $(".subnav").height();
            var diff = subHeight - sHeight; //250
            var sub = $(".subnav");
            if(diff > 0){
                $(window).mousewheel(function(event, delta){
                    if(delta>0){
                        if(parseInt(sub.css('marginTop'))>-10){
                            sub.css('marginTop','0px');
                        }else{
                            sub.css('marginTop','+='+10);
                        }
                    }else{
                        if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                            sub.css('marginTop','-'+(diff-10));
                        }else{
                            sub.css('marginTop','-='+10);
                        }
                    }
                });
            }
        }();
    </script>
    
<link href="/Public/static/datetimepicker/css/datetimepicker.css" rel="stylesheet" type="text/css">
<?php if(C('COLOR_STYLE')=='blue_color') echo '<link href="/Public/static/datetimepicker/css/datetimepicker_blue.css" rel="stylesheet" type="text/css">'; ?>
<link href="/Public/static/datetimepicker/css/dropdown.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Public/static/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/Public/static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script src="/Public/static/layer/layer.js" type="text/javascript"></script>
<script>
<?php $_result=I('get.');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>Think.setValue('<?php echo ($key); ?>',"<?php echo ($vo); ?>");<?php endforeach; endif; else: echo "" ;endif; ?>
$(".select_gallery").select2();
$(".select2-search--hide").select2({
	minimumResultsForSearch: -1,
});
</script>
<script type="text/javascript">
//导航高亮
highlight_subnav('<?php echo U('Spend/lists');?>');
$(function(){
	//搜索功能
	$("#search").click(function(){
		var starttime = $.trim($('#time-start').val());
		var endtime = $.trim($('#time-end').val());
		
		if (starttime <= endtime) {
			var url = $(this).attr('url');
        var query  = $('.jssearch').find('input').serialize();
        query  += "&"+$('.jssearch').find('select').serialize();
        query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g,'');
        query = query.replace(/^&/g,'');
        if( url.indexOf('?')>0 ){
            url += '&' + query;
        }else{
            url += '?' + query;
        }
			window.location.href = url;
		
		} else {
			layer.msg('开始时间必须小于等于结束时间');
		}
				
		return false;
	});
    $(".paixu").click(function(){
        var that=$(this);
        $data_order=that.attr('data-order');
        $order_type='<?php echo ($userarpu_order); ?>';
        if($order_type==''||$order_type=='4'){
            $(".sortBy").attr('name','data_order');
            val='3,'+$data_order;
            $(".sortBy").attr('value',val);
            $("#search").click();
        }else if($order_type=='3'){
            $(".sortBy").attr('name','data_order');
            val='4,'+$data_order;
            $(".sortBy").attr('value',val);
            $("#search").click();
        }
    });
    //回车自动提交
    $('.jssearch').find('input').keyup(function(event){
        if(event.keyCode===13){
            $("#search").click();
        }
    });
    
    $('#time-start').datetimepicker({
        format: 'yyyy-mm-dd',
        language:"zh-CN",
        minView:2,
        autoclose:true
    });

    $('#datetimepicker').datetimepicker({
       format: 'yyyy-mm-dd',
        language:"zh-CN",
        minView:2,
        autoclose:true,
        pickerPosition:'bottom-left'
    })
    $(".budan").click(function(){
        url=$(this).attr('href-url');
        data=$(this).attr('href-data');
        $.ajax({
          type: 'post',
          // async:true,
          url: url,
          data:{orderNo:data},
          success: function(e){
            if(e.status){
                layer.msg(e.msg,{icon:1});
            }else{
                layer.msg(e.msg,{icon:2});
            }
          },
        });
    });
    $(".budan2").click(function () {
                url = $(this).attr('href-hhh');
                data = $(this).attr('href-data');
                $.ajax({
                    type: 'post',
                    url: url,
                    data: {orderNo: data},
                    success: function (e) {
                        if (e.status==1) {
                            if(e.msg.length>30){
                                window.open(e.msg);
                            }else{
                                layer.msg(e.msg, {icon: 1});
                                setTimeout(function(){
                                    location.reload();
                                },1500);
                            }
                        } else {
                            layer.msg(e.msg, {icon: 2});
                        }
                    },
                });
            });
    $(".d_list").find(".drop-down11").hover(function(){
        $(this).find(".nav-list").removeClass("hidden");
    },function(){
        $(this).find(".nav-list").addClass("hidden");
    });

    $(".drop-down11 .nav-list li").find("a").each(function(){
        var that = $(".drop-down11");
        $(this).click(function(){
            var text = $(this).text(),val = $(this).attr("value");
            that.find(".sort-txt").text(text).attr("data",val);
            that.find(".nav-list").addClass("hidden");
            that.siblings('.hiddenvalue').val(val);
        })
    });
    
    $(".d_list").find(".drop-down12").hover(function(){
        $(this).find(".nav-list").removeClass("hidden");
    },function(){
        $(this).find(".nav-list").addClass("hidden");
    });

     $(".drop-down12 .nav-list li").find("a").each(function(){
        var that = $(".drop-down12");
        $(this).click(function(){
            var text = $(this).text(),val = $(this).attr("value");
            that.find(".sort-txt").text(text).attr("data",val);
            that.find(".nav-list").addClass("hidden");
            that.siblings('.hiddenvalue').val(val);
        })
    });
    
    $(".d_list").find(".drop-down13").hover(function(){
        $(this).find(".nav-list").removeClass("hidden");
    },function(){
        $(this).find(".nav-list").addClass("hidden");
    });

    $(".drop-down13 .nav-list li").find("a").each(function(){
        var that = $(".drop-down13");
        $(this).click(function(){
            var text = $(this).text(),val = $(this).attr("value");
            that.find(".sort-txt").text(text).attr("data",val);
            that.find(".nav-list").addClass("hidden");
            that.siblings('.hiddenvalue').val(val);
        })
    });

    //下拉内容框
    $(".drop-down2").on('click',function(event) {
        var navlist = $(this).find('.i_list_li');
        if (navlist.hasClass('hidden')) {
            navlist.removeClass('hidden');
            $('#i_list_id').focus().val('');            
        } else {
            navlist.addClass('hidden');
        }
        $(document).one("click", function(){
            navlist.addClass('hidden');
        });
        event.stopPropagation();
    });

    $('#i_list_id').on('keyup',function(event) {
        var val  = $.trim($(this).val()).toLowerCase();
        $('#i_list_idh').val(val);
    });
    
    $("#i_list_li").find("a").each(function(){
        $(this).click(function(){
            var text = $.trim($(this).text()).toLowerCase();
            $("#i_list_id").val(text);
            $('#i_list_idh').val(text);
        })
    });

})
</script>

</body>
</html>