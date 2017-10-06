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

    
    <!--
<script src="/Public/js/jquery.min.js?v=1.9.1"></script>
-->
<script src="/Public/plugins/dist/js/lib/jquery-1.10.2.min.js"></script>
<script src="/Public/js/index_admin.js?v=1.0"></script>
<script src="/Public/js/tool.js?v=1.0"></script>
<script src="/Public/plugins/bootstrap/js/bootstrap.min.js?v=3.3.5"></script>
<script src="/Public/plugins/layui-v1.0.9/layui.js?v=3.3.5"></script>
<script src="/Public/plugins/layer/layer.js"></script>
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/plugins/simplemde-markdown/debug/simplemde.js"></script>
    <script src="/Public/plugins/simplemde-markdown/dist/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        $(document).ready(function(){
            var simplemde = new SimpleMDE({
                autoDownloadFontAwesome:false,
                autofocus: true,
                element: $("#editor")[0],
                toolbar: [
                    {
                        name: "bold",
                        action: SimpleMDE.toggleBold,
                        className: "fa fa-bold",
                        title: "Bold",
                        default: true
                    },
                    {
                        name: "italic",
                        action: SimpleMDE.toggleItalic,
                        className: "fa fa-italic",
                        title: "Italic",
                        default: true
                    },
                    {
                        name: "strikethrough",
                        action: SimpleMDE.toggleStrikethrough,
                        className: "fa fa-strikethrough",
                        title: "Strikethrough"
                    },
                    {
                        name: "heading",
                        action: SimpleMDE.toggleHeadingSmaller,
                        className: "fa fa-header",
                        title: "Heading",
                        default: true
                    },
                    {
                        name: "code",
                        action: SimpleMDE.toggleCodeBlock,
                        className: "fa fa-code",
                        title: "Code"
                    },
                    {
                        name: "quote",
                        action: SimpleMDE.toggleBlockquote,
                        className: "fa fa-quote-left",
                        title: "Quote",
                        default: true
                    },
                    {
                        name: "unordered-list",
                        action: SimpleMDE.toggleUnorderedList,
                        className: "fa fa-list-ul",
                        title: "Generic List",
                        default: true
                    },
                    {
                        name: "ordered-list",
                        action: SimpleMDE.toggleOrderedList,
                        className: "fa fa-list-ol",
                        title: "Numbered List",
                        default: true
                    },
                    {
                        name: "link",
                        action: SimpleMDE.drawLink,
                        className: "fa fa-link",
                        title: "Create Link",
                        default: true
                    },
                    {
                        name: "image",
                        action: SimpleMDE.drawImage,
                        className: "fa fa-picture-o",
                        title: "Insert Image",
                        default: true
                    },
                    {
                        name: "table",
                        action: SimpleMDE.drawTable,
                        className: "fa fa-table",
                        title: "Insert Table"
                    },
                    {
                        name: "horizontal-rule",
                        action: SimpleMDE.drawHorizontalRule,
                        className: "fa fa-minus",
                        title: "Insert Horizontal Line"
                    },
                    {
                        name: "preview",
                        action: SimpleMDE.togglePreview,
                        className: "fa fa-eye no-disable",
                        title: "Toggle Preview",
                        default: true
                    },
                    {
                        name: "side-by-side",
                        action: SimpleMDE.toggleSideBySide,
                        className: "fa fa-columns no-disable no-mobile",
                        title: "Toggle Side by Side",
                        default: true
                    },
                    {
                        name: "fullscreen",
                        action: SimpleMDE.toggleFullScreen,
                        className: "fa fa-arrows-alt no-disable no-mobile",
                        title: "Toggle Fullscreen",
                        default: true
                    },
                    {
                        name: "guide",
                        action: "https://simplemde.com/markdown-guide",
                        className: "fa fa-question-circle",
                        title: "Markdown Guide",
                        default: true
                    },
                    {
                        name: "undo",
                        action: SimpleMDE.undo,
                        className: "fa fa-undo no-disable",
                        title: "Undo"
                    },
                    {
                        name: "redo",
                        action: SimpleMDE.redo,
                        className: "fa fa-repeat no-disable",
                        title: "Redo"
                    },
                    {
                        name:"save",
                        action:saveArticle,
                        className:"fa fa-save",
                        title:"save article"
                    }
                ]
            });

            function saveArticle() {
                var articleContent = simplemde.markdown(simplemde.value());
                var data = {
                    'content':articleContent,
                    'category_id':'5',
                    'title':'大商网',
                    'author':'zhangliang',
                    'content_info':articleContent.substr(0,300)
                };
                $.ajax({
                    url:'addPost',
                    type:'POST',
                    data:data,
                    success:function(){
                        layer.msg("保存成功");
                    }
                })
            }
        });

    </script>

    
    <link href="/Public/plugins/bootstrap/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
<link href="/Public/plugins/layui-v1.0.9/css/layui.css?v=1.0.9" rel="stylesheet">
<link href="/Public/css/index_admin.css?v=1.0" rel="stylesheet">
<link href="/Public/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/plugins/simplemde-markdown/dist/simplemde.min.css" rel="stylesheet">
    <link href="/Public/plugins/simplemde-markdown/dist/qtcreator_dark.css" rel="stylesheet">
    <link href="/Public/plugins/simplemde-markdown/awesome/css/font-awesome.css" rel="stylesheet">


    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title><?php echo (C("SITE_NAME")); ?></title>
    <meta name="keywords" content="<?php echo (C("KEYWORDS")); ?>" />
    <meta name="description" content="<?php echo (C("DESCRIPTION")); ?>" />
    <!--百度编辑器-->
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:auto">


    <div class="layui-form-item" style="margin-top: 10px;margin-right: 10px;">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block">
            <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;margin-right: 10px;">
        <label class="layui-form-label">作者</label>
        <div class="layui-input-block">
            <input type="text" name="author" required  lay-verify="required" placeholder="请输入作者" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;margin-right: 10px;">
        <label class="layui-form-label">类型</label>
        <div class="layui-input-block">
            <input type="text" name="category_id" required  lay-verify="required" placeholder="请输入类型" autocomplete="off" class="layui-input">
        </div>
    </div>
<textarea id="editor"></textarea>


<script type="text/javascript">
    var _CONTROLLER_ = '/index.php/Article';
    var _ACTION_ = '/index.php/Article/addMarkdown';
    var _ROOT_ = '';
</script>

</body>
</html>