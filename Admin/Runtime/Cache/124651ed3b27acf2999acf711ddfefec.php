<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!DOCTYPE html>
<html>
<head>
<title>wemall用户中心</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link rel="stylesheet"
	href="__PUBLIC__/Style/bootstrap.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<style>
body {
  /* min-height: 2000px; */
  padding-top: 50px;
}
</style>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
				<a class="navbar-brand" href="javascript:void(0);">WeMall用户中心</a>
			</div>
			
<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active" id="dingdan">
						<a href="__ACTION__">订单</a>
					</li>
					<li class="dropdown" id="shangpin">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
							商品
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="__APP__/Admin/nav">商品分类</a>
							</li>
							<li>
								<a href="__APP__/Admin/product">商品管理</a>
							</li>
						</ul>
					</li>
					<li class="dropdown" id="weixinset">
						<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
							微信设置
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="__APP__/Weixin/index" id="weixinset">微信初始化</a>
							</li>
							
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="javascript:void(0)"><?php echo ($username); ?></a>
					</li>
					<li>
						<a href="__URL__/quit">退出</a>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
    <div class="container">
      <table class="table  table-bordered table-hover">
		  <thead>
		    <tr>
		      <th class="text-center">订单编号</th>
		      <th class="text-center">订单用户</th>
		      <th class="text-center">联系方式</th>
		      <th class="text-center">订单商品</th>
		      <th class="text-center">订单总价</th>
		      <th class="text-center">订单地址</th>
		      <th class="text-center">订单状态</th>
		      <th class="text-center">付款状态</th>
		      <th class="text-center">订单时间</th>
		    </tr>
		  </thead>
		  <tbody>
		  <?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			    <td class="text-center"><?php echo ($vo["orderid"]); ?></td>
			    <td class="text-center"><?php echo ($vo["0"]["username"]); ?></td>
			    <td class="text-center"><?php echo ($vo["0"]["phone"]); ?></td>
			    <td class="text-center">
			    	<?php $__FOR_START_15534__=1;$__FOR_END_15534__=$vo["length"];for($i=$__FOR_START_15534__;$i < $__FOR_END_15534__;$i+=1){ echo ($vo["$i"]["title"]); ?>-<?php echo ($vo["$i"]["price"]); ?>-<?php echo ($vo["$i"]["quantity"]); ?>|<?php } ?>
			    </td>
				<td class="text-center"><?php echo ($vo["totalprice"]); ?>元</td>
				<td class="text-center"><?php echo ($vo["0"]["address"]); ?></td>
				<td class="text-center"><?php echo ($vo["status"]); ?></td>
				<td class="text-center"><?php echo ($vo["pay_status"]); ?></td>
				<td class="text-center"><?php echo ($vo["time"]); ?></td>
			  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		  </tbody>
	  </table>
	  <div class="text-right"><?php echo ($page); ?></div>
    </div> <!-- /container -->
    
﻿	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="__PUBLIC__/Style/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="__PUBLIC__/Style/bootstrap.min.js"></script>

</body>
</html>