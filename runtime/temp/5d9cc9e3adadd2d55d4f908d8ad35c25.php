<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"F:\aliveDinner\upupw\www\aliveHouse\public/../application/manage\view\department\index.html";i:1501880414;s:94:"F:\aliveDinner\upupw\www\aliveHouse\public/../application/common\view\layouts\manage-main.html";i:1501605631;}*/ ?>
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
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php echo !empty($meta_title)?$meta_title.' - ' : ''; ?>_TITLE_</title>
    <style>
        table td.action{
            padding: 6px 10px;
        }
        table td.action a button i{
            padding-right: 4px;
        }
        table td.readed label.had-readed,table td.action a button.had-readed{
            background-color: #d4d4d4 !important;
            color: #333333 !important;
        }
    </style>

</head>
<body>

<section>
    <?php if(isset($meta_title)): ?>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend><?php echo $meta_title; ?></legend>
    </fieldset>
    <?php endif; ?>
    <div class="layui-field-box">
        <form class="layui-form layui-form-pane" action="">
            <div class="layui-form-item">

                <label class="layui-form-label">关键词:</label>
                <div class="layui-input-inline">
                    <input type="text" value="<?php echo \think\Request::instance()->get('keyword'); ?>" name="keyword" placeholder=" 姓名 | 手机 | 邮箱 " class="layui-input">
                </div>

                <label class="layui-form-label">状态:</label>
                <div class="layui-input-inline">
                    <select name="level" lay-search >
                        <option value="0">全部</option>
                        <?php if(is_array($departmentLists) || $departmentLists instanceof \think\Collection || $departmentLists instanceof \think\Paginator): $i = 0; $__LIST__ = $departmentLists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $key; ?>" <?php if($key == \think\Request::instance()->get('level')): ?>selected<?php endif; ?>><?php echo $item; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>

                <button class="layui-btn" lay-submit="">查询</button>

                <label class="layui-btn" lay-filter="create">添加</label>

            </div>
        </form>
    </div>
</section>

<section class="layui-table-action">
    <div class="layui-form-item">
        <div class="layui-inline">
            <div class="layui-inline">
                <!--<label class="layui-btn layui-btn-danger" lay-filter="delete">删除</label>-->
            </div>
            <div class="layui-inline">
                <label class="layui-text layui-label"> (共 <em class="layui-color-danger"><?php echo $list->total(); ?></em> 条信息)</label>
            </div>
        </div>
        <div class="layui-inline" style="margin-right: 15px;">
            <div class="layui-inline">
                <!--<label class="layui-btn" lay-filter="create">添加</label>-->
            </div>
        </div>
    </div>
</section>

<table class="layui-table" lay-even="" lay-skin="row">
    <thead>
    <tr>
        <!--<th style="width: 20px;"><input type="checkbox" lay-filter="selectAll" lay-group="tableItem" lay-skin="primary" /></th>-->
        <th>序号</th>
        <th>部门名称</th>
        <th>部门等级</th>
        <th>部门上级</th>
        <th style="width:50px; text-align: center">操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $key = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "<tr class='empty'><td colspan='5' style='text-align: center;'> 没有数据 </td> </tr>" ;else: foreach($__LIST__ as $key=>$model): $mod = ($key % 2 );++$key;?>
    <tr data-key="<?php echo $model['id']; ?>">
        <!--<td style="width: 20px;"><input type="checkbox" name="id[<?php echo $key; ?>]" value="<?php echo $model['id']; ?>" lay-group="tableItem" lay-skin="primary"/></td>-->
        <td style="width: 45px;text-align: center;">
            <?php echo $key+(($list->currentPage()-1) * ($list->listRows())); ?>
        </td>
        <th><?php echo $model['name']; ?></th>
        <th><?php echo $model->getTrans('levelList',$model['level']); ?></th>
        <th><?php echo $model['getParent']['name']; ?></th>
        <td style="width: 150px;" class="action">
            <label class="layui-btn layui-btn-mini" lay-filter="update">编辑</label>
            <!--<label class="layui-btn layui-btn-mini layui-btn-danger" lay-filter="delete">删除</label>-->
        </td>
    </tr>
    <?php endforeach; endif; else: echo "<tr class='empty'><td colspan='5' style='text-align: center;'> 没有数据 </td> </tr>" ;endif; ?>
    </tbody>
</table>

<!-- 分页容器 -->
<div id="paging" class="paging" data-total="<?php echo $list->total(); ?>" data-rows="<?php echo $list->listRows(); ?>" data-currentPage="<?php echo $list->currentPage(); ?>"></div>

<script>
    var url = {
        createUrl:"<?php echo url('/manage/department/create'); ?>",
        updateUrl:"<?php echo url('/manage/department/update'); ?>",
    };
    $(function() {
        //分页
        Site.loadPage();
        //添加
        Back.create('create',{content:url.createUrl,area:['800px','600px']});

        //编辑
        Back.update('update',{content:url.updateUrl,area:['800px','600px']});

        //删除
        Back.delete('delete',url.deleteUrl);
    });
    layui.use([ 'layer','laydate', 'form'], function() {});
</script>

</body></html>
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

