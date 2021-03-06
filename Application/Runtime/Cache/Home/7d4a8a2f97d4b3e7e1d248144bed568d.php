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
<link href="/Public/plugins/layui-v1.0.9/css/layui.css?v=3.3.5" rel="stylesheet">
<link href="/Public/css/index.css?v=1.0" rel="stylesheet">

<link rel="shortcut icon" href="favicon.ico">
    
    
        <script src="/Public/js/jquery.min.js?v=1.9.1"></script>
<script src="/Public/js/index.js?v=1.0"></script>
<script src="/Public/plugins/bootstrap/js/bootstrap.min.js?v=3.3.5"></script>
<script src="/Public/plugins/shareJs/js/jquery.share.min.js"></script>
<script src="/Public/plugins/layui-v1.0.9/layui.js"></script>
    
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title><?php echo (C("SITE_NAME")); ?></title>
    <meta name="keywords" content="<?php echo (C("KEYWORDS")); ?>" />
    <meta name="description" content="<?php echo (C("DESCRIPTION")); ?>" />
</head>
<body>
<script type="text/javascript">
    $(function(){
        var $config = {
            title  : 'Z博客', // 标题，默认读取 document.title
            description : 'z博客，IT分享平台！', // 描述, 默认读取head标签：<meta name="description" content="PHP弱类型的实现原理分析" />
            disabled : ['diandian'], // 禁用的站点
            iamge    : '', // 图片, 默认取网页中第一个img标签
            target : '_blank' //打开方式
        };

        $('.sns-share').share($config);
    });
</script>
<div style="height: 60px;background-color: #3c3c3c;width:100%;">
    <div class="container" style="padding-top: 10px;min-width:800px;">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <nav class="navbar navbar-inverse" role="navigation" style="background-color: #3c3c3c;border: none;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="http://blog.aiboms.cn/" style="font-size: 30px;">Z博客</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-size: 16px;">
                        <ul class="nav navbar-nav">
                            <li class="nav-list">
                                <a href="http://blog.aiboms.cn/">首页</a>
                            </li>
                            <li class="nav-list">
                                <a href="#">最要闻</a>
                            </li>
                            <li class="nav-list">
                                <a href="#">DailyPie</a>
                            </li>
                            <li class="nav-list">
                                <a href="#">日志</a>
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
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="输入关键字"/>
                            </div> <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-list">
                                <a href="#">关于</a>
                            </li>
                            <li class="nav-list">
                                <a href="/index.php/Home/ContactUs/index">联系我们</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container" style="min-width: 800px;">


    <form class="layui-form" action="/index.php/Home/ContactUs/send" method="post" style="width: 50%;text-align: center;margin-left: 25%;">
        <div class="layui-form-item">
            <label class="layui-form-label" style="width:100px;">发送至：</label>
            <label class="layui-form-label" style="width:100px;">aiboms@163.com</label>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" style="width:100px;">发送人：</label>
            <div class="layui-input-block">
                <input type="text" name="name" lay-verify="title" placeholder="请输入您的称呼"  autocomplete="off" class="layui-input" value="">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" style="width:100px;">您的邮箱：</label>
            <div class="layui-input-block">
                <input type="text" name="email" id="email" lay-verify="email" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label" style="width:100px;">主题：</label>
            <div class="layui-input-block">
                <input type="text" name="title" id="titles" lay-verify="title" placeholder="请输入邮件主题" autocomplete="off" class="layui-input" value="">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label" style="width:100px;">正文：</label>
            <div class="layui-input-block">
                <textarea name="content" placeholder="请输入内容" id="content" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formEmail">立即提交</button>
                <input type="reset" class="layui-btn layui-btn-primary"/>
            </div>
        </div>
    </form>


<script type="text/javascript">
    var _CONTROLLER_ = '/index.php/Home/ContactUs';
    var _ACTION_ = '/index.php/Home/ContactUs/Index';
    var _ROOT_ = '';
</script>

    <script src="/Public/js/excanvas.js?v=1.0"></script>
    <script src="/Public/js/jquery.tagcanvas.js?v=1.0"></script>
    <script type="text/javascript">
        layui.use('form', function(){
            var form = layui.form();

            //监听提交
            form.on('submit(formEmail)', function(data){
                var msg = '';
                if(!$('#titles').val()){
                    layer.msg('请输入主题');
                    return false;
                }
                if(!$('#email').val()){
                    layer.msg('请输入邮箱');
                    return false;
                }
                if(!$('#content').val()){
                    layer.msg('请输入正文');
                    return false;
                }
            });
        });
    </script>

</div>
<div style="background-color: #3c3c3c;width: 100%;height: 120px;margin-top: 30px;">
    <div style="text-align: center;padding-top: 25px;">
        <img src="http://blog.aiboms.cn/Public/images/beian.png"><span style="color:white;font-size: 16px;">鄂ICP备17001819号 AIBOMS传媒</span>
    </div>
    <div style="text-align: center;padding-top: 15px;">
        <div class="sns-share"></div>
    </div>
</div>
</body>
</html>