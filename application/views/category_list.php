<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">
	<title>List Category</title>
</head>
<body>
	<br><br>
	<div class="container">
		<a href="add" class="btn btn-primary">Add Category</a>
		<br><br>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Image</th>
					<th scope="col">Description</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach($categories as $id => $c):
				?>
				<tr>
					<td><?php echo ++$id ?></td>
					<td width="25%"><?php echo $c->name ?></td>
					<td><img src="../../assets/img/category/<?php print($c->img) ?>" width="10%"></td>
					<td><?php echo $c->description?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</body>
</html>
