<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Customer list</title>
</head>
<body>
	<div class="container">
		<h1>All Customers List displayed here </h1>
		<table class="table table-bordered table-hover">
			<tr>
				<thead>
					<th>S.No</th>
					<th>Name</th>
					<th>Quantity buy</th>
					<<th>Phone</th>
					<th>E-mail</th>
					<th>Address</th>
				</thead>
			</tr>
			@foreach($customers as $customer)
			<tr>
				<tbody>
					<td>{{ $customer->id }}</td>
					<td>{{ $customer->name }}</td>
					<td>{{ $customer->quantity_buy }}</td>
					<td>{{ $customer->phone }}</td>
					<td>{{ $customer->email }}</td>
					<td>{{ $customer->address }}</td>
				</tbody>
			</tr>
			@endforeach
		</table>
	</div>


</body>
</html>