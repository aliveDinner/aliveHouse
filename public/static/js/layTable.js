/**
 * table 组件
 * @description 基于 form 、layer 封装的组件
 */
layui.define(['layer', 'form'], function (exports) {
    "use strict";
    var mod_name = 'layTable',
        $ = layui.jquery,
        layer = parent.layer === undefined ? layui.layer : parent.layer,
        form = layui.form;

    var Table = function () {
        this.config = {
            type: '1', //表格数据显示方式  可选值 1 或 2 ；1 为 选择确定，2为 滚动显示 ; 默认是 1
            elem: undefined, //表格容器
            toggleElem: undefined, //触发容器
            title: [], // 列标题 数组  为空自动读取
            max:8, // 表格最多显示列数 默认是 8 列
            success: undefined, //type:function 渲染成功调用
            fail: function (msg) { layer.msg(msg); }, //type:function 渲染失败调用
        };
    };
    var ELEM = {
        parent:{},
        toggle:{},
        valid: true // 配置是否有效 ,默认 有效
    };
    /**
     * 版本号
     */
    Table.prototype.v = '1.0.0';

    /**
     * 设置
     * @param {Object} options
     */
    Table.prototype.set = function (options) {
        var that = this;
        $.extend(true, that.config, options);
        return that;
    };

    /**
     * 渲染
     */
    Table.prototype.render = function () {
        var that = this;
        var _config = that.config;
        ELEM.parent = $(_config.elem), ELEM.toggle = $(_config.toggleElem);
        if (ELEM.parent === 0) {
            layer.msg('Table Error:找不到配置的容器elem!');
            ELEM.valid = false;
        }
        if (ELEM.toggle.length === 0) {
            layer.msg('Table Error:找不到配置的容器toggleElem!');
            ELEM.valid = false;
        }
        if (ELEM.valid){
            if (_config.type !== 2){
                ELEM.parent.scroll(function () {
                    layer.msg('表滚动事件');
                });
                ELEM.toggle.on('click',function () {
                    layer.msg('选择表列数');
                });
            }else {

            }
        }
        return that;
    };

    /**
     * 查询Table 标题 是否存在，如果存在则返回索引值，不存在返回-1
     * @param {String} title 标题
     * @param {String} id  参数filter设置为 2 才生效
     */
    Table.prototype.exists = function(title,id) {
        var _config = this.config;
        var that = ELEM.titleBox === undefined ? this.init() : this,
            tabIndex = -1;
        if ( parseInt(_config.filter) !== 2 ){
            id = null;
        }
        ELEM.titleBox.find('li').each(function(i, e) {
            var $cite = $(this).children('cite');
            if ( parseInt(_config.filter) === 2 ){
                if (id){
                    if($cite.data('id') === id) {
                        tabIndex = i;
                    }
                }else {
                    if($cite.text() === title) {
                        tabIndex = i;
                    }
                }
            }else {
                if($cite.text() === title) {
                    tabIndex = i;
                }
            }
        });
        return tabIndex;
    };

    /**
     * 获取 title id
     * @param {String} title 标题
     * @param {String} id  参数filter设置为 2 才生效
     */
    Table.prototype.getTitle=function(title,id){
        var _config = this.config;
        var that = ELEM.titleBox === undefined ? this.init() : this,
            tabId = -1;
        if ( parseInt(_config.filter) !== 2 ){
            id = null;
        }
        ELEM.titleBox.find('li').each(function(i, e) {
            var $cite = $(this).children('cite');
            if ( parseInt(_config.filter) === 2 ){
                if (id){
                    if($cite.data('id') === id) {
                        tabId = $(this).attr('lay-id');
                    }
                }else {
                    if($cite.text() === title) {
                        tabId = $(this).attr('lay-id');
                    }
                }
            }else {
                if($cite.text() === title) {
                    tabId = $(this).attr('lay-id');
                }
            }
        });
        return tabId;
    };

    Table.prototype.on = function(events, callback) {
    };

    var table = new Table();
    exports(mod_name, function (options) {
        return table;
    });
});