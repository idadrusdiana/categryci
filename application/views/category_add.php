<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">
	<title>Add Category</title>
</head>
<body>
	<br><br>
	<div class="container">
		<form method="post" action="<?php echo site_url('Category/store'); ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Category Name</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="img">Image</label>
				<input type="file" class="form-control-file" id="img" name="img">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" id="description" class="form-control" cols="30" rows="5" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<button type="reset" class="btn btn-danger">Reset</button>
			<a href="index" class="btn btn-secondary">Back</a>
		</form>
	</div>
</body>
</html>
