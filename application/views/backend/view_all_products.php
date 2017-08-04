<!doctype html>
<html>
	<head>
		<title>Admin Page | View All Products</title>
		<!--Load JQuery dr CDN -->
			<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		<!--Load Bootstrap, & Datatables dr CDN -->	
			<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
<!-- 			<style>
				.row div{ border:#000 0px solid }
			</style> -->
	</head>
	<body>
		<!--Ket: dlm div row hrs ada col yg jumlah nilainya 12-->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
		<h1>Products Table</h1>
		<table id="myTable" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Product Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Stock</th>
					<th>
						<?=anchor('admin/products/create',
								  'Add Product', 
								  ['class'=>'btn btn-primary btn-sm'])
						?>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($products as $product) : ?>
					<tr>
						<td><?=$product->id?></td>
						<td><?=$product->name?></td>
						<td><?=$product->description?></td>
						<td><?=$product->price?></td>
						<td><?=$product->stock?></td>
						<td>
							<?=anchor('admin/product/update/' . $product->id,
									  'Edit',
									  ['class'=>'btn btn-default btn-sm'])
							?>
							<?=anchor('admin/product/delete/' . $product->id,
									  'Delete',
									  ['class'=>'btn btn-danger btn-sm'])
							?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
			</div>
			<div class="col-md-1"></div>
		</div>
			<script>
				$(document).ready(function(){
				    $('#myTable').DataTable();
				});
			</script>
	</body>
</html>