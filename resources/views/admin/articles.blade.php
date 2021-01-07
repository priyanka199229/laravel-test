{{--<center>
	<h1>Add Article </h1>
	{{--@foreach($data as $userinfo)
					<h3>{{ $userinfo->email}}</h3><br>
					<h3>{{$userinfo->password}}</h3><br>
					@endforeach--}}





<h1>Display Article</h1>
<!DOCTYPE html>
<html>
<head>
	<title>Create Article</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>
<body>
	<section style="padding-top:60px">
		<div class="container">
			<div class="row">
							<div class="col-md-12 ">
								<div class="card-header">
									All Articles

				<h3><a href="article" class="btn btn-primary"> Add Article</a><h3><a href="logout" class="btn btn-primary">Logout</a></h3><br>
								</div>
								@if(Session::has('article_delete'))
								<div class="alert alert-danger">
									{{Session::get('article_delete')}}
								</div>
									@endif
								<div class="card-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>ID</th>
												<th>Title</th>
												<th>IDescriptionD</th>
												<th>Actions</th>
												<th>Delete</th>
										</tr>
										<body>
											@foreach($article as $data)
												<tr>
													<td>{{$data->id}}</td>
													<td>{{$data->title}}</td>
													<td>{{$data->articledetail}}</td>
													<!-- <td><a href="articles/{{$data->id}}" class="btn btn-info">Details</a></td> -->
													<td><a href="articles/{{$data->id}}" class="btn btn-info btn-sm">Details</td>
														<td><a href="article/edit/{{$data->id}}" class="btn btn-success btn-sm">Update</td>
													<td><a href="delete/articles/{{$data->id}}" class="btn btn-danger btn-sm">Delete</td>
												</tr>
												@endforeach	
											</body>
										</thead>

									</table>
							</div>

			</div>
		</div>
	</section>

</body>
</html>