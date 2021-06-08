<!doctype html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Book List</title>
</head>
<body>
	<div class="container mt-5">
		@if($status = session('status'))
		<h1 class="alert alert-success">{{$status}}</h1>
		@endif
		<h2 class="mt-5">All the books will be displayed here <a href="{{route('createbook')}}" class="btn btn-primary">Add Books</a></h2>
		<table class="table table-bordered table-hover">
			<tr>
				<thead>
					<th>S.No</th>
					<th>Title</th>
					<th>Author</th>
					<<th>Price</th>
					<th>Quantity</th>
					<th>Publisher</th>
					<th>Cover</th>
					<th>Description</th>
					<th>Action</th>
				</thead>
			</tr>
			@foreach( $books as $book)
			<tr>
				<tbody>
					<td>{{$book->id}}</td>
					<td>{{$book->title}}</td>
					<td>{{$book->author}}</td>
					<td>{{$book->price}}</td>
					<td>{{$book->quantitiy}}</td>
					<td>{{$book->publishers->name}}</td>
					<td><img src="/uploads/{{$book->image}}" width="50"></td>
					<td>{{$book->description}}</td>
					 <td>
					 	@if($book->trashed())
					 	<a class="btn btn-small btn-success" href="deletebook/restore/{{$book->id}}">Restore</a>
					 	@else
					 	<a class="btn btn-small btn-danger" href="deletebook/{{$book->id}}">Delete</a>
					 	@endif
					 </td>
				</tbody>
			</tr>
			@endforeach
		</table>
	</div>

</body>

</html>