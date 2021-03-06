<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="none">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    
    <link href="/Public/plugins/bootstrap/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="/Public/plugins/shareJs/css/share.min.css?v=3.3.5" rel="stylesheet">
<!--<link href="/Public/plugins/layui-v1.0.9/css/layui.css?v=3.3.5" rel="stylesheet">-->
<link href="/Public/css/index.css?v=1.0" rel="stylesheet">

<link rel="shortcut icon" href="favicon.ico">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/Public/css/carousel.css?v=3.3.5" rel="stylesheet">

    
        <script src="/Public/js/jquery.min.js?v=1.9.1"></script>
<script src="/Public/js/index.js?v=1.0"></script>
<script src="/Public/plugins/bootstrap/js/bootstrap.min.js?v=3.3.5"></script>
<script src="/Public/plugins/shareJs/js/jquery.share.min.js"></script>
<!--<script src="/Public/plugins/layui-v1.0.9/layui.js"></script>-->
    
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title><?php echo (C("SITE_NAME")); ?></title>
    <meta name="keywords" content="<?php echo (C("KEYWORDS")); ?>" />
    <meta name="description" content="<?php echo (C("DESCRIPTION")); ?>" />

	<!--百度统计代码start-->
	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "https://hm.baidu.com/hm.js?395d772b7d7a08249ef132b15e166d0d";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
	</script>
	<!--百度统计代码end-->
	<style type="text/css">
		html, body {width:100%;height:100%;} /*非常重要的样式让背景图片100%适应整个屏幕*/
		.bg {display: table;width: 100%;height: 20%;padding: 100px 0;text-align: center;color: #fff;background: url(/Public/images/index_top.jpg) no-repeat bottom center;background-color: #000;background-size: cover;}
		.my-navbar {padding:20px 0;transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;}
		.my-navbar a{background:transparent !important;color:#fff !important}
		.my-navbar a:hover {color:#45bcf9 !important;background:transparent;outline:0}
		.my-navbar a {transition: color 0.5s ease-in-out;}/*-webkit-transition ;-moz-transition*/
		.top-nav {padding:0;background:rgb(34,34,34);}
		.navbar-inverse{border: none;}
		button.navbar-toggle {background-color:#fbfbfb;}/*整个背景都是transparent透明的，会看不到，所以再次覆盖一下*/
		button.navbar-toggle > span.icon-bar {background-color:#dedede}
	</style>
</head>
<body style="background-color: #E5E9EF;">
<script type="text/javascript">
    $(function(){
        var $config = {
            title  : '南人的独立博客', // 标题，默认读取 document.title
            description : '南阁有浪人，绝世而独立', // 描述, 默认读取head标签：<meta name="description" content="PHP弱类型的实现原理分析" />
	        sites    : ['wechat', 'qq', 'weibo'],
//            disabled : ['diandian','google', 'facebook', 'twitter', 'douban', 'tencent'], // 禁用的站点
            iamge    : '', // 图片, 默认取网页中第一个img标签
            target : '_blank' //打开方式
        };

        $('.sns-share').share($config);
    });

    $(window).scroll(function () {
	    if ($(".navbar").offset().top > 50) {$(".navbar-fixed-top").addClass("top-nav");
	    }else {$(".navbar-fixed-top").removeClass("top-nav");}
    })
</script>
<nav class="navbar navbar-fixed-top my-navbar" role="navigation">
                    <div class="container-fluid">
	                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span><span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
                        </button>
		                    <a href="http://blog.aiboms.cn/">
                                <img src="/Public/images/logo.png">
                            </a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-list">
                                <a href="http://blog.aiboms.cn/">首页</a>
                            </li>
                            <li class="nav-list">
                                <a href="/index.php/Home/DailyPie/yaowen">最要闻</a>
                            </li>
                            <li class="nav-list">
                                <a href="/index.php/Home/DailyPie/wechat">DailyPie</a>
                            </li>
                            <li class="nav-list">
                                <a href="/index.php/Home/Index/journal">日志</a>
                            </li>
                            <!--<li class="dropdown nav-list">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">主题<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Action</a>
                                    </li>
                                    <li>
                                        <a href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">Something else here</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">Separated link</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="#">One more separated link</a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                        <!--<form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="keywords"/ style="width:120px;">
                            </div> <button type="submit" class="btn btn-default">Submit</button>
                        </form>-->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-list">
                                <a href="#">关于</a>
                            </li>
                            <li class="nav-list">
                                <a href="/index.php/Home/ContactUs/index">联系我们</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
<div class="bg">
	<p style="font-size: 56px;">
		<span style="color:rgb(86,85,163)">A</span>
		<span style="color:rgb(220,199,255)">I</span>
		<span style="color:rgb(255,233,125)">B</span>
		<span style="color:rgb(232,68,120)">O</span>
		<span style="color:rgb(241,141,0)">M</span>
		<span style="color:rgb(167,66,44)">S</span>
	</p>
	<p style="font-size: 20px;">
		hi! this is kiry's private blog! welcome~
		Let's study, share and make progress together.
	</p>
</div>
<div class="container">


    <div style="height:auto;width:75%;float:left;padding: 10px;" id="main-content">
        <?php if(is_array($articleList)): foreach($articleList as $key=>$article): ?><div class="panel panel-default">
                <div class="panel-body">
                    <h2>
                        <?php echo ($article['title']); ?>
                    </h2>
                    <p><font class="label label-success" style="border-radius: 0"><?php echo ($article['category_name']); ?></font><font
                            class="label label-default" style="border-radius: 0"><?php echo ($article['created_time']); ?>
                        <?php echo ($article['author']); ?></font></p>
                    <div class="article_list_index">
                        <?php echo ($article['content_info']); ?>
                    </div>
                    <p>
                        <a class="btn" href="/index.php/Home/Article/detail?article_id=<?php echo ($article['article_id']); ?>">View details
                            »</a>
                    </p>
                </div>
            </div><?php endforeach; endif; ?>
    </div>
<!--</div>-->
    <!--标签云-->
    <div style="height:auto;float:left;width:25%;padding:10px 10px 10px 10px;min-width: 150px;" id="right-content">
        <h5>分类</h5>
        <div class="panel panel-defaults">
            <div class="panel-body">
                <?php if(is_array($articleCategoryList)): foreach($articleCategoryList as $key=>$articleCategory): ?><p><a href="/index.php/Home/Article/list?category_id=<?php echo ($articleCategory['category_id']); ?>"><?php echo ($articleCategory['category_name']); ?><font>(<?php echo ($articleCategory['article_num']); ?>)</font></a></p><?php endforeach; endif; ?>
            </div>
        </div>
        <h5>友链</h5>
        <div class="panel panel-default">
            <div class="panel-body">
                <p>
                    <a class="" target="_blank" href="http://www.talisk.cn">talisk斯温的技术博客</a>
                </p>

		        <p>
                    <a class="" target="_blank" href="http://www.maplejoyous.cn">JerriMei的技术博客</a>
                </p>
            </div>
        </div>
        <h5>Follow me</h5>
        <div class="panel panel-default">
            <div class="panel-body">
                <p>
                    <a class="" target="_blank" href="https://github.com/aiboms">
                        <img src="/Public/images/github.png">
                    </a>
                    <a target="_blank" href="https://www.zhihu.com/people/kavinbright/activities">
                        <img src="/Public/images/zhihu.png">
                    </a>
                    <a target="_blank" href="http://weibo.com/u/6070398749">
                        <img src="/Public/images/sina.png">
                    </a>
                </p>
            </div>
        </div>
    </div>


<script type="text/javascript">
    var _CONTROLLER_ = '/index.php/Home/Index';
    var _ACTION_ = '/index.php/Home/Index/index';
    var _ROOT_ = '';
</script>

    <script src="/Public/js/excanvas.js?v=1.0"></script>
    <script src="/Public/js/jquery.tagcanvas.js?v=1.0"></script>
    <script src="/Public/js/slider.js"></script>
    <script type="text/javascript">
        if($(window).width()<500){
            $("#main-content").width("100%");
            $("#right-content").width("100%");
        }
        $(document).ready(function () {
            if (!$('#myCanvas').tagcanvas({
                    textColour: '#ffffff',
                    outlineThickness: 2,
                    maxSpeed: 0.03,
                    depth: 0.75
                })) {
            }
        });

        $(function () {
            var bannerSlider = new Slider($('#banner_tabs'), {
                time: 5000,
                delay: 400,
                event: 'hover',
                auto: true,
                mode: 'fade',
                controller: $('#bannerCtrl'),
                activeControllerCls: 'active'
            });
            $('#banner_tabs .flex-prev').click(function () {
                bannerSlider.prev()
            });
            $('#banner_tabs .flex-next').click(function () {
                bannerSlider.next()
            });
        })
    </script>

<div style="
  position:fixed;
  text-align: right;
  right: 0px;
  font-family: 微软雅黑;
  top:350px;z-index: 1000;">
	<div><img id="share_btn" src="/Public/images/share_url.png" style="cursor:hand;"></div>
	<div class="sns-share" style="display: none;"></div>
</div>
<script type="text/javascript">
	$('#share_btn').click(function(){
		$('.sns-share').toggle();
	});
</script>
</div>
</body>
</html>