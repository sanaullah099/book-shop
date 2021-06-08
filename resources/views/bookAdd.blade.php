<!doctype html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Book List</title>
</head>
<body>
	<div class="container mt-5">
		<h2 > Add Books Here</h2>
		<div class="row">
			<div class="col-6">
				<form method="post" action="{{route('storebook')}}" enctype="multipart/form-data">
				
					 @if ($message = Session::get('message'))
			            <div class="alert alert-success">
			                <strong>{{ $message }}</strong>
			            </div>
			          @endif
					 <div class="form-group">
					    <label >Title</label>
					    <input type="text" class="form-control" placeholder="Enter Title" name="title">
					  </div>
					  <div class="form-group">
					    <label >Author</label>
					    <input type="text" class="form-control" placeholder="Enter Name" name="author">
					  </div>
					  <div class="form-group">
					    <label >Price</label>
					    <input type="text" class="form-control" placeholder="Enter Price" name="price">
					  </div>
					  <div class="form-group">
					    <label >Quantity</label>
					    <input type="text" class="form-control" placeholder="Enter Quantity" name="quantity">
					  </div>
					  <div class="form-group">
					    <label >Publisher</label>
					    <select class="form-select w-100" name="publisher">
						  <option selected>select publisher</option>
						  @foreach($publisher as $pub)
						  <option value="{{$pub->id}}">{{$pub->name}}</option>
						  @endforeach
						</select>
					  </div>
					  <div class="form-group">
					    <label >Description</label>
		    			<textarea class="form-control"  rows="3" name="description"></textarea>
					  </div>
					  <div class="form-group input-group increment">
					    <label >Image</label>
					    <input type="file" class="form-control" name="image[]">
					  </div>

					  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
		
	</div>




</body>
</html>