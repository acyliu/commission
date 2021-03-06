<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<script src="/commission/Public/jquery-1.11.1.min.js"></script>
		<script src="/commission/Public/bootstrap/js/bootstrap.min.js"></script>
		<link href="/commission/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="/commission/Public/plugins/DataTables/jquery.dataTables.css">
		<script type="text/javascript" src="/commission/Public/plugins/DataTables/jquery.dataTables.js"></script>
	</head>
	<body>
		<div class="col-xs-12">
		<div>
			<button class="btn btn-info" data-toggle="modal" data-target="#searchModel">复杂搜索</button>
			<button class="btn btn-success col-sm-offset-1">重新载入当月数据</button>
		</div>
		<table id="mainSourceTable" class="display" width="160%" cellspacing="0" style="margin-top: 20px;overflow-x: auto">
			<thead>
				<tr>
					<th>客户编码</th>
					<th>客户</th>
					<th>合同号</th>
					<th>发货单号</th>
					<th>业务员编码</th>
					<th>业务员</th>
					<th>存货类别</th>
					<th>存货名称</th>
					<th>规格</th>
					<th>型号</th>
					<th>颜色</th>
					<th>低价</th>
					<th>上浮的低价</th>
					<th>销售数量</th>
					<th>发货数量（米数）</th>
					<th>发货金额</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>合同号一</td>
					<td>销售订单号一</td>
					<td>发货单号一</td>
					<td>61</td>
					<td>2011/04/25</td>
					<td>$320,800</td>
					<td>合同号一</td>
					<td>销售订单号一</td>
					<td>发货单号一</td>
					<td>61</td>
					<td>2011/04/25</td>
					<td>$320,800</td>
					<td>合同号一</td>
					<td>销售订单号一</td>
					<td>发货单号一</td>
					<td>61</td>
					<td><span style="margin-left: 10px;margin-right: 10px;cursor: pointer;"> <img title="Edit" alt="Edit" src="/commission/Public/img/edit.png" data-toggle="modal" data-target="#myModal"> </span><span style="margin-left: 10px;margin-right: 10px;cursor: pointer;"> <img title="Delete" alt="Delete" src="/commission/Public/img/delete.png"> </span></td>
				</tr>
				<tr>
					<td>合同号一</td>
					<td>销售订单号一</td>
					<td>发货单号一</td>
					<td>61</td>
					<td>2011/04/25</td>
					<td>$320,800</td>
					<td>合同号一</td>
					<td>销售订单号一</td>
					<td>发货单号一</td>
					<td>61</td>
					<td>2011/04/25</td>
					<td>$320,800</td>
					<td>合同号一</td>
					<td>销售订单号一</td>
					<td>发货单号一</td>
					<td>61</td>
					<td><span style="margin-left: 10px;margin-right: 10px;cursor: pointer;"> <img title="Edit" alt="Edit" src="/commission/Public/img/edit.png" data-toggle="modal" data-target="#myModal"> </span><span style="margin-left: 10px;margin-right: 10px;cursor: pointer;"> <img title="Delete" alt="Delete" src="/commission/Public/img/delete.png"> </span></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">修改</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-6 control-label">业务提成调整比例</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="businessRatio" placeholder="业务提成调整比例">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-6 control-label">利润提成调整比例</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="businessRatio" placeholder="利润提成调整比例">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-6 control-label">调整底价金额</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="businessRatio" placeholder="调整底价金额">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-6 control-label">固定比例</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="businessRatio" placeholder="固定比例" disabled="disabled">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						取消
					</button>
					<button type="button" class="btn btn-primary">
						确定
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="searchModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">复杂搜索</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">合同号</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="businessRatio" placeholder="合同号">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">存货类别</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="businessRatio" placeholder="存货类别">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">存货编码</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="businessRatio" placeholder="存货编码">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">规格</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="businessRatio" placeholder="规格">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">型号</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="businessRatio" placeholder="型号">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">颜色</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="businessRatio" placeholder="颜色">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						取消
					</button>
					<button type="button" class="btn btn-primary">
						搜索
					</button>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>

	<script>
		$(function() {
			$("#mainSourceTable").dataTable();
			// $("#mainSourceTable tbody").on("click","tr td span img:even",function() {
			//
			// //ajax抓取数据  填充// });
		});
	</script>
</block>