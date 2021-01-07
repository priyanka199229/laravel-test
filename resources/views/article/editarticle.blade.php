<h1>Update Article</h1>
<!DOCTYPE html>
<html>
<head>
	<title>Update Article</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>
<body>
	<section style="padding-top:60px">
		<div class="container">
			<div class="row">
							<div class="col-md-6  offset-md-3">
								<div class="card-header">
									<b>Update Article</b>
								</div>
								<div class="card-body">
									@if(Session::has('article_updated'))
									<div class="alert alert-success" role="alert">
										{{Session::get('article_updated')}}
									</div>
										@endif
								   <form action="{{route('editarticle')}}" method="post">
								   	@csrf
								   	<input type="hidden" name="id" value="{{$article->id}}">
								   	<div class="form-group">
<b>Title :</b>        <input type="text" name="title" value="{{$article->title}}"></div><br/>
<div class="form-group">
<b>Article Description : </b><textarea  name="articledetail"  rows="3" cols="50"> {{ $article->articledetail }}</textarea></div><br>
	<input type="submit" name="update" value="update" class="btn btn-success">
</form>

								</div>
							</div>

			</div>
		</div>
	</section>

</body>
</html>