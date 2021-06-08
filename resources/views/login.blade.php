<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Login to admin</title>
</head>
<body>
	<div class="container mt-5">
		<h1>Please enter Login Credentials</h1>
		<form method="post" action="{{route('login-verify')}}" enctype="multipart/form-data">
			@csrf
		  <div class="form-group">
		    <label >Email</label>
		    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <input type="password" class="form-control" name="password" placeholder="Password" required>
		  </div>
		  <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="roll" required>
			  <option selected>Select your Roll</option>
			  <option value="1">Admin</option>
			  <option value="2">Customer</option>
			</select>
		  <button type="submit" class="btn btn-primary">Login</button>
		  <a href="{{route('create-register')}}" class="btn btn-success">Register</a>
		</form>
	</div>

</body>
</html>