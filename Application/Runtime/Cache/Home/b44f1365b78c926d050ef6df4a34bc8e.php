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
    <link href="/Public/plugins/layui-v1.0.9/css/layui.css?v=3.3.5" rel="stylesheet">

    
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
</head>
<body style="background-color: #E5E9EF;">
<script type="text/javascript">
    $(function(){
        var $config = {
            title  : 'Z博客', // 标题，默认读取 document.title
            description : 'z博客，IT分享平台！', // 描述, 默认读取head标签：<meta name="description" content="PHP弱类型的实现原理分析" />
	        sites    : ['wechat', 'qq', 'weibo'],
//            disabled : ['diandian','google', 'facebook', 'twitter', 'douban', 'tencent'], // 禁用的站点
            iamge    : '', // 图片, 默认取网页中第一个img标签
            target : '_blank' //打开方式
        };

        $('.sns-share').share($config);
    });
</script>
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
                    <div class="container-fluid">
	                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span><span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
                        </button>
		                    <a class="navbar-brand" href="http://blog.aiboms.cn/" style="font-size: 30px;">Z博客</a>
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
                            <li class="dropdown nav-list">
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
                            </li>
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
<div class="container" style="margin-top: 50px;">


	<?php if(is_array($wechatList)): foreach($wechatList as $key=>$wechat): ?><div style="width:100%;min-width:800px;margin-top: 10px;height:90px;background-color: white">
			<div style="width:10%;float: left;padding: 10px;">
				<a href="<?php echo ($wechat['url']); ?>" target="_blank">
					<img style="height: 70px;width: 100px;" src="<?php echo ($wechat['firstImg']); ?>">
				</a>
			</div>

			<div style="width:90%;float: left;padding-top: 30px;padding-left: 20px;">
				<h1 style="font-size: 16px;font-weight: bolder"><a target="_blank" href="<?php echo ($wechat['url']); ?>"><?php echo ($wechat['title']); ?></a></h1>
				<p>
					来源：<?php echo ($wechat['source']); ?>
				</p>
				</p>
			</div>
		</div><?php endforeach; endif; ?>


<script type="text/javascript">
    var _CONTROLLER_ = '/index.php/Home/DailyPie';
    var _ACTION_ = '/index.php/Home/DailyPie/wechat';
    var _ROOT_ = '';
</script>

    <script src="/Public/plugins/layui-v1.0.9/layui.js"></script>
    <script type="text/javascript">
    </script>

</div>
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
</body>
</html>