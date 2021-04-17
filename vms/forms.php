<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 p-5">
			<div class="card">
				<div class="form">
					<h3 class="text-center card-header bg-dark text-light">Office</h3>
					<hr>
					<form action="" method="post" class="p-3">							
						<div class="form-group">
							<input type="text" name="onumber" placeholder="Office number" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="text" name="oname" placeholder="Office Name"class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="submit" name="login" value="Save" placeholder="username" class="form-control btn btn-dark" required>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-5">
			<div class="card">
				<div class="form">
					<h3 class="text-center card-header bg-dark text-light">Visitor</h3>
					<hr>
					<form action="" method="post" class="p-3">							
						<div class="form-group">
							<input type="text" name="fname" placeholder="First name" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="text" name="mname" placeholder="Middle Name"class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="text" name="sname" placeholder="Sur Name"class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="radio" name="sex" value="M" class="radio"> Male
							<input type="radio" name="sex" value="F" class="radio"> Female
						</div>
						<div class="form-group mt-3">
							<input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="email" name="email" placeholder="Vistor email" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="file" name="email" placeholder="Vistor email" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="submit" name="login" value="Save" placeholder="username" class="form-control btn btn-dark" required>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4 p-5">
			<div class="card">
				<div class="form">
					<h3 class="text-center card-header bg-dark text-light">Staff</h3>
					<hr>
					<form action="" method="post" class="p-3">							
						<div class="form-group">
							<input type="text" name="fname" placeholder="First name" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="text" name="mname" placeholder="Middle Name"class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="text" name="sname" placeholder="Sur Name"class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="radio" name="sex" value="M" class="radio"> Male
							<input type="radio" name="sex" value="F" class="radio"> Female
						</div>
						<div class="form-group mt-3">
							<input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<input type="email" name="email" placeholder="Staff email" class="form-control" required>
						</div>
						<div class="form-group mt-3">
							<select class="form-control">
								<option>---Select office---</option>
							</select>
						</div>
						<div class="form-group mt-3">
							<input type="submit" name="login" value="Save" placeholder="username" class="form-control btn btn-dark" required>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>