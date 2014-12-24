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
			<table id="normalBusinessTable" class="display" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>姓名</th>
						<th>合同号</th>
						<th>基本业绩提成</th>
						<th>达标业绩提成</th>
						<th>基本利润提成</th>
						<th>未达标利润提成</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>业务员1</td>
						<td>合同号1</td>
						<td>1000</td>
						<td>2000</td>
						<td>3000</td>
						<td>4000</td>
					</tr>
					<tr>
						<td>业务员1</td>
						<td>合同号1</td>
						<td>1000</td>
						<td>2000</td>
						<td>3000</td>
						<td>4000</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>

<script>
	$(function() {
		$("#normalBusinessTable").dataTable();
	}); 
</script>