<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/Public/resource/css/flaticon/flaticon.css">
	<link rel="stylesheet" href="/Public/resource/css/common/content.css">
</head>
<body>
	<div class="line">
		<h1>注册用户管理列表</h1>
		<div class="ui-searchbox">
			<input class="verticalCenter" type="text" placeholder="关键字搜索" />
			<i class="flaticon-magnifier31"></i>
		</div>
	</div>
	<table class="tableA">
		<tr>
			<th>用户编号</th>
			<th>用户手机号</th>
			<th>用户注册时间</th>
			<th>用户状态</th>
			<th>用户订单数量</th>
			<th>操作</th>
		</tr>
		<tr>
			<td>1000000</td>
			<td>13606531232</td>
			<td>2015-07-23</td>
			<td>正常</td>
			<td>2</td>
			<td>
				<a class="btn ui-green">查看</a>
				<a class="btn ui-red">冻结</a>
			</td>
		</tr>
		<tr>
			<td>1000000</td>
			<td>13606531232</td>
			<td>2015-07-23</td>
			<td>正常</td>
			<td>2</td>
			<td>
				<a class="btn ui-green">查看</a>
				<a class="btn ui-red">冻结</a>
			</td>
		</tr>
	</table>
	<div class="line ui-pagenav">
		<div class="left">
			<i class="flaticon-left207"></i>
			<span>上一页</span>
		</div>
		<!-- <input type="text" /> -->
		<div class="right">
			<span>下一页</span>
			<i class="flaticon-right218"></i>
		</div>
		<div class="sy">首页</div>
		<div class="wy">尾页</div>
		
	</div>
	<table class="tableA">
		<tr>
			<th>私信ID</th>
			<th>私信接收人</th>
			<th>私信标题</th>
			<th>查看</th>
		</tr>
		<tr>
			<td>10001</td>
			<td class="radio">单选
				<div class="ui-checkbox">
					<div><i class="flaticon-checked21"></i></div>
					<span>全体用户</span>
				</div>
				<div class="ui-checkbox">
					<div><i class="flaticon-checked21"></i></div>
					<span>特定用户</span>
					<input type="text" />
				</div>
			</td>
			<td><p class="ui-ellipsisx100">如果文字溢出的话会出现省略号的哦</p>
				<p class="ui-ellipsisx200">如果文字溢出的话会出现省略号的哦</p></td>
			<td><a class="btn ui-orange">查看与修改</a></td>
		</tr>
		<tr>
			<td>10002</td>
			<td>多选
				<div class="ui-checkbox">
					<div><i class="flaticon-checked21"></i></div>
					<span>全体用户</span>
				</div>
				<div class="ui-checkbox">
					<div><i class="flaticon-checked21"></i></div>
					<span>特定用户</span>
					<input type="text" />
				</div>
			</td>
			<td><p class="ui-ellipsisx100">如果文字溢出的话会出现省略号的哦</p>
				<p class="ui-ellipsisx200">如果文字溢出的话会出现省略号的哦</p></td>
			<td><a class="btn ui-orange">查看与修改</a></td>
		</tr>
	</table>
	<div class="line">
		<h1>编辑私信</h1>
	</div>
	<div class="subline radio">
		<div class="name">接收人群：</div>
		<div class="ui-checkbox">
			<div><i class="flaticon-checked21"></i></div>
			<span>全体用户</span>
		</div>
		<div class="ui-checkbox">
			<div><i class="flaticon-checked21"></i></div>
			<span>特定用户</span>
			<input type="text" />
		</div>
	</div>
	<div class="line">
		<input class="lineinput" type="text" placeholder="点击输入标题" />
	</div>
	<div class="line">
		<a class="btn file ui-white">
			上传图片
			<input type="file" class="imgfile" />
		</a>
	</div>
	<div class="line">
		<a class="btn file ui-white">
			上传文件
			<input type="file" />
		</a>
	</div>
	<div class="line">
		<textarea class="linetextarea" placeholder="点击输入正文"></textarea>
	</div>
	<div class="line">
		<a class="btn ui-deepblue">发送</a>
		<a class="btn ui-red">取消</a>
	</div>
	<div class="line">
		<div class="ui-tree" id="pandrcontline">
			<div class="contline" data-classid="1">
				<a class="td1">
					<i class="flaticon-maths62"></i>
					<i class="flaticon-minussign6"></i>
				</a>
				<span>Dept.Level 1</span>
			</div>
	    </div>
	    <div class="ui-detail">
			<table class="tableB">
				<tr>
					<th>药物名称：</th>
					<td>
						<input type="text" />
					</td>
				</tr>
				<tr>
					<th>类别：</th>
					<td>
						<input type="text" />
					</td>
				</tr>
				<tr>
					<th>性质：</th>
					<td>
						<textarea></textarea>
					</td>
				</tr>
				<tr>
					<th>适应症：</th>
					<td>
						<textarea></textarea>
					</td>
				</tr>
				<tr>
					<th>禁忌症：</th>
					<td>
						<textarea></textarea>
					</td>
				</tr>
				<tr>
					<th>配伍禁忌：</th>
					<td>
						<textarea></textarea>
					</td>
				</tr>
				<tr>
					<th>药品说明：</th>
					<td>
						<textarea></textarea>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						<a class="btn ui-green">提交</a>
					</td>
				</tr>
			</table>	    	
	    </div>
	</div>
	<script src="/Public/resource/js/jquery/jquery-1.7.2.min.js"></script>
	<script src="/Public/resource/js/common/ui.js"></script>
</body>
</html>