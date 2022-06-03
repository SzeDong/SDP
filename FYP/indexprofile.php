<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

		<title>User Profile</title>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid"></div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">User Profile</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<form method="POST" action="functions/login.php">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
 
				<center><button name="login" class="btn btn-primary">Login</button></center>
			</form>
		</div>
	</div>
</body>	
</html>