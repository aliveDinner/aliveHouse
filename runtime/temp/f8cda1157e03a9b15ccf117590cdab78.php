<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"F:\aliveDinner\upupw\www\aliveHouse\public/../application/manage\view\index\faq.html";i:1501882820;s:94:"F:\aliveDinner\upupw\www\aliveHouse\public/../application/common\view\layouts\manage-main.html";i:1501605631;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="url" content="">
    <meta name="layout" content="no-layout">
    <meta name="util" content="<?php echo !empty($meta_util)?$meta_util : 'true'; ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="_SHORTCUT_" type="image/x-icon">

    <!-- load css -->
    <link rel="stylesheet" type="text/css" href="_LAYUI_/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="__CSS__/layout.css" media="all">
    <link rel="stylesheet" type="text/css" href="__CSS__/back.css" media="all">
    <link rel="stylesheet" type="text/css" href="__CSS__/iconfont.css" media="all">

    <!-- For site js -->
    <script type="text/javascript" src="__JS__/jquery.js"></script>
    <script type="text/javascript" src="_LAYUI_/layui.js"></script>

    <title><?php echo !empty($meta_title)?$meta_title.' - ' : ''; ?>_TITLE_</title>

</head>
<body>

<div class="wrap">

    <div class="container"  id="container">

        <div class="layui-layout layui-layout-back-main" id="layui_layout" style="padding:0 15px 15px 15px;">

            <!-- 右侧主体内容开启 -->
            <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <!-- Favicon -->
    <link rel="shortcut icon" href="_SHORTCUT_" type="image/x-icon">

    <!-- load css -->
    <link rel="stylesheet" type="text/css" href="_LAYUI_/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="__CSS__/layout.css" media="all">
    <link rel="stylesheet" type="text/css" href="__CSS__/iconfont.css" media="all">

    <!-- For site js -->
    <script type="text/javascript" src="__JS__/jquery.js"></script>
    <script type="text/javascript" src="__JS__/bootstrap.js"></script>
    <script type="text/javascript" src="_LAYUI_/layui.js"></script>

    <title><?php echo !empty($meta_title)?$meta_title.' - ' : ''; ?>_TITLE_</title>

    <style>
        #accordion .panel-default{
            overflow: hidden;
        }
        #accordion h3{
            color: #f33e6f;
            font-size: 24px;
        }
        #accordion h4.panel-title a {
            color: #4d4d4d;
        }
        #accordion h4.panel-title a:hover {
            color: #1fb5ac;
        }
        #accordion  .panel-default{
            margin: 10px 0px;
        }
        #accordion  .panel-default .panel-title{
            border: 1px solid #ddd;
            margin: 0px;
        }
        #accordion  .panel-default > .panel-collapse {
            background-color: #f4f4f4;
        }
        #accordion  .panel-default > .panel-collapse > .panel-body {
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            padding: 15px;
        }
        #accordion  .panel-default > .panel-collapse > .panel-body >p {
            color: #4d4d4d;
        }
        .layui-colla-item{
            border-top: none;
        }
        .layui-collapse{
            border: none;
        }
        .layui-show{
            border-top: none;
        }
    </style>

</head>

<body>
<div>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend style="text-align:center;"><?php echo !empty($meta_title)?$meta_title : '表单'; ?></legend>
        <div style="display: flex;">
            <div class="layui-collapse" id="accordion" style="margin: auto;width: 800px;padding: 15px 30px;">
                <h3>类型一</h3>
                <div>
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">contact us</h2>
                        <div class="layui-colla-content layui-show">
                            <p> 1、........？<br/>
                                ....：<a href=".">.....</a><br/>
                                ......。
                                <br/><br/>
                                2、.......？<br/>
                                ......：<a href="">.......</a><br/>
                                ....。
                            </p>
                            <p>do not break the try !</p>
                        </div>
                    </div>
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">how?</h2>
                        <div class="layui-colla-content layui-show">
                            <p>How to do?</p>
                            <p>And ?</p>
                        </div>
                    </div>
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">What?</h2>
                        <div class="layui-colla-content layui-show">
                            <p>We are ...</p>
                        </div>
                    </div>
                </div>
                <h3>类型二</h3>
                <div>
                    <div class="layui-collapse" lay-accordion>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">contact us</h2>
                            <div class="layui-colla-content layui-show">
                                <p> 1、........？<br/>
                                    ....：<a href=".">.....</a><br/>
                                    ......。
                                    <br/><br/>
                                    2、.......？<br/>
                                    ......：<a href="">.......</a><br/>
                                    ....。
                                </p>
                                <p>do not break the try !</p>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">How?</h2>
                            <div class="layui-colla-content layui-show">
                                <p>do not break the try !</p>
                            </div>
                        </div>
                        <div class="layui-colla-item">
                            <h2 class="layui-colla-title">What?</h2>
                            <div class="layui-colla-content layui-show">
                                <p>do not break the try !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</div>
<script>
    layui.use([ 'jquery','layer','flow','element'], function() {
        var $ = layui.jquery; //不用额外加载jQuery，flow模块本身是有依赖jQuery的，直接用即可。
        var flow = layui.flow;
        var element = layui.element;
        flow.load({
            elem: '#accordion' //指定列表容器
            ,done: function(page, next){ //到达临界点（默认滚动触发），触发下一页
                var lis = [];
                //以jQuery的Ajax请求为例，请求下一页数据（注意：page是从2开始返回）
                $.get('/manage/index/faq?page='+page, function(res){
                    //假设你的列表返回在data集合中
                    layui.each(res.data, function(index, item){
                        var _index = index,group,title, bodyContent = '', push = false;
                        if (item.group !== undefined){
                            group = '<h3>'+item.group + '</h3>';
                        }
                        if (item.question !== undefined){
                            layui.each(item.question, function(index, item){
                                push = true;
                                if (item.title !== undefined){
                                    title = item.title;
                                }
                                if (item.item !== undefined){
                                    layui.each(item.item, function(index, item){
                                        bodyContent += '<p>'+item+'</p>';
                                    });
                                }
                            });
                        }
                        var _content = group +
                            '<div>' +
                            '<div class="layui-colla-item" data-index="'+_index+'">' +
                            '<h2 class="layui-colla-title">'+title+'</h2>' +
                            '<div class="layui-colla-content layui-show">' + bodyContent +
                            '</div>'+
                            '</div>';

                        if (push){
                            lis.push(_content);
                        }
                    });

                    //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
                    //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
                    next(lis.join(''), page < res.pages);
                    element().init();
                });
            }
        });
    });
</script>

</body>

</html>
            <!-- 右侧主体内容结束 -->

        </div>
    </div>

</div>

<!-- 加载js文件-->
<!--  全局 -->
<script type="text/javascript" src="__JS__/site.js"></script>
<script type="text/javascript" src="__JS__/back.js"></script>
<script>
    layui.use(['layer', 'util'], function() {
        var $ = layui.jquery,
            layer = layui.layer,
            util = layui.util;

        var top = false, bar1 = false, bar2 = false,
        metaUtil = $('meta[name="util"]').attr('content');
        if (metaUtil !== undefined && metaUtil === 'true'){
            top = true;
            bar1 = true;
            bar2 = true;
        }

        //回到顶部
        //使用内部工具组件
        util.fixbar({
            top: top,
            // bar1: bar1,
//            bar2: bar2,
            css: {right: 15, bottom: 15},
            click: function(type){
                if(type === 'bar1'){
                    layer.msg('工具一');
                }else if (type === 'bar2'){
                    layer.msg('工具二');
                }
            }
        });

    });
</script>

</body>
</html>

