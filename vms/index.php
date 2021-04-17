<!DOCTYPE html>
<html>
<head>
	<title>VMS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 p-5">
				<div class="left-img" style="width: 100%; height: 300px">
					<img src="img/home.jpg" style="width: 100%">
				</div>
			</div>
			<div class="col-md-5 p-5">
				<div class="card">
					<div class="form">
						<h3 class="text-center card-header bg-dark text-light">User login</h3>
						<hr>
						<form action="" method="post" class="p-3">
							<p class="text-danger">Please make sure you enter the valid credental</p>
							<div class="form-group">
								<input type="text" name="username" placeholder="username" class="form-control" required>
							</div>
							<div class="form-group mt-5">
								<input type="password" name="pass" placeholder="password"class="form-control" required>
							</div>
							<div class="form-group mt-5">
								<input type="submit" name="login" value="Login" placeholder="username" class="form-control btn btn-dark" required>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>