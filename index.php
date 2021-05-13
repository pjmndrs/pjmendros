<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a href="https://www.sourcecodester.com" class="navbar-brand">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Search Filter Using PDO</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<div class="col-md-4">
			<form method="POST" action="insert.php">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" name="firstname" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" name="lastname" class="form-control" required="required" />
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" class="form-control" required="required"/>
				</div>
				<center><button name="save" class="btn btn-primary">Save</button></center>
			</form>
		</div>
		<div class="col-md-8">
			<form method="POST" action="">
				<div class="form-inline">
					<input type="search" class="form-control" name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>" placeholder="Search here..." required=""/>
					<button class="btn btn-success" name="search">Search</button>
					<a href="./" class="btn btn-info">Reload</a>
				</div>
			</form>
			<br /><br />
			<?php include'search.php'?>
		</div>
	</div>
</body>
</html>