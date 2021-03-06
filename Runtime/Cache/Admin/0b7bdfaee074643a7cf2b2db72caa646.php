<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />
<script type="text/javascript" src="/Public/Admin/js/ue/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Admin/js/ue/ueditor.all.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/ue/lang/zh-cn/zh-cn.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css"/>
	<script type="text/javascript" src="/Public/Admin/js/libs/modernizr.min.js"></script>
<title>Left Home Furniture</title>
<style type='text/css'>
	select {
		background: rgba(0, 0, 0, 0) url("../images/inputbg.png") repeat-x scroll 0 0;
	    border: 1px solid #c5d6e0;
	    height: 28px;
	    outline: medium none;
	    padding: 0 8px;
	    width: 240px;
	}
	.main p input {
		float:none;
	}
</style>
</head>

<body>
<div class="topbar-wrap white">
	<div class="topbar-inner clearfix">
		<div class="topbar-logo-wrap clearfix">
			<h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
			<ul class="navbar-list clearfix">
				<li><a class="on" href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('Home/Index/index');?>" target="_blank">网站首页</a></li>
			</ul>
		</div>
		<div class="top-info-wrap">
			<ul class="top-info-list clearfix">
				<li><a href="#">管理员</a></li>
				<li><a href="#">修改密码</a></li>
				<li><a href="#">退出</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="container clearfix">
	<div class="sidebar-wrap" >
		<div class="sidebar-title">
			<h1>菜单</h1>
		</div>
		<div class="sidebar-content" >
			<ul class="sidebar-list">
				<li>
					<a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
					<ul class="sub-menu">
						<li><a href="<?php echo U('furniture');?>"><i class="icon-font">&#xe008;</i>家居管理</a></li>
						<li><a href="design.html"><i class="icon-font">&#xe006;</i>分类管理</a></li>
						<li><a href="design.html"><i class="icon-font">&#xe005;</i>职位管理</a></li>
						<li><a href="design.html"><i class="icon-font">&#xe012;</i>用户管理</a></li>
						<li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
						<li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
					</ul>
				</li>
				<li>
					<a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
					<ul class="sub-menu">
						<li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
						<li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
						<li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
						<li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!--/sidebar-->
	<div class="main-wrap">
		<div class="crumb-wrap">
			<div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;<span class="crumb-name"><a href="<?php echo U('furniture');?>">家居管理</a></span>&gt;<span class="crumb-name">家居添加</span></span></div>
			</div>
		<form action="/index.php/Admin/Furniture/addOk" method="post" enctype="multipart/form-data">
			<div class="main">
				<p class="short-input ue-clear">
					<label>标题：</label>
					<input name="name" type="text" placeholder="标题..." />
				</p>
				<div style="margin-left: 30px;margin-top: 15px;">
					<label>所属类别：</label>
					<div class="select-wrap" style="margin-top: 15px;margin-left: 85px;">
						<select name="cate_id">
							<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>
				</div>
				<p class="short-input ue-clear">
					<label>附件：</label>
					<input name="file" type="file"/>
				</p>
				<p class="short-input ue-clear">
					<label>详细介绍：<script name="content" id="editor" type="text/plain" style="width:888px;height:280px;"></script></label>
				</p>
			</div>
			<div class="btn ue-clear" style="width: 872px;margin-left: 30px;">
				<a href="javascript:;" class="confirm" id='btnSubmit'>确定</a>
				<a href="javascript:;" class="clear" id='btnReset' style="clear: right;">清空内容</a>
			</div>
		</form>
	</div>
</div>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript">
//实例化容器
var ue = UE.getEditor('editor');

$(function(){
	$('#btnSubmit').on('click',function(){
		$('form').submit();
	});
	
	$('#btnReset').on('click',function(){
		$('form')[0].reset();
	});
});	

$(".select-title").on("click",function(){
	$(".select-list").toggle();
	return false;
});
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(".select-title").find("span").text(txt);
});
showRemind('input[type=text], textarea','placeholder');
</script>
</html>