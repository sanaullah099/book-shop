<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Customer list</title>
</head>
<body>
	<div class="container">
		<h1>User Registeration</h1>
		<form method="post" action="{{route('register')}}">
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control" name="email">
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <input type="password" class="form-control" name="password">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>